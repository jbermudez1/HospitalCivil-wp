<?php get_header(); ?>
<?php get_sidebar('page') ?>
<body>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container page">
			<br>
			<br>
			<br>
			<?php echo get_the_post_thumbnail(); ?>
		
		<?php the_content() ?>
		<?php endwhile; else : ?>
		<?php endif; ?>
	</div>


</body>
<?php get_footer() ?>
