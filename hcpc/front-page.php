<?php get_header(); ?>


            
        <!-- blueberry -->
<div id ="banner">
    <div class="blueberry">
        <ul class="slides">
<!--         <a href="javascript:void(0);" onclick="myFunction()"></a> == $0-->
         <li><img src="<?php bloginfo('template_directory'); ?>/images/hcpc1.jpg" /></li>
         <li><img src="<?php bloginfo('template_directory'); ?>/images/hcpc2.jpg" /></li>
         <li><img src="<?php bloginfo('template_directory'); ?>/images/hcpc3.jpg" /></li>

        </ul>
    <script>
        $(window).load(function() {
            $('.blueberry').blueberry();
        });
    </script>

    </div>
</div>
<!-- Begin Text -->
<div id="content">
    <h2>Home</h2>
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); //start loop one ?>
    <?php the_content(''); //get the home page's content ?>
     <?php endwhile; endif;//end loop one ?>
    
    <article id="article-<?php the_ID(); ?>" class="article">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>
    <h2>Latest Postings</h2>
    <?php rewind_posts();  ?>
<?php query_posts('showposts=3'); // give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop two ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; // end loop two ?>
    <h2>Contact Me</h2>
    <p><strong>Phone; </strong>206.000.0000<br><strong>Email: </strong> <a href="mailto:kungskii88@gmail.com"></a></p>
    
    
    </div>
    <small>front-page.php</small>

 <!-- End Text -->
<?php get_footer(); ?>