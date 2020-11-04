<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayEz | Billing Detail</title>
    <link rel="stylesheet" href="../src/styles/bootstrap.min.css">
    <link rel="stylesheet" href="../src/styles/bootstrap-grid.min.css">
    <link rel="shortcut icon" href="../src/assets/img/se_logo.jpg" type="image/x-icon">
    <style>
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
       #container-wrapper {
         background-color: #e9ecef;
         padding-top: 50px;
         padding-bottom: 50px;
       }
       .alert {
         text-align: center;
       }
       form {
           padding: 20px;
           border: 1px solid rgb(176, 176, 176) !important;
           border-radius: 10px;
           margin: 50px 200px;
           max-width: 660px;
           width: 100%;
       }
       form > .btn-primary {
           width: 100%;
           min-height: 48px;
           height: 100%;
       }
       .form-group > input, #inputState {
        width: 100%;
       }
       .display-5 {
           text-align: center;
       }
    </style>
</head>
<body>
    <div id="wrapper">
    <nav class="nav-pills">
          <ul class="nav nav-pills">
              <li class="nav-item">
                <div class="navbar-brand" href=".">
                  <a href="..">
                    <img src="../src/assets/img/se_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    StayEz
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../login">Sign in</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../signup">Create account</a>
              </li>
            </ul>
        </nav>
        <hr>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>  
        <div class="container">

            <form method="POST">
                <h3 class="display-5" id="">Billing Detail</h3>
                <div class="form-group">
                  <label for="inputFullName">Full Name</label>
                  <input type="text" class="form-control" id="inputFullName" required>
                </div>
                <div class="form-group">
                  <label for="inputEmail1">Email</label>
                  <input type="text" class="form-control" id="inputEmail1" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail2">Retype Email</label>
                    <input type="text" class="form-control" id="inputEmail2" required>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Phone Number (optional)</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Country/region of residence</label>
                    <select id="inputState" class="form-control" required>
                      <option selected>Choose...</option>
                      <option>Indonesia</option>
                      <option>Malaysia</option>
                      <option>Singapore</option>
                      <option>Myanmar</option>
                      <option>Brunei Darussalam</option>
                      <option>Vietnam</option>
                      <option>Laos</option>
                      <option>Cambodia</option>
                      <option>Timor Leste</option>
                    </select>
                  </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Next</button>
              </form>
        </div>

        <div id="container-wrapper">
          <div class="container">
          <div class="row">
              <div class="col-sm">
                <strong>About</strong>
                <ul class="list-group">
                    <li class="list-group-item"><a href="../how.html">How StayEz works</a></li>
                    <li class="list-group-item"><a href="../about.html">About Company</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <strong>Support</strong>
                <ul class="list-group">
                <li class="list-group-item"><a href="../faq.html">FAQs</a></li>
                    <li class="list-group-item"><a href="../privacy.html">Privacy policy</a></li>
                    <li class="list-group-item"><a href="../terms.html">Terms of use</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <strong>Contact</strong>
                <ul class="list-group">
                <li class="list-group-item"><a href="../customer-service.html">Contact Customer Service</a></li>
                    <li class="list-group-item"><a href="../contact">Contact Form</a></li>
                </ul>
              </div>
            </div>
        </div>
        </div>
    </div>
    <footer>
        <span>All material here in © 2020 StayEz Company Pte. Ltd. All Rights Reserved.</span>
    </footer>
</body>
</html>