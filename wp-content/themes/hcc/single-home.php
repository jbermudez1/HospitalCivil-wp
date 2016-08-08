<?php get_header(); ?>
<div class="wrap">
 <section class="banner-single" style="background-image: url('<? echo get_template_directory_uri()."/img/banner-single.jpg" ?>')">
	<div class="container">
		<!-- <small><?php echo the_category(); ?></small> -->
		<h1>Noticias</h1>
	</div>
</section>
 <section class="container news" style="min-height: 100vh">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="news-title">
		<h1 class="title"><?php echo get_the_title(); ?></h1>
		 <small> <?php the_date() ?> </small>
		 <p>
		 	<i class="fa fa-facebook-square" aria-hidden="true"></i>
		 	<i class="fa fa-twitter" aria-hidden="true"></i>
		 </p>
		 </div>
		<!-- <div class="container page">
			<br>
			<br>
			<br>-->
		<div class="news-container">
			<div class="news-container-text">
					<?php echo get_the_post_thumbnail(); ?>
					<?php the_content() ?>
			</div>
				<!-- <div class="col-xs-12">
					
				</div> -->

			</div>

		</div>
		<?php endwhile; else : ?>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>