<?php

$service_name=$_GET["q"];
  $lng=$_GET["r"];

?>

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 data-tag="<?php echo $service_name ?>" class="modal-title">
        <?php
          $string = file_get_contents("language/".$lng.".json");
          $json = json_decode($string, true);
          
          foreach ($json as $key => $value)
          {
              if($key==$service_name)
                echo $json[$service_name];
          }
        ?>

        </h4>
      </div>

      <div class="modal-body" style="font-size:19px;color:#646464;">
        
          <?php
              
              $string = file_get_contents("language/services.json");
              $json = json_decode($string, true);
              
              foreach ($json as $key => $value) 
              {
                  if (!is_array($value)) 
                  {
                      // echo $key . '=>' . $value . '<br />';
                  } 
                  else 
                  {
                    // echo $key.':<br>';
                    if($service_name==$key)
                    {
                      foreach ($value as $key => $val) 
                      { 
                          //echo $key . '=>' . $val . '<br />';
                          if($key==$lng)
                            echo $val;
                      }
                      
                    }
                  }
              }
          ?>
      </div>