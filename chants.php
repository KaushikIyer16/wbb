<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chants</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <!-- <link rel="stylesheet" href="./css/chants.css"> -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <?php include 'links.php'; ?>
    <style media="screen">
      body{
        background: url("./resources/bg_grey.png");
      }
      h1{
        color: rgba(48,66,160,1);
      }
      .wbb-player{
        background-color: rgba(48,66,160,1);

      }
      .wbb-chant-lyrics{
        font-size: 1.3rem;
        text-align: justify;
        padding-left: 14px;

      }
      .wbb-chant{
        position: relative;
        height: 180px;
        overflow-y: scroll;
      }
      .wbb-icon{
        color: rgba(48,66,160,1) !important;
      }
      .wbb-player-controls{
        background-color: rgba(176,176,176,1) !important;
      }
      .wbb-chant-card{
        margin-bottom: 1rem;
      }

      @media (max-device-width: 532px) {
        .wbb-chant-lyrics{
          font-size: 2rem;


        }
      }
    </style>
  </head>
  <body>
    <?php include './header.php'; ?>

    <div class="container wbb-container">
      <h1>CHANTS <i class="fa fa-music"></i></h1>
      <?php

      $chantsJson = array(
        'bfc1' => 'Oh when the blues...... (X2)<br>
                      Go marching in......<br>
                      Oh when the blues go marching in <br>
                      I wanna be in that number <br>
                      Oh when the blues go marching in. <br>',

        'bfc2' => 'Albert (few) <br>
                      Roca (rest) <br>
                      Albert (few) <br>
                      Roca (rest) <br>
                      <br>
                      (everyone)<br>
                      Parth Jindal went to Spain<br>
                      He had a cup of mocha<br>
                      Brought us back a manager<br>
                      His name is Albert Roca<br>
                      <br>
                      Ohhh oh oh oh oh oh oh<br>
                      Ohhhh oh oh ohh ohh<br>
                      Ohhh oh oh oh oh oh oh<br>
                      Oh oh oh ohhhh ohhhh<br>
                      <br>
                      Santoshakke.... Haadu Santoshakke (x2)<br>',

        'bfc4' => 'Everywhere we go <br>
                  People wanna know <br>
                  Who we are <br> 
                  So we tell them <br>
                  We are BFC<br>  The mighty mighty BFC <br>
                  We are the Champions<br>
                   The mighty mighty champions <br>
                  Mighty mighty champions Mighty mighty champions <br>
                  We are BFC  Mighty mighty champions <br>',

        'bfc5' => 'Oh Udantaaaa... Oh Udantaaaa... (X2)<br>
                  He runs a dash<br>
                  As quick as flash<br>
                  Oh Udantaaaa.... Oh Udantaaaa...<br>
                  ',

        'bfc6' => 'My heart goes Jua-na-na-na-nan. <br>
                  Jua-na-na-na-nan in the morning. <br>
                  My heart goes Jua-na-na-na-nan <br>
                  Jua-na-na-na-nan in the evening<br>',

        'bfc7' => 'If you\'re happy & you know it shout Nishu. (few) <br>
                  Nishu! (rest) <br>
                  If you\'re happy & you know it shout Nishu. (few) <br>',

        'bfc8' => 'Bheke.......(X2) <br>
                  La Laa la laa la laa la laaaaaa (x3) <br>
                  Bheke <br>',

        'bfc9' => 'La lala lalaa. HOOO! <br>
                   La lala lalaa. HOOO!  <br>
                  La lala lala lala laaaa  <br>
                  La lala lalaa. HOOO! <br>
                   La lala lalaa. HOOO!  <br>
                  La lala lala lala laaaa <br>
                  <br>
                  We\'re the West Block Blues. WHO?  <br>
                  We\'re the West Block Blues. WHO?  <br>
                  I Just don\'t think you understand.  <br>
                  We\'re Albert Roca’s men. HOO!  <br>
                  We\'ll fight till the end. HOO!  <br>
                  We will never bow to youuuuuuu <br>
                  <br>
                  We\'ve got Chhetri. WHO? <br>
                   Sunil Chhetri. HOO!  <br>
                  I just don\'t think you understand. <br> 
                  Oh when He scores. HOO! <br>
                   We go fucking mad. HOO! <br>
                   We\'ve got Sunil Chhetriiiii. <br>
                  <br>
                  This is what we do. HOO!  <br>
                  This is how we live. HOO!  <br>
                  I just don\'t think you understand. <br>
                   We will sing this song. HOO! <br>
                   All night long. HOO! <br>
                   We\'re the famous West Block Bluessss. <br>'

     );


       ?>

    </div>

    <div class="container">

      <?php
      $counter = 0;
      foreach ($chantsJson as $audio => $lyrics) {

          if ($counter%2 == 0) {
            echo '
                <div class="row">
                <div class="col s12 m12 l6 wbb-chant-card">
                  <div class="card">
                      <div class="card-title wbb-chant">
                        <p class="wbb-chant-lyrics">
                          '.$lyrics.'
                        </p>

                      </div>
                      <div class="card-content wbb-player" >
                        <a class="btn-floating waves-effect waves-light wbb-player-controls" onclick="playSong(\''.$audio.'\')"><i class="fa fa-2x fa-play wbb-icon"></i></a>
                        <a class="btn-floating waves-effect waves-light wbb-player-controls" onclick="stopSong(\''.$audio.'\')"><i class="fa fa-2x fa-stop wbb-icon"></i></a>
                        <a class="btn-floating waves-effect waves-light wbb-player-controls" onclick="pauseSong(\''.$audio.'\')"><i class="fa fa-2x fa-pause wbb-icon"></i></a>
                      </div>

                      <audio controls controlsList="nodownload" id="'.$audio.'" style="display:none;">
                        <source src="./resources/chants/'.$audio.'.aac" type="audio/aac" >
                        Your browser does not support the audio element.
                      </audio>
                    </div>
                  </div>
      ';
          }
          else{
            echo '<div class="col s12 m12 l6 wbb-chant-card">
              <div class="card">
                <div class="card-title wbb-chant">
                  <p class="wbb-chant-lyrics">
                    '.$lyrics.'
                  </p>

                </div>
                <div class="card-content wbb-player" >
                  <a class="btn-floating waves-effect waves-light wbb-player-controls" onclick="playSong(\''.$audio.'\')"><i class="fa fa-2x fa-play wbb-icon"></i></a>
                  <a class="btn-floating waves-effect waves-light wbb-player-controls" onclick="stopSong(\''.$audio.'\')"><i class="fa fa-2x fa-stop wbb-icon"></i></a>
                  <a class="btn-floating waves-effect waves-light wbb-player-controls" onclick="pauseSong(\''.$audio.'\')"><i class="fa fa-2x fa-pause wbb-icon"></i></a>
                </div>

                <audio controls controlsList="nodownload" id="'.$audio.'" style="display:none;">
                  <source src="./resources/chants/'.$audio.'.aac" type="audio/aac" >
                  Your browser does not support the audio element.
                </audio>
              </div>
            </div>
            </div>

        ';
          }
          $counter = $counter +1;
      }
       ?>

     </div>



    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      var currentSong = null;
      function playSong(songName) {
          if (currentSong !=null) {
            var curr = document.getElementById(currentSong);
            curr.pause();
            curr.currentTime = 0;
          }
          currentSong = songName;
          var chant = document.getElementById(songName);
          chant.play();
      }

      function pauseSong(songName) {
        var chant = document.getElementById(songName);
        chant.pause();
      }

      function stopSong(songName) {
        var chant = document.getElementById(songName);
        chant.pause();
        chant.currentTime = 0;
      }
      $(document).ready(function(){
        $('.button-collapse').sideNav({
            menuWidth: 800, // Default is 300
            draggable: true, // Choose whether you can drag to open on touch screens,
          }
        );
      });
    </script>
  </body>
</html>
