<?php
    session_start();

    if(!isset($_SESSION["UlanyjyAdy"]))
    {
        header("Location: index.php");
        exit();
    }
    $id = $_GET['id'];
    $portfolio_Ady="";

    $data = file_get_contents('language/services.json');
    $json_arr = json_decode($data, true);

    // get array index to delete
    $arr_index = array();
    foreach ($json_arr as $key => $value)
    {
        if ($key == $id)
        {
            $arr_index[] = $key;
            $portfolio_Ady=$value["name"];

            if (unlink('assets/portfolio/'.$value["image"])) {
            echo ("Tejribe faýly pozup bolmady");
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


    //TM
    $data = file_get_contents('language/tm.json');
    $json_arr = json_decode($data, true);
    // get array index to delete
    $arr_index = array();
    foreach ($json_arr as $key => $value)
    {
        if ($key == $portfolio_Ady.'_header' || $key == $portfolio_Ady.'_content')
            $arr_index[] = $key;
    }
    // delete data
    foreach ($arr_index as $i)
    {
        unset($json_arr[$i]);
    }
    file_put_contents('language/tm.json', json_encode($json_arr));

    //EN
    $data = file_get_contents('language/en.json');
    $json_arr = json_decode($data, true);
    // get array index to delete
    $arr_index = array();
    foreach ($json_arr as $key => $value)
    {
        if ($key == $portfolio_Ady.'_header' || $key == $portfolio_Ady.'_content')
            $arr_index[] = $key;
    }
    // delete data
    foreach ($arr_index as $i)
    {
        unset($json_arr[$i]);
    }
    file_put_contents('language/en.json', json_encode($json_arr));

    //RU
    $data = file_get_contents('language/ru.json');
    $json_arr = json_decode($data, true);
    // get array index to delete
    $arr_index = array();
    foreach ($json_arr as $key => $value)
    {
        if ($key == $portfolio_Ady.'_header' || $key == $portfolio_Ady.'_content')
            $arr_index[] = $key;
    }
    // delete data
    foreach ($arr_index as $i)
    {
        unset($json_arr[$i]);
    }
    file_put_contents('language/ru.json', json_encode($json_arr));



  header("Location: portfolio.php");
  exit();
?>