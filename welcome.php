<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>socialsearcher</title>
    <link rel="stylesheet" href="stylle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <!--navbar-->
             
     <nav class="navbar navbar-expand-lg navbar-light  bg-light" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SearchEngine</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tools</a>
              </li>            
            </ul>
            <button class="btn" ><a href="logout.php">Logout</a></button>>
          </div>
        </div>
      </nav>
    <ul><li>
    <button class="btn" ><a href="logout.php">Logout</a></button></li></ul>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>