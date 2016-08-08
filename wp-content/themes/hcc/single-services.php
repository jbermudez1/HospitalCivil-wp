<?php get_header(); ?>

<div class="wrap">
	<!-- -->
	<!-- <section class="menus">
          <div class="submenu mconsultas reset-submenu" >
            <div class="container">
              <div class="list-wrap">
                <div class="box">
                  <ul>
                    <li>
                      <span>icon</span>
                      <span>
                        <a href=" <?php echo esc_url( get_permalink(170) ); ?>">Fluroscopía</a></span>
                    </li>
                    <li>
                      <span>icon</span>
                      <span>Fluroscopía</span>
                    </li>
                    <li>
                      <span>icon</span>
                      <span>Fluroscopía</span>
                    </li>
                    <li>
                      <span>icon</span>
                      <span>Fluroscopía</span>
                    </li>
                    <li>
                      <span>icon</span>
                      <span>Fluroscopía</span>
                    </li>
                    <li>
                      <span>icon</span>
                      <span>Fluroscopía</span>
                    </li>
                  </ul>
                </div>
                <div class="box">2</div>
                <div class="box">3</div>
                <div class="box">4</div>
              </div>
            </div>
          </div>
      </section> -->
	<!-- -->

 <section class="container " style="min-height: 100vh">

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