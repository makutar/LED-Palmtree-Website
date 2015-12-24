<?php if (!isset($subpage)) {
  $subpage = 'none';
}
$root = "/LED-Palmtree-Website/";
?>
<div id='navbarGradient'></div>
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a href="<?php echo $root."index.php"?>" class="pull-left"><img src="<?php echo $root."assets/Logo-small.png"?>" id="logo"></a>
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
        <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="<?php echo $root."index.php"?>">Home<span class="sr-only">(current)</span></a></li>
        <li class="<?php echo ($page == "projects" ? "active" : "")?>"><a href="<?php echo $root."projects/"?>">Projects</a></li>
        <li class="<?php echo ($page == "blog" ? "active" : "")?>"><a href="<?php echo $root."blog/"?>">Blog</a></li>
        <li class="<?php echo ($page == "about" ? "active" : "")?>"><a href="<?php echo $root."about.php"?>">About</a></li>
        <li class="dropdown <?php echo ($page == "design" ? "active" : "")?>">
          <a href="<?php echo $root."design/index.php"?>" class="art-dropdown">Design</a>
          <a href="#" class="dropdown-toggle art-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><div id="josh-portfolio">Josh's Portfolio</div></li>
            <li role="separator" class="divider" id="portfolio-divider"></li>
            <li class="<?php echo ($subpage == "graphic" ? "active" : "")?>"><a href="<?php echo $root."design/graphic-design.php"?>">Graphic Design</a></li>
            <li class="<?php echo ($subpage == "artwork" ? "active" : "")?>"><a href="<?php echo $root."design/artwork.php"?>">Artwork</a></li>
            <li class="<?php echo ($subpage == "woodwork" ? "active" : "")?>"><a href="<?php echo $root."design/woodwork.php"?>">Woodwork</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

