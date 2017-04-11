<!doctype html>
<html>
 <head>
    <title>HC PROFESSIONAL CARE</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
     <link href='https://fonts.googleapis.com/css?family=Cherry+Cream+Soda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/diner.css" />
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/blueberry.css"/>
</head>
<body>
    <header>  <img src="images/websitelogomini.jpg" alt="Bold">
    <h1>HC PROFESSIONAL CARE</h1>
      <nav id="cssmenu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
<!--                    <li><a href="services.html">Services</a></li>-->
                    <li><a href="caregivers.html">Caregivers</a></li>
                   <li><a href="application.php">Application</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class="active"><a href="contactus.php">Contact Us</a></li>
                </ul> 
            </nav>
    </header>
    <!--START lEFT COLUMN-->
    <section>
        <h2>Contact us</h2>
        <?php
        include 'includes/simple.php'; #demonstrates a simple contact form
        //include 'includes/multiple.php';#demonstrates multiple form elements
        ?>
    </section>
    <!--END LEFT COLUMN-->
    
    <!--START RIGHT COLUMN-->
     <aside>
        <h3>Thanks for your interest in contacting us.</h3>
         <p>Please fill out the form so we can keep in touch with you.</p>

    </aside>   
   <!--END RIGHT COLUMN-->      
<footer>
   <small>
   &copy; 2017, All Rights Reserved ~ Authored by Sherrod Ware ~ <a href="disclaimer.html">Disclaimer</a>~
   <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~  
   <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
   </small>
</footer>
</body>
</html>