<?php get_header(); ?>

<div class="wrap">
    <section class="menus">
    <?php include (TEMPLATEPATH."/mespecialidades.php") ?>
    <?php include (TEMPLATEPATH."/mconsultas.php") ?>

  </section>
 <section class="container single-services" style="min-height: 100vh">
  <div class="single-icon">
    <?php 
      if (class_exists('MultiPostThumbnails')) : 
      MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'single-icon');
      endif;
    ?>
  </div>
  <div class="single-main">
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
          <div>
            
          </div>
    				<!-- <div class="col-xs-12">
    					
    				</div> -->

    			</div>

    		</div>
    		<?php endwhile; else : ?>
    		<?php endif; ?>
    	</div>
  </div>
</section>
<?php get_footer(); ?>