<?php
require 'config.php';?>
<!doctype html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="project.css">
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
      <div class="sidebar" id="sidebar">
           <li><a href="#">Tguide blog admin </a></li>
           <hr class="hr1">
           <li><a href="dash">Dashboard </a></li>
           <li><a href="category.php"> Add Category </a> </li>
           <li> <a href="new.php">New Article </a> </li>
           <br>
           <li> <a href="logout.php">Log out </a> </li>
       </div>
   <header>
       <div class="title-bar">
       </div>
       <span style="margin:10px"><hr class="hr"></span>
    </header>
    <script>
        document.querySelector('#breadcrumb').addEventListener('click', sidebarOpen);
        document.querySelector('#close').addEventListener('click', sidebarClose);
        function sidebarOpen(){
           document.querySelector('#sidebar').style.display= "block";
        }
         function sidebarClose(){
           document.querySelector('#sidebar').style.display= "none";
        }

    </script>