<?php get_header(); ?>



<main>
	
<div id=sidebar>
<?php dynamic_sidebar('main-page-widget'); ?>
</div>

<div id="blog-container">
<div id="blogroll">

<?php if(have_posts()):
		while(have_posts()):
			the_post();?>

<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>

<?php endwhile;
		else: ?>
	<p><?php _e('Sorry, no posts matched your criteria'); ?></p>

<?php endif; ?>
		
	</div>
	</div>
	
</main>

<?php get_footer(); ?>

