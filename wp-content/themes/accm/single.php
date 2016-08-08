<?php get_header(); ?>
<body>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 		<!-- Display the Title as a link to the Post's permalink. -->
		 		<div class="post"></div>
			 		<h2><?php the_title(); ?></a></h2>

				 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


				 	<!-- Display the Post's content in a div box. -->
				 	<div class="entry">
				 		<?php the_content(); ?>
				 	</div>

				 	<!-- Display a comma separated list of the Post's Categories. -->
				 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
				 	
				 	<!-- Stop The Loop (but note the "else:" - see next line). -->
				 	<?php endwhile; else : ?>


				 	<!-- The very first "if" tested to see if there were any Posts to -->
				 	<!-- display.  This "else" part tells what do if there weren't any. -->

				 	<!-- REALLY stop The Loop. -->
				</div> <!-- closes the first div box -->
	<?php endif; ?>
<?php get_footer() ?>
