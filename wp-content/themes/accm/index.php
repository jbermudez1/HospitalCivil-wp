	<?php get_header(); ?>
	<body>
		<header>
			<div class="container">
				<div class="burger visible-xs">
					<i class="fa fa-bars"></i>
				</div>
				<div class="logo">
					<img class="img-responsive" src="<?php echo get_template_directory_uri().'/img/logo.png' ?>">
				</div>
				<nav class="hidden-xs">
					<?php wp_nav_menu() ?>
				</nav>
				<div class="redes hidden-xs">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</header>
		<nav class="mobile">
			<?php wp_nav_menu() ?>
		</nav>
		<section class="banner" style="background-image: url('<?php echo get_template_directory_uri().'/img/banner.jpg' ?>')">
			<div class="container">
				<div class="text">
					<h1>Title of te all web</h1>
					<p>Subtitle</p>
				</div>
			</div>
		</section>
		<section class="main ">
			<div class="container">

				<?php 
					$post = get_post( 4 ); 
					$content = $post->post_content;
					$title = $post->post_title;
				?>

				<h2><?php the_title(); ?></h2>

				<div class="wrapBox">

					<?php 
						echo $content
					?>
				 <!-- <div class="box">
						<div id="iso-9001">
							<img src="img/ISO9001-01.svg">
						</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div>
					<div class="box">
						<div>box</div>
					</div> -->
				</div>
				<!-- widget -->
				
			</div>
		</section>
		<section class="bottom container">
			<h2>Conoce Nuestros Procesos de Evaluación de la Conformidad</h1>
			<div class="threboxContainer">
				<?php dynamic_sidebar( 'sidebar-main' ) ?>
				<!-- <div class="box">
					<div class="box__title">Titulo</div>
					<div class="box__main">Main</div>
				</div>
				<div class="box">
					<div class="box__title">Titulo</div>
					<div class="box__main">Main</div>
				</div>
				<div class="box">
					<div class="box__title">Titulo</div>
					<div class="box__main">Main</div>
				</div> -->
			</div>
		</section>
		<section class="all-post">
			 <!-- Start the Loop. -->
			<?php query_posts( 'cat=1' ) ?>
 			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 		<!-- Display the Title as a link to the Post's permalink. -->
		 		<div class="post"></div>
			 		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


				 	<!-- Display the Post's content in a div box. -->
				 	<div class="entry">
				 		<?php the_excerpt(); ?>
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

		</section>
<?php get_footer() ?>