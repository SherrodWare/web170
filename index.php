<?php get_header(); ?>
<!--WP HEAD FUNCTION-->-->
     <?php wp_head(); ?>
    <!-- beginning of body-->
    <h1>Welcome TO HCPC</h1>
     <body <?php body_class(); ?>>
       
            
        <!-- blueberry -->
<div id ="banner">
    <div class="blueberry">
      <ul class="slides">
         <!-- <a href="javascript:void(0);" onclick="myFunction()"></a> == $0-->
        <li><img src="<?php bloginfo('template_directory'); ?>/images/hcpc1.jpg" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/hcpc2.jpg" /></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/hcpc3.jpg" /></li>

      </ul>
    </div>
    </div>
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
        <small>Posted on <?php the_time('F j, Y');//get the time ?>by <?php the_author();//get the author's name ?> in <?php the_category(', ');//get the category ?></small>
        <?php the_post_thumbnail( 'thumbnail' ); ?>

        <?php the_excerpt(); // get the posting's excerpt ?>
        <?php endwhile; endif; // end the loop ?>
         </div>
        <li class ="post-navigation-previous"><?php previous_posts_link('&laquo;&nbsp;Newer' ) ?></li>
        <li class ="post-navigation-previoous"><?php previous_posts_link('Older&nbsp;&raquo;' ); ?></li>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.blueberry.js"></script>
<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
    
</script>
         
        </header>
         <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>


<small>index.php</small>
    <!-- END RIGHT COLUMN -->
        
<?php get_sidebar(); ?>  
<?php get_footer(); ?>
        
  
    <!-- This is my unordered list for navigation