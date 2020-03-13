<!doctype html>
<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/flag-style.css">
  <link rel="stylesheet" href="../css/me-style.css">
  <link rel="stylesheet" href="../css/report-style.css">
  <link rel="stylesheet" href="../css/school-style.css">
  <link rel="stylesheet" href="../css/main.css">
  <style>
        span {
            font-size: 14px;
            font-weight: normal;
        }
        
        a {
            color: #fff;
        }
    </style>
</head>
<body onload="startDuckGame()">
<div style="padding: 20px; background-color: thistle;">
        <header>
            <div class="nav-bar">
                <div class="nav-bar-top">
                    <div class="bar-item-left">
                        <h2 style="color: white;">MY PHP APP</h2>
                    </div>
                    <ul class="bar-item-right">
                        <li>
                            <a href="/">HOME</a>
                        </li>
                        <li>
                            <a href="../report/about.php">ABOUT</a>
                        </li>
                        <li><a style="display: block;" href="">MANAGE CUSTOMERS</a>
                            <ul class="submenu">
                                <li><a href="../view/customers.php">View customers</a></li>
                                <li><a href="../view/search.php">Search</a></li>
                                <li><a href="../view/update.php">Edit</a></li>
                                <li><a href="../view/create.php">Add</a></li>
                            </ul>
                        </li>
                         <li><a style="display: block;" href="">REPORTS</a>
                            <ul class="submenu">
                                <li><a href="../report/schools.php">Schools</a></li>
                                <li><a href="../report/flags.php">Flags</a></li>
                                <li><a href="../report/report.php">Report</a></li>
                                <li><a href="../report/me.php">Me</a></li>
                            </ul>
                        </li> 
                    </ul>
                </div>
                <div class="nav-bar-bottom"></div>
            </div>
        </header>
    </div>
