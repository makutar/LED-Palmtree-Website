<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome!</title>
    <link rel="icon" href="/favicon.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <style>
      body {
        background: #212121; /* For browsers that do not support gradients */
        background: -webkit-linear-gradient(#353535, black) fixed; /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#353535, black) fixed; /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#353535, black) fixed; /* For Firefox 3.6 to 15 */
        background: linear-gradient(#353535, black) fixed; /* Standard syntax */
      }  

      #index-logo {
        width: 80%;
      } 

      .vertical-center {
        min-height: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        display: -webkit-flex; /* For Safari */
        -webkit-justify-content: center; /* For Safari */
        -webkit-align-items: center; /* For Safari */
      }

      .home-list {
        background: none;
        width: 100%;
      }

      .home-list li {
        text-align: center;
        margin-bottom: 13%;
      }

      .home-list li a {
        font-family: "Montserrat";
        color: #9d9d9d;
        font-size: 1.5em;
      }

      .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
      background-color: black;
      color: white;
      }

      hr {
        border-color: #9d9d9d;
        width:100%;
        margin-top: 2%;
        margin-bottom: 4%;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="container vertical-center">
      <img src="assets/Logo.png" id="index-logo">
      <hr>
      <ul class="nav navbar-nav home-list">
        <li class="col-sm-3"><a href="projects/">Projects</a></li>
        <li class="col-sm-3"><a href="blog/">Blog</a></li>
        <li class="col-sm-3"><a href="about.php">About</a></li>
        <li class="col-sm-3"><a href="design/index.php">Design</a></li>
      </ul>
    </div>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>

