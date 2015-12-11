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
     $page = 'about';
     include("header.php"); 
     ?>
    <div class="container contents">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default blue-light box-shadow--2dp">
            <div class="panel-body no-top-padding" >
              <h1>About</h1>
                <p>LEDPalmtree is a Melbourne/Geelong based independent design studio consisting of two brothers, Lachlan and Josh Smith.</p>
                <p>Avid gamers from an early age, there was always a new Flash game in the works at LEDPalmtree HQ. Nowadays they have broadened their sights and are currently working with web development, native android applications and have a new game in the works.</p>
                <p>Recently LEDPalmtree, in collaboration with Will Donohoe and Rob Koch, attended UniHack 2015 and received the &lsquo;Making Things Happen Award&rsquo; for CodeBreaker.&nbsp;</p>
                <p>&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row equalizer">
        <div class="col-sm-6 watch">
          <div class="flat-panel box-shadow--2dp" style="min-height: 700px;">
            <div class="panel-body">
            <img src="assets\tony-abbott-square.jpg" class="img-responsive img-circle center-block" style="width:65%;">
              <h1 align="center">Lachlan Smith &ndash;<span class="orange-text"> &#39;<em>LockSmith47&#39;</em></span></h1>              
              <h3 align="center">Lead Programmer &ndash; Game Design</h3>              
              <p>&nbsp;</p>              
              <p>Lachlan is currently studying Electrical Engineering and Computer Science at Monash University. When not laboriously studying he enjoys heading down to the surf and beating his brother at Black Mesa. Over the summer he will be conducting computer graphics research at UCSD, in San Diego.</p>
              <p>&nbsp;</p>
              <h4 align="center">Likes &ndash; Tau Cannon</h4>  
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="flat-panel box-shadow--2dp" style="min-height: 700px;">
            <div class="panel-body watch">
              <img src="assets\tony-abbott-square-2.jpg" class="img-responsive img-circle center-block" style="width:65%;">
              <h1 align="center">Joshua Smith &ndash; <span class="green-text"> &#39;<em>Makutar&#39;</em></span></h1>              
              <h3 align="center">Art - Graphic Design &ndash; Game mechanics</h3>              
              <p>&nbsp;</p>
              <p style="text-align: justify;">Josh is currently studying Mechanical engineering and Industrial design at Monash University. &nbsp;He is always trying his hand at some creative project, often seen in some form of woodwork, visual arts or cello in addition to digital media. For recreation Josh enjoys working his way through a steady backlog of steam games or playing tennis.</p>              
              <p>&nbsp;</p>              
              <h4 align="center">Likes - Peripherals, Cold Drip &nbsp; Dislikes:</h4>
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
    <script>
  </body>
</html>