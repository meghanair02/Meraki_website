<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <title>Hello, world!</title>
  <style>
    html,
    body {
      width: 100%;
      height: 100%;
      font-family: 'Lato', sans-serif;
      line-height: 2;
    }

    #header {
      background-image:linear-gradient(to bottom, rgba(28, 197, 56, 0.52), rgba(13, 28, 116, 0.73)) ,url(img/bg5.jpg);
      width: 100%;
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    a {
      color: white;
    }

    .navbar-brand {
      padding-left: 10px;
      padding-right: 10px;
      border: 2px solid white;
      padding-top: 5px;
      padding-bottom: 5px;
    }

    .nav-link {
      text-transform: uppercase;
      padding-right: 50%;
    }

    .nav-item .nav-link:hover {
      color: white;
      border-bottom: 1px solid white;
    }

    .btn {
      border-radius: 0px;
    }

    #header .content {
      color: white;
      width: 100%;
      margin: auto;
      text-align: center;
      position: relative;
      top: 30%;
    }

    #features {
      text-align: center;
    }

    .wsep {
      width: 35px;
      height: 5px;
      background-color: black;
      margin: auto;
    }

    .card-title {
      font-size: 18px;
      font-weight: 700;
    }

    .card {
      border: none;
    }

    .band {
      background-color: #f3f3f7;
      width: 100%;
      height: 20%;
      text-align: center;
      padding: 5% 2%;
    }

    #our-service .row {
      margin-left: 2%;
      margin-right: 2%;
    }

    .col-lg-6 h3 {
      text-transform: uppercase;
      font-size: 20px;
      font-weight: bolder;
    }

    #header .btn {
      margin-right: 2%;
    }
  </style>
</head>

<body>
  <section id="header">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MERAKI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content">
      <h1>Give a quick kick start to your blogging journey.</h1>
      <p style="font-family: cursive;">A platform which allows you to do genre specific blogging.</p>
      <a href="LOGIN.PHP" class="btn btn-outline-light btn-lg">GET STARTED</a>
    </div>
  </section><br><br>
<!--
  <section id="features">
    <h1><b>HELLO, WELCOME TO COMPANY</b></h1><br><br>
    <div class="row" style="width: 90%; margin: auto;">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <p class="card-title">FULLY RESPONSIVE</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nunc ac ante tristique faucibus vel in ligula.</p>
            <a href="#" class="btn btn-outline-dark btn-lg">LEARN MORE</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">FRIENDLY SUPPORT</h3>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nunc ac ante tristique faucibus vel in ligula.</p>
            <a href="#" class="btn btn-dark btn-lg">LEARN MORE</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">RETINA DISPLAY</h3>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet nunc ac ante tristique faucibus vel in ligula.</p>
            <a href="#" class="btn btn-outline-dark btn-lg">LEARN MORE</a>
          </div>
        </div>
      </div>
    </div><br><br>
    <img src="https://www.pngkey.com/png/full/892-8923601_braun-responsive-website-design-phones-laptops-and-tablets.png" width="50%"><br><br>
  </section>

  <section id="our-service">
    <div class="band">
      <h1>OUR SERVICE</h1><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis enim in euismod maximus.</p>
    </div><br><br><br><br>

    <div class="row">

      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6">
            <h3> <i class="fas fa-wifi"></i>&nbsp;WEB DESIGN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis enim in euismod maximus.</p>
          </div>
          <div class="col-lg-6">
            <h3><i class="fas fa-paint-brush"></i>&nbsp;mock-up design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis enim in euismod maximus.</p>
          </div>
          <div class="col-lg-6">
            <h3><i class="fas fa-chart-line"></i>&nbsp;web development</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis enim in euismod maximus.</p>
          </div>
          <div class="col-lg-6">
            <h3><i class="fab fa-windows"></i>&nbsp;mobile application</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis enim in euismod maximus.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 " style="background-image: url(https://lh3.googleusercontent.com/proxy/VmQAsLMTPq_NVFYMnKgEwfJ-_dADI1Moq-LUs6aJLYZXQE9FpcqV1nixCHhcuF7Dk7cWIiK-hCtTui1j03cWvdlSP0ipsZPJ2LPQ2flQ3ykdiK9IjeAobfg); background-repeat: no-repeat; background-size: cover; background-position: center;">
      </div>
    </div>-->

  </section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>