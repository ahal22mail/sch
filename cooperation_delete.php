<?php
  session_start();

  if(!isset($_SESSION["UlanyjyAdy"]))
  {
      header("Location: index.php");
      exit();
  }
  $id = $_GET['id'];

  $data = file_get_contents('language/services.json');
  $json_arr = json_decode($data, true);
  
  // get array index to delete
  $arr_index = array();
  foreach ($json_arr as $key => $value)
  {
      if ($key == $id)
      {
          $arr_index[] = $key;
          if (unlink('assets/cooperation/'.$value["image"])) {
            echo ("Hyzmatdaşlyk faýly pozup bolmady");
            }
      }
  }
  
  // delete data
  foreach ($arr_index as $i)
  {
      unset($json_arr[$i]);
  }
  
  // rebase array
  $json_arr = array_values($json_arr);
  
  // encode array to json and save to file
  file_put_contents('language/services.json', json_encode($json_arr));

  header("Location: cooperation.php");
  exit();
?>