<?php
session_start();
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dlog - Activity Tracker</title>
        <meta name="description" content="Download free Bootstrap 4 multipurpose template Comply." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <!--main section-->
        <section class="bg-texture hero" id="main">
            <div class="container">
                
                <div class="row d-md-flex brand">
                    <div class="col-md-6 hidden-sm-down wow fadeIn">
                        <img class="img-fluid mx-auto d-block" src="img/activity.jpg"/>
                    </div>
                    <div class="col-md-6 col-sm-12 text-white wow fadeIn">
                        <h2 class="pt-4">DLOG </h2>
                        <p class="mt-5">
                            Join communities where you can inspire with your everyday Actions and get inspires by other people's Actions. DLOG is the best app to note, track and share your everyday Activities.
                        </p>
                        <p class="mt-5">
                            <a href="login.php" class="btn btn-primary mr-2 mb-2 page-scroll">Member Login</a>
                            <a href="login.php" class="btn btn-white mb-2 page-scroll">Club Admin Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        

        <!--footer-->
        <section class="bg-footer" id="connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h1>DLOG</h1>
                        
                        <p class="pt-2 text-muted">
                            &copy; DLOG. A Database Design and Management Project
                            <a href="https://mbs.rutgers.edu/">(RUTGERS) </a>. Developed by <a href="https://www.linkedin.com/in/karthik-keertipati-8191435a">@karthik Keertipati</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
    </body>
</html>


