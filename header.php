<div id='navbarGradient'></div>
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a href="/LED-Palmtree-Website/index.php" class="pull-left"><img src="/LED-Palmtree-Website/assets/Logo-small.png" id="logo"></a>
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
        <li class="dropdown">
          <a href="#" class="art-dropdown">Design</a>
          <a href="#" class="dropdown-toggle art-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><div id="josh-portfolio">Josh's Portfolio</div></li>
            <li role="separator" class="divider" id="portfolio-divider"></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Art</a></li>
            <li><a href="#">Woodwork</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

