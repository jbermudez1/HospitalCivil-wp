<!DOCTYPE HTML>
<html>
  <head>
    <title>Hospital Civil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url)?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <body>
      <header>
        <div class="top-line"></div>
        <div class="shadow">
          <div class="container ">
            <a href="post.php?post=2">
              <div class="logo"><img src="<?php echo get_template_directory_uri().'/img/logo.jpg' ?>" class="img-responsive"></div>

            </a>
            <div class="rigth hidden-xs">
              <span class="fblue">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <strong></strong> (667 00 00 00)
              </span>
              </div>
           
            
          </div>

        </div>
        <nav>
              <div class="container">
                <?php wp_nav_menu() ?>
              </div>
        </nav>
      </header>
      

    
