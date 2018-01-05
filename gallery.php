<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <?php include 'links.php'; ?>
    <style media="screen">
      body{
        background: url("./resources/bg_grey.png");
      }
      .nav-previous, .nav-next{
        opacity: 1 !important;
      }
      .nav-next{
        right:-100px !important;
      }
      .nav-previous{
        left: -100px !important;
      }
      .closer{
        font-size: 49px !important;
        background: rgba(255, 0, 0, 0) !important;

        display: block;
        width: 50px !important;
        height: 40px;
        line-height: 40px;
        text-align: center;
        position: absolute;
        text-decoration: none;
        outline: 0px;
        top: 0px;
        right: 0px !important;
        cursor: pointer;
        padding: 4px;
      }
    </style>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="container" id="gallery" style="margin-top: 5%;">
      <?php
        for ($i=0; $i < 5; $i++) {
          echo '<div class="row">
          <div class="col l6 m6 s12">
            <a href="./resources/gallery/high_res/'.($i*5+1).'.jpg"><img src="./resources/gallery/low_res/'.($i*5+1).'.png" class="img-responsive" style="width:100%;"/></a>
          </div>';
          for ($j=2; $j <= 5; $j++) {

            echo '
              <div class="col l3 m3 s12">
                <a href="./resources/gallery/high_res/'.($i*5+$j).'.jpg"><img src="./resources/gallery/low_res/'.($i*5+$j).'.png" class="img-responsive" style="width:100%;"/></a>
              </div>';

          }
          echo '</div>';
        }

       ?>

    </div>


  </div>
  </div>


    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script src="./js/jquery.poptrox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      var foo = $('#gallery');
      foo.poptrox({
        usePopupNav: true,
        popupNavPreviousSelector:	'.nav-previous',// (Advanced) Popup Nav Previous selector
	      popupNavNextSelector:		'.nav-next',
        popupBackgroundColor: 'rgba(0,0,0,0)'
      });
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
