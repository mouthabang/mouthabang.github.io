<?php
$strLive = FALSE;
$strPageSlider = FALSE;

if($strLive == TRUE) {
 define('ENV_ROOT', 'C:/xampp/htdocs/wwwviraladco/');

 define('ENV_ROOTURL', 'C:/xampp/htdocs/wwwviraladco/');

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
define('ENV_TITLE', 'Viraladco | Marketing |');
define('ENV_KEYWORDS', '');
define('ENV_DESCRIPTION', '');
define('ENV_WEBSITE', '');

?>