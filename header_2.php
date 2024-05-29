<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/faqs.css">
    <link rel="stylesheet" href="styles/loader.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light redback fixed-top">
        <div class="bg-light topimage">
            <a class="navbar-brand ml-3" href="index.php">
                <img src="assets/save_trans.png" alt="" width="120" height="40" class="d-inline-block">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="eligibility.php">Eligibility <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="compatibility.php">Compatibility <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="search.php">Search Donor <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.php">Who we are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="faqs.php">FAQs</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <?php
                session_start();
                if(isset($_SESSION["userId"])  && isset($_SESSION["userName"])){
                    echo "<a class ='text-white' href ='includes/logout.inc.php' style='text-decoration:none;'>
                    <i class='fa fa-fw fa-sign-out'></i>Logout</a>";
                }
                else{
                    echo "<a class='btn-sm btn-primary btn-lg' href='login.php' role='button'><i class='fa fa-sign-in' aria-hidden='true'></i> Donor Login</a>
                        ";
                }

           ?>
        </div>
    </nav>
<?php
    include 'includes/dbh.inc.php'
?>