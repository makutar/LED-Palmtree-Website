<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
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
     $page = 'about';
     include("header.php"); 
     ?>
    <div class="container contents">
      <div class="row">
        <div class="col-sm-12">
          <div class="flat-panel blue-light">
            <div class="panel-body percent-padding" style="text-align:center;">
              <h2 class="bold uppercase zero-text-margin">About Us</h2>
              <hr>
              <div style="text-align:left;">
                <p>LEDPalmtree is a Melbourne/Geelong based independent design studio consisting of two brothers, Lachlan and Josh Smith.</p>
                <p>Avid gamers from an early age, there was always a new Flash game in the works at LEDPalmtree HQ. Nowadays they have broadened their sights and are currently working with web development, native android applications and have a new game in the works.</p>
                <p>Recently LEDPalmtree, in collaboration with <a href='will.io'>Will Donohoe</a> and Rob Koch, attended <a href='http://unihack.net/archive/2015/'>UniHack 2015</a> and received IMC's &lsquo;Making Things Happen Award&rsquo; for CodeBreaker.&nbsp;</p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 watch">
          <div class="flat-panel" style="min-height: 700px;">
            <div class="panel-body">
            <img src="assets/tony-abbott-square.jpg" class="img-responsive img-circle center-block" style="width:65%;">
              <h2 align="center" class="uppercase line-height-large">Lachlan Smith<br><span class="orange-text"> &#39;<em>LockSmith47&#39;</em></span></h2>              
              <h3 align="center">Lead Programmer &ndash; Game Design</h3>
              <hr>                           
              <p style="text-align: justify;">Lachlan is LEDPalmtree's resident coder. He is currently studying Electrical Engineering and Computer Science at Monash University. When not hard at work he enjoys heading down to the beach to surf and beating his brother at Black Mesa. Over the summer he will be conducting computer graphics research at UCSD, in San Diego.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="flat-panel" style="min-height: 700px;">
            <div class="panel-body watch">
              <img src="assets/tony-abbott-square-2.jpg" class="img-responsive img-circle center-block" style="width:65%;">
              <h2 align="center" class="uppercase line-height-large">Joshua Smith<br><span class="green-text"> &#39;<em>Makutar&#39;</em></span></h2>              
              <h3 align="center">Art - Web Design - Graphic Design </h3>
              <hr>              
              <p style="text-align: justify;">Joshua handles the visual side of LEDPalmtree. Like his brother, he also attends Monash University, studying Mechanical Engineering and Industrial Design.
              He always has a project in the works, ranging from woodwork to digital art. A selection can be found through the <a href="design/">design</a> tab.</p>                          
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body percent-padding" style="text-align:center;">
              <h2 class="bold uppercase zero-text-margin blue-text">Contact Us</h2>
              <hr>
              <div style="text-align:center;">
                <p>Send us an email directly at: 
                  <a href="mailto:ledpalmtree@gmail.com" target="_top">ledpalmtree@gmail.com</a><br>
                  Or contact us through our <a href="https://www.facebook.com/LEDpalmtree/">Facebook Page</a>
                </p>
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
    <script>
  </body>
</html>