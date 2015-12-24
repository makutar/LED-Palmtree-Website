<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Artwork</title>
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
    <style>
      #wrench {
        font-size:100pt;
        right:40px;
        top:0px;
      }

      .wrench-container {
        height:500px;
      }

      .construction-text {
        margin-top: 40px;
      }

    </style>

  </head>
  <body>
    <?php
     $page = 'design';
     $subpage = 'artwork';
     include("../header.php"); 
     ?>
    <div class="container contents">
      <div class="row" >
        <div class="col-sm-12">
          <div class="flat-panel">
            <div class="panel-body">
              <div class="col-sm-5 wrench-container">
                <i class="fa fa-wrench icon" id="wrench"></i>
              </div>
              <div class="col-sm-7 construction-text">
                <h2 class="uppercase project-title">Sorry!</h2>
                <p>This part of the website is still under construction.</p>
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