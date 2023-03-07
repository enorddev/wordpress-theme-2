
<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy; <?php the_date('Y') ?></p>
			</div>
			<div class="f_right">
                <?php 
                    $args = array(
                        'theme_location' => 'primary'
                    );

                ?>

                <?php wp_nav_menu($args);?>
			</div>

		</div>
	</footer>
    <?php wp_footer() ?>
</body>
</html>
