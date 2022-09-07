<?php
  session_start();

  if(!isset($_SESSION["UlanyjyAdy"]))
  {
      header("Location: index.php");
      exit();
  }
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ahal Akgaýew, TÝGE">
    <meta name="generator" content="TÝGE">
    <title>ADMINISTRATOR</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sidebars.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style_admin.css" rel="stylesheet">

    <script>

    </script>
  </head>
  <body>

  <!-- Menu -->
    <main class="d-flex flex-nowrap">
  
        <?php include_once("Administrator_menu.php"); ?>
      
        <div class="container-fluid overflow-auto">
          <p class="pfont " style="font-size: x-large; font-weight:600;">ADMINISTRATOR PENJIRESI</p>
          <p style="text-align:left;"></p>
          <p class="pfont" style="text-align:left; margin-left:10px;">Sertifikatlar</p>
         
        <table class="table table-hover">
        <thead>
            <tr>
                <th style='font-weight: bold; text-align: center;'>T/B</th>
                <th style='font-weight: bold; text-align: center;'>Ady</th>
                <th style='font-weight: bold; text-align: center;'>Surat</th>
                <th style='font-weight: bold; text-align: center;'>Poz</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $string = file_get_contents("language/services.json");
            $json = json_decode($string, true);
            $i=0;
            foreach ($json as $key => $value) 
            {
                if (!is_array($value)) 
                {
                    // echo $key . '=>' . $value . '<br />';
                } 
                else if($value["type"]=="5")
                {

                    echo '<tr>
                            <td>'.$i.'</td>
                            <td> '.$value["name"].'</td>
                            <td>
                                <h4 style="margin-top:0px;"><img src="assets/sertificates/'.$value["image"].'" style="object-fit:contain;height:300px;width:400px;" alt="Sertifikat" height="200" ></h4></div>
                            </td>

                            <td><a href="sertificate_delete.php?id='.$key.'">'.$key.'-Poz</a></td>
                        </tr>';
                    $i++;
                }
            }
            ?>
            
        </tbody>

    </table>

    <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
            <div class="d-flex justify-content-between flex-wrap">

            <button type="button" class="btn btn-primary btn-eplan" style="color: white; background-color: #5D79A5;"  data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
                +Täze
            </button>

            </div>
        </div>
    </div>

    </div>

    <form action="sertificate_add.php" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content" >
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">Täze goşmak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" style="margin:10px; !important">
                    <p>Degişli maglumatlary giriziň.</p>

                    <div class="form-floating col-sm-12">
                        <input name="Sertifikat_Ady" type="text" class="form-control" id="Sertifikat_Ady" placeholder="ady">
                        <label style="margin-left:10px"  for="Sertifikat_Ady">Ady</label>
                    </div>

                    <div class="form-floating col-sm-12">
                        <input name="Sertifikat_Surat" type="file" class="form-control" id="Sertifikat_Surat" placeholder="surat">
                        <label style="margin-left:10px"  for="Sertifikat_Surat">Surat</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ýap</button>
                    <button type="submit" class="btn btn-primary">Ýatda sakla</button>
                </div>
                </div>
            </div>
        </div>
    </form>

          <!--  -->
          <span class="" id="List"></span>

        </div>
    </main>

  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/sidebars.js"></script>
  <script src="../js/jquery-3.6.0.min.js"></script>

  </body>
</html>
