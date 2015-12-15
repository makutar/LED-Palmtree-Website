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
     $page = 'projects';
     include("header.php"); 
     ?>
    <div class="container contents">
      <div class="row" >
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body project-panel">
              <div class="col-sm-4 thumbnail-container .row-eq-height">
                <img src="assets/anaconda_screen.png" style="width:100%;">
              </div>
              <div class="col-sm-8 .row-eq-height">
                <h2 class="uppercase green-text project-title">Anaconda</h2>
                <hr class="margin-10">  
                <h3 class="zero-text-margin grey-text">Dec 2014</h3>
                <p> Back in 2002 a game called Anaconda was released within Free Radical Design’s Timesplitters 2. Due to the current lack of next gen availability of the game we have created a new and improved homage ready to be enjoyed by a new generation of gamers. </p>
              </div>  
            </div>
            <div class="play-div">
              <div class= "playGradient">
              <form role="form" action="projects/anaconda.php" method="get">
                <button type="submit" class="btn btn-primary play-button">Play</button> 
              </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="row" >
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body project-panel">
              <div class="col-sm-4 thumbnail-container .row-eq-height">
                <img src="assets/treasure_fusion.png" style="width:100%;">
              </div>
              <div class="col-sm-8 .row-eq-height">
                <h2 class="uppercase orange-text project-title">Treasure Fusion</h2>
                <hr class="margin-10">  
                <h3 class="zero-text-margin grey-text">March 2014</h3>
                <p> Unlock new gems and challenge your friends in this addictive new puzzle game! Inspired by 2048, combine similar treasures to create new combinations!</p>
              </div>  
            </div>
             <div class="play-div">
              <div class= "playGradient">
                <form role="form" action="projects/treasure-fusion.php" method="get">
                <button type="submit" class="btn btn-primary play-button">Play</button> 
              </form> 
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="row" >
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body project-panel">
              <div class="col-sm-4 thumbnail-container .row-eq-height">
                <img src="assets/tank_game.png" style="width:100%;">
              </div>
              <div class="col-sm-8 .row-eq-height">
                <h2 class="uppercase blue-text project-title">Tank Game</h2>
                <hr class="margin-10">  
                <h3 class="zero-text-margin grey-text">Feb 2014</h3>
                <p> This small flash experiment was inspired by the Wii Tank game on Wii Play. </p>
              </div>  
            </div>
             <div class="play-div">
              <div class= "playGradient">
                <form role="form" action="projects/tank-game.php" method="get">
                <button type="submit" class="btn btn-primary play-button">Play</button> 
              </form> 
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="row" >
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body project-panel">
              <div class="col-sm-4 thumbnail-container .row-eq-height">
                <img src="assets/tank_game.png" style="width:100%;">
              </div>
              <div class="col-sm-8 .row-eq-height">
                <h2 class="uppercase blue-text project-title">Tank Game</h2>
                <hr class="margin-10">  
                <h3 class="zero-text-margin grey-text">Feb 2014</h3>
                <p> This small flash experiment was inspired by the Wii Tank game on Wii Play. </p>
              </div>  
            </div>
             <div class="play-div">
              <div class= "playGradient">
                <form role="form" action="projects/tank-game.php" method="get">
                <button type="submit" class="btn btn-primary play-button">Play</button> 
              </form> 
              </div>
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