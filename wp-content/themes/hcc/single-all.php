<?php get_header(); ?>
<div class="wrap">
<section class="banner-single" style="background-image: url('<? echo get_template_directory_uri()."/img/banner-single.jpg" ?>')">
	<div class="container">
		<small><?php echo the_category(); ?></small>
		<h1><?php echo get_the_title(); ?></h1>
	</div>
</section>
 <section class="container" style="min-height: 100vh">

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
</section>
<?php get_footer(); ?>