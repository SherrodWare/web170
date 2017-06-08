<aside id="sidebar">
<?php 
echo '<h2>';
if (is_page()) {
	echo get_the_title($post->post_parent);
} else {
		echo 'Blog';
	}
	echo '</h2>';
	echo '<ul>';
	if (is_page() || is_404()) { //when on a page
		if ($post->post_parent) { // the page has a parent
			wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); //list the children
		} else { //when on a parent page
			wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));
		}
	} else { //when not on a page
		 wp_list_categories(array('title_li' => '',)); //list blog categories

		}
		echo '</ul>';
?>
 <?php if (!(is_page())) : // if we are not in "pages"...
    ?>
    <h2 class="sub-navigation-titile">Blog</h2>
    <ul class="sub-navigation-items"><?php
        wp_list_categories(array('title_li' => '',)); //list the categories with no title ?></ul>
    <?php endif; ?>
    <!-- End Sub-Navigation -->
    
    <!-- Begin Quote -->
    <?php if (get_post_meta($post->ID, 'Quote', true)) : //check to see if theis is a quote ?>
    
    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true) ; // write out the quote ?></blockquote>
    <?php endif; ?>
    <!-- End Quote -->
    <?php dynamic_sidebar(1); // call our widgets ?>
    <!-- End Dynamic Sidebar -->
        
</aside>