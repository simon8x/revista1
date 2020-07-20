<!doctype html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  
  <title><?php if ( is_home() || is_front_page() ) { bloginfo('name'); echo(' - '); bloginfo('description'); } else { wp_title('',true); } ?></title>

  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="">
  <meta name="author" content="terciar">
  
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" type="image/x-icon" />

  <?php if(is_search()) { ?>
      <meta name="robots" content="noindex, nofollow" /> 
  <?php }?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  
  <?php wp_head(); ?>
  
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="https://use.fontawesome.com/7ab99030bf.js"></script>

</head>

<body <?php body_class(); ?>>
    
<div id="main" class="header-big">
  
    <header class="header-wrapper clearfix">
      <div class="header-top">
        <div class="container">
          <div class="mag-content">
            <div class="row">
              <div class="col-md-12">

                  <ul class="social-list-head top-menu pull-left">
                      <li class="social-facebook" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook">
                          <a href="#!">
                              <i class="fa fa-facebook"></i>
                          </a>
                      </li>
                      <li class="social-twitter" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
                          <a href="#!">
                              <i class="fa fa-twitter"></i>
                          </a>
                      </li>

                      <li class="social-youtube" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="YouTube">
                          <a href="#!">
                              <i class="fa fa-youtube"></i>
                          </a>
                      </li>

                      <li class="social-instagram" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram">
                          <a href="#!">
                              <i class="fa fa-instagram"></i>
                          </a>
                      </li>
                  </ul>

                  <ul class="pull-right ul-login">
                      <?php
                          if ( is_user_logged_in() ) {
                              $items .= '<li><a href="' . wp_logout_url() . '"><i class="fa fa-sign-out" aria-hidden="true"></i> ' . __( 'Log Out' ) . '</a></li>';
                          } else {
                              $items .= '<li><a href="' . wp_login_url() . '"><i class="fa fa-sign-in" aria-hidden="true"></i> ' . __( 'INICIAR SESI&Oacute;N' ) . '</a></li>';
                              $items .= '<li><a href="' . wp_registration_url() . '"><i class="fa fa-user" aria-hidden="true"></i> ' . __( 'REGISTRO' ) . '</a></li>';
                          }

                          echo $items;
                      ?>
                  </ul>

              </div>
            </div>
          </div>
        </div>
      </div><!-- .header-top -->
     
      <div class="header-mid">
        <div class="container">
          <div class="mag-content">
              
            <div class="row">
              <div class="col-md-4">
                  <h2 class="head-title">Desde 1991 probando autos</h2>
              </div>
                
              <div class="col-md-4 text-center">
                   <?php
                      $custom_logo_id = get_theme_mod( 'custom_logo' );

                      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                      if ( has_custom_logo() ) {
                           echo '<a class="clogo" rel="home" href="'.get_home_url().'"><img src="'. esc_url( $logo[0] ) .'" alt="Auto Test" width="132" height="88" /></a>';
                      } else {
                           echo '<a class="clogo" rel="home" href="'.get_home_url().'"><img src="'. get_template_directory_uri(). '/images/logo.jpg' .'" alt="Auto Test" width="132" height="88" /></a>';
                      }
                   ?>
              </div>
                
               <div class="col-md-4">                   
                    <div id="que-content"> 
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>  
                            </span>
                            <input id="s" name="s" type="text" class="form-control" autocomplete="off" placeholder="&iquest;Qu&eacute; auto me compro?" >
                        </div>
                    </div>                  
              </div>
            </div>
              
          </div>
        </div>
      </div><!-- .header-mid -->
     
      <div class="header text-center">
        <div class="container">
          <div class="mag-content">
            <div class="row">
              <div class="col-md-12">
                  
                <!-- Mobile Menu Button -->
                <a class="navbar-toggle collapsed" id="nav-button" href="#mobile-nav">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a><!-- .navbar-toggle -->
                
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                      <li class="menu-color3">
                        <a href="<?php echo get_post_type_archive_link( 'pruebas' ); ?>" role="button" aria-expanded="false">PRUEBAS</a>
                      </li>
                      
                      <li class="menu-color3">
                        <a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>" role="button" aria-expanded="false">NOTICIAS</a>
                      </li>
                      
                      <li class="menu-color3">
                        <a href="<?php echo get_post_type_archive_link( 'lanzamientos' ); ?>" role="button" aria-expanded="false">LANZAMIENTOS</a>
                      </li>
                      
                     <!-- Fullwith Mega Menu -->
                     <li class="dropdown mega-full menu-color3">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MARCAS</a>
                       <ul class="dropdown-menu fullwidth">
                         <li>
                           
                             <h1>Marcas</h1>
                             
                         </li>
                       </ul>
                     </li>
                      
                     <li class="menu-color3">
                        <a href="<?php echo get_post_type_archive_link( 'consejos' ); ?>" role="button" aria-expanded="false">CONSEJOS</a>
                     </li>

                      <li class="menu-color3">
                          <a href="<?php echo get_permalink(2465); ?>" role="button" aria-expanded="false">AUTO TEST TV</a>
                      </li>
                      
                      <li class="menu-color3">
                        <a href="<?php echo get_permalink(2172); ?>" role="button" aria-expanded="false">BIBLIOTECA DIGITAL</a>
                      </li>

                    </ul>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div><!-- .header -->
      
    </header><!-- .header-wrapper -->