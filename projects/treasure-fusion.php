<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">

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

              <object class="center-block" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="500" height="650" id="../assets/treasure-fusion-ledsite" align="middle">
                  <param name="movie" value="../assets/treasure-fusion-ledsite.swf"/>
                  <!--[if !IE]>-->
                  <object type="application/x-shockwave-flash" data="../assets/treasure-fusion-ledsite.swf" width="500" height="650">
                      <param name="movie" value="../assets/treasure-fusion-ledsite.swf"/>
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
                <h2 class="uppercase zero-text-margin orange-text">Treasure Fusion</h2>
                <hr class="margin-10">  
                <h3 class="zero-text-margin grey-text">March 2014</h3>
                <p>Unlock new gems and challenge your friends in this addictive new puzzle game! Inspired by 2048, combine similar treasures to create new combinations!</p>
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