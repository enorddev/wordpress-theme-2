<?php

/*
    Template Name: Company Layout

*/


?>




<?php get_header() ?>

	

	<div class="container content">
		<div class="main block">
            
                <?php if(is_page()) : ?> 
                    <article class="page">
                        <h2><?php the_title()?></h2>
                        <p class="phone">Call us: 1-855-555-5555</p>
                        <?php the_content() ?>
                    </article>
                <?php endif?>

		</div>

        <div class="side">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar') ?>
			<?php endif ?>	
		</div>
	</div>
<?php get_footer()?>

				
			
			
			

	