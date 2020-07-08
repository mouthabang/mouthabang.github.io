<?php

$strLive = FALSE;
$strPageSlider = FALSE;

if ($strLive == TRUE) {

        
    define('ENV_ROOT', 'C:/xampp/htdocs/wwweonmedia/');

    define('ENV_ROOTURL', 'C:/xampp/htdocs/wwweonmedia/');

    define('ENV_RSS', '');

} else {

      // Absolute path to application root folder (must end with a forward slash)
      define('ENV_ROOT', '');

      // URL path to application root folder (must end with a forward slash)
      define('ENV_ROOTURL', '');

      //URL to RSS V2 Server when needed
       define('ENV_RSS', '');


};

//SITE SETTINGS
// Site Title, Description etc
define('ENV_ROBOT', 'index, follow');
define('ENV_TITLE', 'Eonmedia');
define('ENV_KEYWORDS', 'Eonmedia');
define('ENV_DESCRIPTION', '');

?>