<?php

function curPageURL()
    {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on")
        {
        $pageURL .= "s";
        }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80")
        {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        }
    else
        {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
    return $pageURL;
    }

include_once ENV_ROOT . 'lib/detect.php';
include_once ENV_ROOT . 'inc/head.php';
?>

 <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
  <div class="container">
    <a class="navbar-brand" href="<?php echo ENV_ROOTURL; ?>index.php">AGS Health</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="ion-navicon"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="probootstrap-navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link bold-font" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#options">Option Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="#aboutus">About Us</a></li>
  
    </ul>
    </div>
  </div>
</nav>
<!-- END nav -->


