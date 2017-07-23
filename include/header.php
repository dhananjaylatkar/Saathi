<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<?php
    $currpage = (explode("/Saathi/", $_SERVER['REQUEST_URI'])[1]);
    // echo(explode("/Saathi/", $_SERVER['REQUEST_URI'])[1]=='contact');
?>
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