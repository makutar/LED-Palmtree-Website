<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <?php
     $page = 'blog';
     include("header.php"); 
     ?>
    <div class="container contents">
      <div class="row">
        <div class="col-sm-12">
          <div class="flat-panel orange-light">
            <div class="panel-body">

              <object class="center-block" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="600" height="510" id="assets/anaconda" align="middle">
                  <param name="movie" value="assets/anaconda.swf"/>
                  <!--[if !IE]>-->
                  <object type="application/x-shockwave-flash" data="assets/anaconda.swf" width="600" height="510">
                      <param name="movie" value="assets/anaconda.swf"/>
                  <!--<![endif]-->
                      <a href="http://www.adobe.com/go/getflash">
                          <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
                      </a>
                  <!--[if !IE]>-->
                  </object>
                  <!--<![endif]-->
              </object>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="flat-panel green-light">
            <div class="panel-body">
              <object class="center-block" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="800" height="600" id="assets/anaconda" align="middle">
                  <param name="movie" value="assets/Tank Game.swf"/>
                  <!--[if !IE]>-->
                  <object type="application/x-shockwave-flash" data="assets/Tank Game.swf" width="800" height="600">
                      <param name="movie" value="assets/Tank Game.swf"/>
                  <!--<![endif]-->
                      <a href="http://www.adobe.com/go/getflash">
                          <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
                      </a>
                  <!--[if !IE]>-->
                  </object>
                  <!--<![endif]-->
              </object>

            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blue-light box-shadow--6dp">
            <div class="panel-body" style="height:600px;">
              <h4>About Lach (Ag43t47)</h4>
              <h2>About Lach (Ag43t47)</h2>  
              <h3>About Lach (Ag43t47)</h3>
              <p> argle bargle in my snargle</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      include("footer.php"); 
     ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>