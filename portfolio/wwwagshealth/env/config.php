<?php

$strLive = FALSE;
$strPageSlider = FALSE;

if ($strLive == TRUE) {

    define('ENV_ROOTURL', 'http://localhost/templates/wwwAGSHealthLandingPage1/');

    define('ENV_KQ', 'C:/xampp/htdocs/templates/wwwAGSHealthLandingPage1/');
} else {
// Absolute path to application root folder (must end with a forward slash)
 
// URL path to application root folder (must end with a forward slash)

//URL to RSS V2 Server when needed

    define('ENV_ROOT', '');
    define('ENV_ROOTURL', '');
    define('ENV_RSS', '');
};

//SITE SETTINGS
// Site Title, Description etc
define('ENV_ROBOT', 'index, follow');
define('ENV_TITLE', 'wwwAGSHealthLandingPage1');
define('ENV_KEYWORDS', 'wwwAGSHealthLandingPage1');
define('ENV_DESCRIPTION', 'wwwAGSHealthLandingPage1');
define('ENV_WEBSITE', '');
define('ENV_GOOGLE', '');
define('ENV_TWITTER', '');
?>