<?php
    @session_start();
    include './class/student.php';
    $student_obj = new Student();
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Example PHP Ibanez</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">

    </head>
    <body >
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                          <li> <img src="./assets/images/ce.png" alt="CE" class="tlogo"> </li>
                          <?php if(isset($_SESSION['isLogin'])) { ?>
                            <li class="active"><a href="Report.php">Report</a></li>
                            <li class="active"><a href="index.php">Logout</a></li>
                          <?php } else { ?>
                            <li class="active"><a href="index.php">Home</a></li>
                          <?php } ?>
                    </ul>

                </div>
            </div>
        </nav>