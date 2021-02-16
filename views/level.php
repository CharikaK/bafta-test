<?php
$level='';                      
$level=$_GET['level'] ?? ''; 

if($level=='novice'){
  $heading="<h2>User Level</h2>";
  $content="<div class='well'>You are a Novice user.</div>";  
}elseif($level=='intermediate'){
  $heading="<h2>User Level</h2>";
  $content="<div class='well'>You are an Intermediate user.</div>";  
}elseif($level=='expert'){
  $heading="<h2>User Level</h2>";
  $content="<div class='well'>You are an Expert user.</div>";  
}elseif($level=='expert'){
  $heading="<h2>User Level</h2>";
  $content="<div class='well'>You are an Expert user.</div>";  
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>BAFTA Test Login - Novice</title>
  </head>

  <body> 


    <div class="container">
        
          <?php
          echo $heading;
          echo $content;
          ?>        
        <!-- <h2>User Level</h2>
        <div class="well">You are a Novice user.</div> -->
        
    </div>
    




  </body>
</html>