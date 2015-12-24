<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Anaconda</title>
    <link rel="icon" href="/favicon.png">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <?php
     $page = 'projects';
     include("../header.php"); 
     ?>
    <div class="container contents">
      <div class="row">
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body flash-styling">

              <object class="center-block" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="600" height="510" id="../assets/anaconda" align="middle">
                  <param name="movie" value="../assets/anaconda.swf"/>
                  <!--[if !IE]>-->
                  <object type="application/x-shockwave-flash" data="../assets/anaconda.swf" width="600" height="510">
                      <param name="movie" value="../assets/anaconda.swf"/>
                  <!--<![endif]-->
                      <a href="http://www.adobe.com/go/getflash">
                          <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
                      </a>
                  <!--[if !IE]>-->
                  </object>
                  <!--<![endif]-->
              </object>
              </div>
              <div class="panel-body project-text">
                <div class="col-sm-8 " >
                <h2 class="uppercase zero-text-margin green-text">Anaconda</h2>
                <hr class="margin-10">  
                <h3 class="zero-text-margin grey-text">Dec 2014</h3>
                <p> This game is a flash remake of one of our favourite minigames, found in Timesplitters 2. We strived to achieve the same gameplay as the original and also added a few extra modes. Listen out for the 100% MIDI remix of the original song courtesy of Josh.</div>  
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <?php
      include("../footer.php"); 
     ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>