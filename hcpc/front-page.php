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
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
    <article id="article-<?php the_ID(); ?>" class="article">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>
    <?php endwhile; endif; ?>
<!--    <small>front-page.php</small>-->
    <?php rewind_posts();//stop loop one ?>
    <?php query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'posts_status' => 'publish','post_parent' => 185,'order' => 'ASC')); ?>
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
    
    
    <?php endwhile; endif;//end second loop ?>
    
    </div>
    <small>front-page.php</small>

 <!-- End Text -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>