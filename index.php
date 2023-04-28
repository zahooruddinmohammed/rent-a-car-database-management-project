<?php
  //Start session
  session_start();
  //Check whether the session variable username is present or not
  if(!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
  }

?>
<html>
<head>
<title> home page </title>
<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="Stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
   
<div class="container">


<a class="float-right" href="logout.php">logout</a>
<h1>welcome  <?php echo $_SESSION['username'];?></h1> 
</div>

</body>
</html>