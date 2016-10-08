<?php
include("inc/data.php");
include("inc/functions.php");
$pageTitle = "All";
$section = null;
if(isset($_GET["cat"])){
  if($_GET["cat"]== "China"){
    $pageTitle ="China";
    $section = "China";
  }else if ($_GET["cat"]=="Ecuador"){
    $pageTitle ="Ecuador";
    $section = "Ecuador";
  }else if($_GET["cat"]=="CostaRica"){
    $pageTitle ="CostaRica";
    $section = "CostaRica";
  }else if($_GET["cat"]=="Colombia"){
    $pageTitle ="Colombia";
    $section = "Colombia";
  }
  }
?>
<html>
  <head>
    <meta charset="utf-8" name ="viewport" content = "width=device-width, initial-scale=1.0" />
    <title>Matthew Chung || Developer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media ="screen">
  </head>
  <body>
      <header id ="top" class ="main-header">
        <a href="index.html" id="logo">
          <h1>Matthew Chung</h1>
          <h2>Developer</h2>
        </a>
        <nav id="menu">
          <ul>
            <li><a href="index.html">Portfolio</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact Information</a></li>
            <li class="selected"><a href="photoGallery.html" class="selected">Photo Gallery</a></li>
              <ul class="nav">
                <li class="China <?php if ($section== "China"){echo" on"; } ?>"><a href="catalog.php?cat=China">China</a></li>
                <li class="Ecuador<?php if ($section== "Ecuador"){echo" on"; } ?>"><a href="catalog.php?cat=Ecuador">Ecuador</a></li>
                <li class="CostaRica<?php if ($section== "CostaRica"){echo" on"; } ?>"><a href="catalog.php?cat=CostaRica">Costa Rica</a></li>
                <li class="Colombia<?php if ($section== "Colombia"){echo" on"; } ?>"><a href="catalog.php?cat=Colombia.php">Colombia</a></li>
              </ul>
            <li><a href="travels/index.php">Our Adventures</a></li>
          </ul>
        </nav><!--end Nav -->
      </header>
    	<div id="content">
    <div class="section catalog page">
        <div class="wrapper">
      <h1><?php
        echo "<a href='catalog.php'>All Travel Pics</a> &gt; ";
        echo $pageTitle; ?></h1>
        <ul class="items">
          <?php
            $categories = array_category($catalog,$section);
            foreach($categories as $id){
              echo get_item_html($id,$catalog[$id]);
            }
          ?>
        </ul>
      </div>
    </div>
    </div><!-- end content -->
      <footer>
      <a href="http://facebook.com/MatthewADCChung"><img src="img/facebook-wrap.png" alt="Facebook Logo" class ="social-icon"></a>
      <p>©2016 Matthew Chung.</p>
    </footer>
    </div>
      <style>
           @media screen and (max-width: 620px) {
            #menu ul {
               display:none;
              }
            #gallery li{
               float:none;
               width: 90%;
               }
              }
           @media screen and (min-width: 621px){
            #menu select,
            #menu button {
              display:none;
                }
              }
      </style>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/apps.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>
