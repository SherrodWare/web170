<?php get_header(); ?>



	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
			<?php the_content() ?>
		<?php endwhile; endif; ?>
		<small>page.php</small>
	</div>

<?php if (get_post_meta($post->ID, 'banner', true)) { // begin check for spotlight ?>

    <!-- Begin Spotlight -->
    <div id="spotlight">
    <img id="spotlight-main-image" src="<?php echo get_post_meta($post->ID, 'banner', true); ?>" alt="Main Spotlight Image" width="600" height="340" />
    <blockquote id="spotlight-main-quote">
    <?php quotescollection_quote(); ?>
    </blockquote>
    </div>
    <!-- End Spotlight -->

<?php } // end check for spotlight ?>

<!-- Begin Content -->
<div id="content">
    
    <!-- Begin Text -->
    <div id="text">  
         
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="page-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
    </div>
    <!-- End Text -->
    
    <?php get_sidebar(); ?>
    
</div>
<!-- End Content -->

<?php get_footer(); ?>
<small>page.php</small>
    



	

	

	




