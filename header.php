<div id='navbarGradient'>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a href="/LED-Palmtree-Website/index.php" class="pull-left"><img src="assets/Logo.png" id="logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" id='hamburger'>
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="/LED-Palmtree-Website/index.php">Home<span class="sr-only">(current)</span></a></li>
          <li class="<?php echo ($page == "projects" ? "active" : "")?>"><a href="/LED-Palmtree-Website/projects.php">Projects</a></li>
          <li class="<?php echo ($page == "blog" ? "active" : "")?>"><a href="/LED-Palmtree-Website/blog.php">Blog</a></li>
          <li class="<?php echo ($page == "about" ? "active" : "")?>"><a href="/LED-Palmtree-Website/about.php">About</a></li>
          <li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href="/LED-Palmtree-Website/contact.php">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
