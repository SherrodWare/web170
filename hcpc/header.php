<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HC PROFRESSIONAL CARE</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueberry.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.blueberry.js"></script>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <img id= "logo" src="<?php bloginfo('template_directory'); ?>/images/websitelogomini.jpg">
        <h1>Welcome TO HCPC</h1>
        <h2>"EXPERT CARE WHEN YOU NEED IT MOST"</h2>
        <!-- This is my unordered list for navigation -->   
     <?php wp_nav_menu(array( 'theme_loction' => 'main-menu',  'container' => 'nav', 'container_id' => 'cssmenu','container_class', 'menu-main-container' ));?>
<!--
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                <li><a href="caregivers.html">Caregivers</a></li>
              <li><a href="application.php">Application</a></li>
                <li class="active"><a href="gallery.php">Gallery</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul> 
-->
        
    </header>