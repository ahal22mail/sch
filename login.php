

<?php
  session_start();
if (isset($_SESSION['UlanyjyAdy']))
{
  // header("Location: index.php");
  // exit();
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
    <title>"SANLY ÇÖZGÜT" HJ</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
  </head>

<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="signin.php" method="post">
    <!-- <img class="mb-4" src="../assets/sch.jpg" alt=""height="72"> -->
    <h1 class="h3 mb-3 fw-normal">Ulgama girmek</h1>

    <div class="form-floating">
      <input name="_UserName" type="username" class="form-control" id="floatingInput" placeholder="Ulanyjy">
      <label for="floatingInput">Ulanyjy ady</label>
    </div>
    <div class="form-floating">
      <input name="_UserPassword" type="password" class="form-control" id="floatingPassword" placeholder="Açar sözi">
      <label for="floatingPassword">Açar sözi</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Içeri gir</button>
    <!-- <p class="mt-5 mb-3 text-muted">&copy;2022</p> -->
    <p class="mt-5 mb-3 text-muted"><a href="https://www.sanlychozgut.com.tm/" class="mt-5 mb-3">"SANLY ÇÖZGÜT"</a> HOJALYK JEMGYÝETI <span class="mt-5 mb-3 text-muted"> @2022</span></p>
  </form>
</main>


    
  </body>
</html>
