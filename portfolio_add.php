<?php
    session_start();

    if(!isset($_SESSION["UlanyjyAdy"]))
    {
        header("Location: index.php");
        exit();
    }

    $Sertifikat_Ady="";

    $TM_Ady="";
    $TM_Mazmuny="";
    $EN_Ady="";
    $EN_Mazmuny="";
    $RU_Ady="";
    $RU_Mazmuny="";
    

    if(isset($_POST["Sertifikat_Ady"]))
        $Sertifikat_Ady=$_POST["Sertifikat_Ady"];

    if(isset($_POST["TM_Ady"]))
        $TM_Ady=$_POST["TM_Ady"];
    if(isset($_POST["TM_Mazmuny"]))
        $TM_Mazmuny=$_POST["TM_Mazmuny"];
    if(isset($_POST["EN_Ady"]))
        $EN_Ady=$_POST["EN_Ady"];
    if(isset($_POST["EN_Mazmuny"]))
        $EN_Mazmuny=$_POST["EN_Mazmuny"];
    if(isset($_POST["RU_Ady"]))
        $RU_Ady=$_POST["RU_Ady"];
    if(isset($_POST["RU_Mazmuny"]))
        $RU_Mazmuny=$_POST["RU_Mazmuny"];

    if (!empty($_FILES["Sertifikat_Surat"]['name']) && strlen($Sertifikat_Ady)>0) 
    {
        $target_file=$Sertifikat_Ady.'.'.pathinfo($_FILES["Sertifikat_Surat"]['name'], PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES["Sertifikat_Surat"]["tmp_name"], "assets/portfolio/".$target_file))
        {

            $data = file_get_contents('language/services.json');
            $json_arr = json_decode($data, true);

            // add data
            $json_arr[] = array('name'=>$Sertifikat_Ady, 'type'=>'3', 'image'=>$target_file);

            // encode json and save to file
            file_put_contents('language/services.json', json_encode($json_arr));

            //TM
            $data = file_get_contents('language/tm.json');
            $json_arr = json_decode($data, true);
            $json_arr[$Sertifikat_Ady.'_header']=$TM_Ady;
            $json_arr[$Sertifikat_Ady.'_content']=$TM_Mazmuny;
            file_put_contents('language/tm.json', json_encode($json_arr));

            //EN
            $data = file_get_contents('language/en.json');
            $json_arr = json_decode($data, true);
            $json_arr[$Sertifikat_Ady.'_header']=$EN_Ady;
            $json_arr[$Sertifikat_Ady.'_content']=$EN_Mazmuny;
            file_put_contents('language/en.json', json_encode($json_arr));

            //RU
            $data = file_get_contents('language/ru.json');
            $json_arr = json_decode($data, true);
            $json_arr[$Sertifikat_Ady.'_header']=$RU_Ady;
            $json_arr[$Sertifikat_Ady.'_content']=$RU_Mazmuny;
            file_put_contents('language/ru.json', json_encode($json_arr));


            //$arr = array($Sertifikat_Ady.'_header'=>$TM_Ady, $Sertifikat_Ady.'_content'=>$TM_Mazmuny);
            //$json_arr[] = $arr["0"];
        }
    }

   header("Location: portfolio.php");
   exit();
?>