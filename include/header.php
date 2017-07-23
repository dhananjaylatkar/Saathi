<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    // Returns abcd for the url as http://localhost/Saathi/abcd, where localhost can be any hostname like students.iitm.ac.in
    $currpage = (explode("/Saathi/", $_SERVER['REQUEST_URI'])[1]);
    // Returns http://localhost/Saathi/ or http://students.iitm.ac.in/Saathi/
    $rooturi = $_SERVER['SERVER_NAME'].'/Saathi/';

    // Append here a list of allowed pages
    $allowedpages = array("", "about", "contact");
    // Will take you to the welcome page at / if the page is not in the $allowedpages list
    if(!in_array($currpage, $allowedpages)) header("location: http://".$rooturi);
?>
    <link rel="stylesheet" href="http://<?php echo($rooturi); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?php echo($rooturi); ?>css/style.css">
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="http://<?php echo($_SERVER['SERVER_NAME']);?>/Saathi/">
                    <span class="logonav">Saathi</span>
                    <span class="text-muted"><?php echo($currpage);?></span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo ($currpage=='about'?'active':'');?>">
                        <a href="http://<?php echo($_SERVER['SERVER_NAME']);?>/Saathi/about">About</a>
                    </li>
                    <li class="<?php echo ($currpage=='contact'?'active':'');?>">
                        <a href="http://<?php echo($_SERVER['SERVER_NAME']);?>/Saathi/contact">Contact</a>
                    </li>
                    <!-- <li><a href="#">Projects</a></li> -->
                </ul>
            </div>
        </div>
    </nav>