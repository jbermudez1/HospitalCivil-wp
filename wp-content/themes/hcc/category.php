<?php get_header(); ?>
<div class="wrap">
<section class="banner-single" style="background-image: url('<? echo get_template_directory_uri()."/img/banner-single.jpg" ?>')">
	<div class="container">
	<h1><?php single_cat_title(); ?></h1>
	</div>
</section>
 <section class="container" style="min-height: 100vh">
 	<div class="wrap3box">
<!--  		<div class="box">
 			<div>DATOS</div>
 		</div>
 		<div class="box">
 			<div>DATOS</div>
 		</div>
 		<div class="box">
 			<div>DATOS</div>
 		</div> -->

 <!-- Start the Loop. -->
 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 		<div class="box">
 			<div>
 				<h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
 				 <small><?php the_time('F, Y'); ?></small>
 				  	<p class="entry">
				 		<?php the_content(); ?>
				 	</p>

 			</div>
 		</div>



 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->



 	<!-- Display the Post's content in a div box. -->




 	<!-- Display a comma separated list of the Post's Categories. -->



 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
 	</div>
 </section>
 <?php get_footer(); ?>