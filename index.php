<?php get_header(); ?>
	<div id="container">
		<div class="container">
			<div class="content">
		 		<?php
		  			while (have_posts()) {
		    			the_post();
		   				 the_content();
		  			}
		  		?>
			</div>
<?php get_footer(); ?>