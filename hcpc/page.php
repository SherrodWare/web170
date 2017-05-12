<? 
$routePrefix = '/test/page/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HC PROFESSIONAL CARE</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<?php wp_head() ?>
<body  <?php body_class(); ?>>
<?php include "header.php" ?>

	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
			<?php the_content() ?>
		<?php endwhile; endif; ?>
		<small>page.php</small>
	</div>
    
<?php include "footer.php" ?>
<?php wp_footer() ?>
</body>
</html>
	

	

	




