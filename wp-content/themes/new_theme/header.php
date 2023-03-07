<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width,intinial-scale=1.0">
	<title>Advanced WP Theme</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head()?>
</head>
<body <?php body_class() ?>>
	<header>
		<div class="container">
			<h1>
                <a href="<?php echo home_url('/')?>">
                    <?php bloginfo('name')?>
                </a>
                <small><?php bloginfo('description')?></small>
            </h1>
			<div class="h_right">
				<form method="GET" action="<?php esc_url(home_url('/'))?>">
					<input type="text" placeholder="Search..." name="s">
				</form>
			</div>
		</div>
	</header>
    <nav class="nav main-nav">
		<div class="container">
			<?php 
                $args = array(
                    'theme_location' => 'primary'
                );

            ?>

            <?php wp_nav_menu($args);?>
		</div>
	</nav>