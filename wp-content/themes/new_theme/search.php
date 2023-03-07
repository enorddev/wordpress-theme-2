<?php get_header() ?>

	

	<div class="container content">
		<div class="main block">
        <h1 class="page-header">
		   Search Results   
		</h1>

			<?php if(have_posts()) : ?> 
				<?php while(have_posts()) : the_post()?>
			<?php get_template_part('content')?>
			<?php endwhile?>
			<?php else : 'Sorry, could not find any posts!'?>
           <?php endif?>
		</div>
	</div>

	
<?php get_footer()?>