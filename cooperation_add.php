<?php
    session_start();

    if(!isset($_SESSION["UlanyjyAdy"]))
    {
        header("Location: index.php");
        exit();
    }

    $Sertifikat_Ady="";

    if(isset($_POST["Sertifikat_Ady"]))
    $Sertifikat_Ady=$_POST["Sertifikat_Ady"];

    if (!empty($_FILES["Sertifikat_Surat"]['name']) && strlen($Sertifikat_Ady)>0) 
    {
        $target_file=$Sertifikat_Ady.'.'.pathinfo($_FILES["Sertifikat_Surat"]['name'], PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES["Sertifikat_Surat"]["tmp_name"], "assets/cooperation/".$target_file))
        {

            $data = file_get_contents('language/services.json');
            $json_arr = json_decode($data, true);

            // add data
            $json_arr[] = array('name'=>$Sertifikat_Ady, 'type'=>'4', 'image'=>$target_file);

            // encode json and save to file
            file_put_contents('language/services.json', json_encode($json_arr));
        }
    }

  header("Location: cooperation.php");
  exit();
?>