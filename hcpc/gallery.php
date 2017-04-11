<?php include 'includes/top.php';?>
<link rel="stylesheet" href="css/nav.css"/>
<!-- START LEFT Column -->
<article>
    <h2>Gallery page</h2>
    <div class="flexslider">
        <ul class="slides">
            <li><img alt="" src="images/gallery1.jpg" /></li>
            <li><img alt="" src="images/gallery2.jpg" /></li>
            <li><img alt="" src="images/gallery3.jpg" /></li>
        </ul>
    </div>
</article>
 <!-- START RIGHT COLUMN -->
        
<!-- END LEFT Column -->

<!-- START  Aside RIGHT Column -->
<aside>
            <h2>Pictures of employees and patients. </h2>
            <h3>We try to change the pictures every 3 months.</h3>
            <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore. While lorem ipsum's still resembles classical Latin, it actually has no meaning whatsoever. As Cicero's text doesn't contain the letters K, W, or Z, alien to latin, these, and others are often inserted randomly to mimic the typographic appearence of European languages, as are digraphs not to be found in the original.                                                                                                                     </p>
                
</aside>
<!-- END Aside RIGHT Column -->
<!-- Start FlexSlider Code, place just before closing body tag --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 

<!-- Initialize the slider on the div we named "flexslider" --> 
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide", // set animation to slide
        smoothHeight: true // auto-adjust to fit the height of images
      });
    });
</script> 

<!-- Optional FlexSlider Additions --> 
<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- End FlexSlider Code -->
<?php include 'includes/bottom2.php';?>