<?php
  static $errorCode = 1;
  if (isset($_POST['query-submit'])) {

    try {
      $conn = new PDO("mysql:host=localhost;dbname=wbb","root","root");
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('INSERT INTO queries VALUES (:Id,:Name,:Email,:Query)');
      $stmt->execute(array(
        "Id"    => '',
        "Name"  => $_POST['name'] ,
        "Email" => $_POST['email'],
        "Query" => $_POST['query']
      ));
      $errorCode = 0;
    } catch (Exception $e) {
      $errorCode = 1;
    }

  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>West Block Blues</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <?php include 'links.php'; ?>
    <style media="screen">



    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>

    <div class="wbb-background">
      <div class="container wbb-carousel" id="carousel-laptop">
        <div class="row">
          <div class="col l12 m12 s12">
            <div class="carousel carousel-slider center" data-indicators="true">
            <div class="carousel-item red white-text" href="#one!">
              <img src="./resources/carousel/car1.jpg" alt="">
            </div>
            <div class="carousel-item amber white-text" href="#two!">
              <img src="./resources/carousel/car2.jpg" alt="">
            </div>
            <div class="carousel-item green white-text" href="#three!">
              <img src="./resources/carousel/car3.jpg" alt="">
            </div>
            <div class="carousel-item red white-text" href="#one!">
              <img src="./resources/carousel/car4.jpg" alt="">
            </div>
            <div class="carousel-item amber white-text" href="#two!">
              <img src="./resources/carousel/car5.jpg" alt="">
            </div>
            <div class="carousel-item green white-text" href="#three!">
              <img src="./resources/carousel/car6.jpg" alt="">
            </div>
            
          </div>
          </div>
        </div>
      </div>

      <div class="container wbb-carousel" id="carousel-mob">
        <div class="row">
          <div class="col l12 m12 s12">
            <div class="carousel carousel-slider center" data-indicators="true">
            <!-- <div class="carousel-item red white-text" href="#one!">
              <img src="./resources/car4.jpg" alt="">
            </div> -->
            <div class="carousel-item amber white-text" href="#two!">
              <img src="./resources/car1_mob.png" alt="">
            </div>
            <div class="carousel-item green white-text" href="#three!">
              <img src="./resources/car2_mob.png" alt="">
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wbb-about-us">
      <div class="container wbb-container">
        <div class="row">
          <div class="col l8">
            <h2 style="font-weight:800;">About the West Block Blues </h2>
            <p>The team on the pitch does its best every night to try and make our dreams come true.
                Us, in the stands, do our best every single time to push them to limits they knew not
                existed to help them make their dreams a reality. We are the obsessed, the passionate
                – We are The West Block Blues.
            </p>
            <h4>ಕನ್ನಡ ನೆಲದ ಹೆಮ್ಮೆಯ ಬ್ಲೂಸ್ ಗೆಲುವಿನತ್ತ ಸಾಗುತಿದೆ !</h4>

            <a href="about.php" class="btn btn-large wbb-a-button" style="margin-top:5%;"> Learn More </a>
          </div>
        </div>
      </div>
    </div>



    <div class="wbb-membership" id="wbb-membership">
      <div class="container wbb-container" style="color:black;">
        <div class="row">
          <div class="col l6 s12 m12 valign-wrapper">
            <div class="wbb-register-text">
                <h2 style="">CONTACT US!</h2>
            </div>
          </div>
          <form class="col s12 l6 m12" action="" method="POST">

            <div class="row">
              <div class="input-field col l12 m12 s12">
                <input id="name" type="text" name="name" class="validate">
                <label for="name">Name</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col l12 m12 s12">
                <input id="email" type="email" name="email" class="validate" required>
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col l12 m12 s12">
                <input id="city" type="text" name="query" class="validate" required>
                <label for="city">Query</label>
              </div>
            </div>

            <button class="wbb-button btn waves-effect waves-light" type="submit" name="query-submit" style="font-weight:600;">Submit
            </button>
          </form>


        </div>
      </div>

    </div>

    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.carousel.carousel-slider').carousel({fullWidth:true, duration: 175});
        $('.button-collapse').sideNav({
            menuWidth: 800, // Default is 300
            draggable: true, // Choose whether you can drag to open on touch screens,
          }
        );
      });
      setInterval(function() {
        $('.carousel').carousel('next');
      },5000);

      <?php
        if ($errorCode != 1) {
          echo "Materialize.toast('Query Submitted Successfully!', 10000, 'rounded wbb-toast');";
          $errorCode = 1;
        }
       ?>
    </script>
  </body>
</html>
