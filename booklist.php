<?php 
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ./login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayEz | Best Hotel and Homestay Deals</title>
    <link rel="stylesheet" href="./src/styles/bootstrap.min.css">
    <link rel="stylesheet" href="./src/styles/bootstrap-grid.min.css">
    <link rel="shortcut icon" href="./src/assets/img/se_logo.jpg" type="image/x-icon">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
       nav {
        padding: 15px 10px 0px 10px;
       }

       .navbar-brand {
          color: rgb(44, 44, 44);
          font-family: 'Handlee', cursive;
          font-weight: bold;
          font-size: x-large;
       }

       .form-control {
           width: 100px;
       }
       footer {
           text-align: center;
           padding-top: 20px;
           padding-bottom: 20px;
           color: lightgray;
           background-color: rgb(44, 44, 44);
       }
       .list-group-item {
           background-color: inherit;
           border: none;
           padding-left: 0;
       }
       .card-deck {
           margin-bottom: 30px;
       }
       #Popular {
           text-align: center;
           font-weight: bold;
           color: rgb(44, 44, 44);
       }
       #container-wrapper {
         background-color: #e9ecef;
         padding-top: 50px;
         padding-bottom: 50px;
       }
       .jumbotron{
          color: white;
          background-image: url(./src/assets/img/java-tours-borobudur.jpg);
       }
       hotel-list {
          display: block;
          margin-top: 32px;
          width: 100%;
          padding: 16px;
      }
      #searchElement {
        width: 320px;
        border-radius: 5px;
        height: 38px;
      }
      #searchButtonElement {
        width: 150px;
        margin-bottom: 10px;
        color: white;
      }
      .log-out {
          margin-left: 20px;
      }
      .card-img-top {
        width: 280px;
        height: 180px;
      }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="nav-pills">
          <ul class="nav nav-pills">
              <li class="nav-item">
                <div class="navbar-brand" href=".">
                  <a href=".">
                    <img src="./src/assets/img/se_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    StayEz
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login">Sign in</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="./signup">Create account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="booklist.php">My Booking List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link log-out btn-danger" href="logout.php">Log Out</a>
              </li>
              
            </ul>
        </nav>
        <hr>
        <div class="card text-center">
            <h5 class="card-header">My Booking List</h5>
            <div class="card-body">
            <img src="https://pix6.agoda.net/hotelImages/109104/-1/a9582edf89cd8e3b53c377e436e66d70.jpg?s=1024x768" class="card-img-top" alt="...">
                <h5 class="card-title">Anantara Seminyak Bali Resort</h5>
                <p class="card-text">Booking Date : 12-10-2020</p>
                <a href="#" class="btn btn-primary">Booking Detail</a>
            </div>
            <hr>
            <div class="card-body">
            <img src="https://pix6.agoda.net/hotelImages/2909960/-1/8e3f2466fd0f721a649ac7d112b61306.jpg?s=1024x768" class="card-img-top" alt="...">
                <h5 class="card-title">Hotel Santika Premiere Beach Resort Belitung</h5>
                <p class="card-text">Booking Date : 08-06-2020</p>
                <a href="#" class="btn btn-primary">Booking Detail</a>
            </div>
        </div>
        
        <div id="container-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <strong>About</strong>
                <ul class="list-group">
                    <li class="list-group-item"><a href="how.html">How StayEz works</a></li>
                    <li class="list-group-item"><a href="about.html">About Company</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <strong>Support</strong>
                <ul class="list-group">
                    <li class="list-group-item"><a href="faq.html">FAQs</a></li>
                    <li class="list-group-item"><a href="privacy.html">Privacy policy</a></li>
                    <li class="list-group-item"><a href="terms.html">Terms of use</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <strong>Contact</strong>
                <ul class="list-group">
                    <li class="list-group-item"><a href="customer-service.html">Contact Customer Service</a></li>
                    <li class="list-group-item"><a href="./contact">Contact Form</a></li>
                </ul>
              </div>
            </div>
        </div>
        </div>
    </div>
    <footer>
        <span>All material here in © 2020 StayEz Company Pte. Ltd. All Rights Reserved.</span>
    </footer>
    <script src="app.js" type="module"></script>
</body>
</html>