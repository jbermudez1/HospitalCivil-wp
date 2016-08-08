<?php get_header(); ?>
<div class="wrap">
  <!-- menus -->
  <?php include (TEMPLATEPATH."/menus.php") ?>
  <!--  -->
    <section class="banner" style="background-image: url('<? echo get_template_directory_uri()."/img/banner2.jpg" ?>')">
      <div class="color" >
        <div>
          <h3><span>Ven</span> y programa tu consulta</h3>
          <hr>
          <p>78 Años brindando atención oportuna a tu alcance en mas de 23 especialidades médicas y formamdo médicos profesionales.</p>
          <img src='<? echo get_template_directory_uri()."/img/icondr.png" ?>'>
        </div>
      </div>
      <div class="photo hidden-xs" style="background-image: url('<? echo get_template_directory_uri()."/img/banner3.jpg" ?>')"></div>
    </section>
    <section class="main container">
      <article class="box">
        <div class="box__main">
          <div class="flex-container">
            <div class="c1">Medicina General</div>
            <div class="c2">Medicina Interna</div>
            <div class="c3">Traumatología</div>
            <div class="c4">Rehabilitación Física</div>
            <div class="c5">Nutrición</div>
            <div class="c6">Pediatría</div>
            <div class="c7">Urología</div>
            <div class="c8">Odontología</div>
            <div class="c9">Neurología</div>
            <div class="c10">Ginecología</div>
          </div>
        </div>
      </article>
      <!--  -->
      <main class="main">
          <section class="details">
                <div class="details-titles">
                  <h3><span>Médicos y tecnología </span><br>
                de alta especiaización, ¡visitanos!</h3>
                </div>
                <hr class="green">
                <br>
                <br>
                <hr>
<!--                 <ul>
                  <li>Banco de Sangre</li>
                  <li>Cirugía General</li>
                  <li>Consultas Médicas</li>
                  <li>Farmacia</li>
                  <li>Laboratorio Clínico</li>
                  <li>Maternidad</li>
                  <li>Urgencias</li>

                </ul> -->
             
                <br>
                <div class="row text-center">
                  <br>
                  <br>
                  <div class="col-xs-4">
                    <img src='<? echo get_template_directory_uri()."/img/icon1.png" ?>'>
                    <p class="subtitle">Servicios Médicos y Hospitalarios</p>
                  </div>
                  <div class="col-xs-4">
                    <img src='<? echo get_template_directory_uri()."/img/icon2.png" ?>'>
                    <p  class="subtitle">Guia del paciente</p>
                  </div>
                  <div class="col-xs-4">
                    <img src='<? echo get_template_directory_uri()."/img/icon3.png" ?>'>
                    <p  class="subtitle">Unima Imagenología</p>
                  </div>

                </div>
                <br>
                <br>
          </section>
              <!-- <section class="welcome-post"> 
                <?php 
                  $post = get_post( 7 ); 
                  $content = $post->post_content;
                  $title = $post->post_title;
                ?>
                <h2 class="title-post"><?php the_title(); ?></h2>
                <?php echo $content ?>

              </section> -->
              <section class="home-post">
                <div class="title-section">
                  <h3>Investigaciones<span> recientes<span></h3>
                </div>
                <div class="home-post__container">
                  <!-- <div class="home-post__container__wrap">
                    <div class="info">info</div>
                  </div>
                  <div class="home-post__container__wrap">
                    <div class="info">info</div>
                  </div>
                  <div class="home-post__container__wrap">
                    <div class="info">info</div>
                  </div>
                  <div class="home-post__container__wrap">
                    <div class="info">info</div>
                  </div> -->
               
               <!-- Start the Loop. -->
              <?php query_posts( 'cat=3' ) ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="home-post__container__wrap">
                  <div class="info">
                    <span class="title-post"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span><br>
<!--                     <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
 -->                <div class="entry">
                      <hr>
                      <?php the_excerpt(); ?>
                     <!--  <?php the_content(); ?> -->
                    </div>

                  </div>
                   <div class="tumb" >
                       <?php echo get_the_post_thumbnail(); ?>
                   </div>
                  </div>
                  <?php endwhile; else : ?>

                </div> <!-- closes the first div box -->

                 <?php endif; ?>
              </div>
            </section>
            <section class="home-post">
                <div class="title-section">
                  <h3>Conoce algunos de nuestros<span> Especialistas<span></h3>
                </div>
                <div class="row text-center">
                  <div class="col-sm-4">
                    <img class="img-responsive" src='<? echo get_template_directory_uri()."/img/dr1.jpg" ?>'>
                    <p class="lead fontb">Dr. Mariela inzunza</p>
                    <address>
                      <strong>Médico cirujano</strong><br>
                      Lunes a vierdes 8:00 a 12:00Am.<br>
                      <abbr title="Phone">Ext:</abbr> (123) 456-7890
                    </address>
                  </div>
                  <div class="col-sm-4">
                    <img class="img-responsive" src='<? echo get_template_directory_uri()."/img/dr2.jpg" ?>'>
                    <p class="lead fontb">Dr. Mariela inzunza</p>
                    <address>
                      <strong>Médico cirujano</strong><br>
                      Lunes a vierdes 8:00 a 12:00Am.<br>
                      <abbr title="Phone">Ext:</abbr> (123) 456-7890
                    </address>
                  </div>
                  <div class="col-sm-4">
                    <img class="img-responsive" src='<? echo get_template_directory_uri()."/img/dr3.jpg" ?>'>
                    <p class="lead fontb">Dr. Mariela inzunza</p>
                    <address>
                      <strong>Médico cirujano</strong><br>
                      Lunes a vierdes 8:00 a 12:00Am.<br>
                      <abbr title="Phone">Ext:</abbr> (123) 456-7890
                    </address>
                  </div>
                </div>
            </section>
      </main>

      <!--  -->
    </section>
    <section class="contact">
      <div class="container text-center">
          <h3 class="istitle">Servicios Médicos<span> y Hospitalarios<span></h3>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"></span>
                <input type="text" class="form-control" placeholder="Nombre" aria-describedby="sizing-addon1">
              </div>
              <br>
              <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"></span>
                <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
              </div>
              <br>
              <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"></span>
                <input type="text" class="form-control" placeholder="Teléfono" aria-describedby="sizing-addon1">
              </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                <textarea class="form-control" rows="8"></textarea>

              </div>
            </div>
            <button type="button" class="btn btn-success">ENVIAR</button>


          </div>
      </div>
    </section>
    <section class="map" style="background-image: url('<? echo get_template_directory_uri()."/img/mapa.jpg" ?>')">
      <div class="goToAction hidden-xs"><i class="fa fa-envelope"></i></div>
    </section>
    <?php get_footer() ?>


