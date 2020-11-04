<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayEz | Sign Up</title>
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
       form > .btn-primary, #InputEmail1, #InputPassword1, .col > .form-control {
           width: 100%;
           min-height: 48px;
           height: 100%;
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
                <a class="nav-link active" href=".">Create account</a>
              </li>
            </ul>
        </nav>
        <hr>
        <form>
            <h3 class="display-5" id="">Sign Up</h3>
            <hr>
            <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <small id="emailHelp" class="form-text text-muted">Make sure it matches the name on your government ID.</small></br>
            <div class="form-group">
              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
            </div>
            <small id="emailHelp" class="form-text text-muted">By selecting <strong>Agree and continue</strong> below, I agree to StayEz’s <a href="../terms.html">Terms of Service</a>, <a href="../privacy.html">Privacy Policy</a>.</small><br>
            <button type="submit" class="btn btn-primary">Agree and continue</button>
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