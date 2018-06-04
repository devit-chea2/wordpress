<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?> >
	<nav class="navbar">
		<?php $agrs = array( 'theme_location' => 'primary' ); ?>
	 	<?php wp_nav_menu($args); ?>
	</nav>
<div class="container">
	<div class="blog-header">
		<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
		<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
	</div>


