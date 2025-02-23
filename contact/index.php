<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayEz | Contact</title>
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
       form {
           padding: 20px;
           border: 1px solid rgb(176, 176, 176) !important;
           border-radius: 10px;
           margin: 50px 400px;
           max-width: 560px;
           width: 100%;
       }
       .display-5 {
           text-align: center;
       }
       form > .btn-primary {
           width: 100%;
           min-height: 48px;
           height: 100%;
       }
       .form-group > input, .col > input, #inputState, #comments {
        width: 100%;
       }
       #sg-label {
           padding-bottom: 10px;
           margin-top: 20px;
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
        <form>
            <h3 class="display-5" id="">Contact Form</h3>
            <hr>
            <div class="form-row">
              <div class="col">
                <label for="inputEmail4">First name</label>
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <label for="inputEmail4">Last name</label>
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Province</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>Aceh</option>
                  <option>Bali</option>
                  <option>Banten</option>
                  <option>DKI Jakarta</option>
                  <option>Jawa Barat</option>
                  <option>Jawa Tengah</option>
                  <option>Jawa Timur</option>
                  <option>Jogjakarta</option>
                  <option>Nusa Tenggara Barat</option>
                  <option>Nusa Tenggara Timur</option>
                  <option>Sumatera Utara</option>
                  <option>Sumatera Barat</option>
                  <option>Sumatera Selatan</option>
                  <option>Sulawesi Selatan</option>
                  <option>Sulawesi Tenggara</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="form-group">
                <label for="comments">Comments / Questions</label>
                <textarea class="form-control" id="comments" rows="3"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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