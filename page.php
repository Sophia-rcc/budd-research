<?php get_header(); ?>

<main>

	<?php 
			if (have_posts()) {
  				while (have_posts()) {
					the_post(); ?>
	<h1 class="sub-h1"> <?php the_title(); ?></h1>
					<?php
					the_content(); 
				}
			} ?>
</main>

<?php get_footer(); ?>
