<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta name="locale" content="EN">
        <meta name="language" content="ENGLISH">
        <meta name="content-language" content="EN">



        <!-- Indexing -->
        <meta name="robots" content="<?php
        if ($strPageRobot != '')
            {
            echo $strPageRobot;
            }
        else
            {
            echo ENV_ROBOT;
            }
        ?>">

        <title><?php
            if ($strPageTitle != '')
                {
                echo $strPageTitle;
                }
            else
                {
                echo ENV_TITLE;
                }
            ?></title>
        <meta name="title" content="<?php
        if ($strPageTitle != '')
            {
            echo $strPageTitle;
            }
        else
            {
            echo ENV_TITLE;
            }
        ?>">
        <meta name="description" content="<?php
        if ($strPageDescription != '')
            {
            echo $strPageDescription;
            }
        else
            {
            echo ENV_DESCRIPTION;
            }
        ?>">
        <meta name="keywords" content="<?php
        if ($strPageKeywords != '')
            {
            echo $strPageKeywords;
            }
        else
            {
            echo ENV_KEYWORDS;
            }
        ?>">
        
        
        <?php
        if ($strPageSlider == TRUE)
            {
            ?>


        <?php }; ?>
        <meta property="fb:app_id" content="126845677382791"/>
        <meta property="og:title" content="<?php
        if ($strPageTitle != '')
            {
            echo $strPageTitle;
            }
        else
            {
            echo ENV_TITLE;
            }
        ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo curPageURL(); ?>"/>
        <meta property="og:description" content="<?php
        if ($strPageDescription != '')
            {
            echo $strPageDescription;
            }
        else
            {
            echo ENV_DESCRIPTION;
            }
        ?>" />
        <meta property="og:image" content="<?php
        if ($strPageImg != '')
            {
            echo $strPageImg;
            }
        else
            {
            echo ENV_ROOTURL . 'assets/img/logo.png';
            }
        ?>"/>
        <meta property="article:publisher" content="https://www.facebook.com/eonmedia/"/>

        <!-- SEO Twitter  -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="<?php
        if ($strPageDescription != '')
            {
            echo $strPageDescription;
            }
        else
            {
            echo ENV_DESCRIPTION;
            }
        ?>">
        <meta name="twitter:site" content="@car_listing">
        <meta name="twitter:creator" content="@car_listing">
        <meta name="twitter:title" content="<?php
        if ($strPageTitle != '')
            {
            echo $strPageTitle;
            }
        else
            {
            echo ENV_TITLE;
            }
        ?>">
        <meta name="twitter:image" content="<?php
        if ($strPageImg != '')
            {
            echo $strPageImg;
            }
        else
            {
            echo ENV_ROOTURL . 'assets/img/logo.png';
            }
        ?>" />

        <meta name="msvalidate.01" content=""/>
        <meta name="google-site-verification" content="" />    
        <meta name="MobileOptimized" content="320">     
        <link rel="author" href="mou">
        <!--Srart Style -->
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/fonts.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/ion.rangeSlider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/ion.rangeSlider.skinFlat.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/js/plugin/magnific/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/js/plugin/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/js/plugin/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/js/plugin/nice_select/nice-select.css">
        <!----Revolution slider---->
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/js/plugin/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/style.css">
        <!-- Favicon Link -->
        <link rel="shortcut icon" type="image/png" href="<?php echo ENV_ROOTURL; ?>images/favicon.png">
        
    </head>
