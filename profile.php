<?php
  session_start();
   $login=isset($_SESSION['user']);
  if($login==false){
    header("locatoion: index.php");
  exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4" style="max-width:600px">
         <h1 class="h3">Profile</h1>
         <ul class="mt-2 list-group">
            <li class="list-group-item">Name: Alice</li>
            <li class="list-group-item">Email: Alice123@gmail.com</li>
            <li class="list-group-item">Phone No: 0978590243</li>
            <li class="list-group-item">Address: Some Address</li>
         </ul>
         <a href="_actions\logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>