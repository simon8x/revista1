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
      <div id="main" class="header-big header-style1">
      <header class="header-wrapper clearfix">
         <div class="header-top">
            <div class="container">
               <div class="mag-content">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="social-list-head top-menu pull-left">
                           <li class="social-facebook">
                              <a href="https://www.facebook.com/revistaautotest" target="_blank">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li class="social-twitter">
                              <a href="https://twitter.com/MotorpressAutos" target="_blank">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li class="social-youtube">
                              <a href="https://www.youtube.com/channel/UCIW8yQHD15w8lUXz1APcepw" target="_blank">
                              <i class="fa fa-youtube"></i>
                              </a>
                           </li>
                           <li class="social-instagram">
                              <a href="https://www.instagram.com/motorpressautos/" target="_blank">
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
         </div>
         <!-- .header-top -->
         <div class="header-mid">
            <div class="container">
               <div class="mag-content">
                  <div class="row">
                     <div class="col-md-4">
                        <h2 class="head-title">Desde 1991 probando autos</h2>
                     </div>
                     <div class="col-xs-3 col-md-4 text-center">
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
                     <div class="col-xs-9 col-md-4">
                        <div id="que-content">
                           <div class="input-group stylish-input-group">
                              <span class="input-group-addon">
								  <button type="submit">
									<span class="glyphicon glyphicon-search"></span>
								  </button>  
                              </span>
                              <input id="s" name="s" type="text" class="form-control" autocomplete="off" data-provide="typeahead" placeholder="&iquest;Qu&eacute; auto me compro?" >
							  
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .header-mid -->
         <div class="header text-center" id="header">
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
                        <div class="navbar mega-menu navbar-collapse collapse">
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
                                 <a href="<?php echo get_page_link( 3577 ); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MARCAS</a>
                                 <ul class="dropdown-menu fullwidth">
                                    <li>
                                       <!-- 5 block news in Mega Menu -->
                                       <div class="mega-menu-5block">
                                          <?php
                                             $args = array( 'hide_empty' => 1 );
                                             $terms = get_terms( 'marca', $args );
                                             if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                             	
                                             	foreach ( $terms as $term ) { ?>
													  <div class="mega-menu-news">
														 <div class="mega-menu-detail">
															<h4 class="entry-title">
															   <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
															</h4>
														 </div>
													  </div>
											<?php	} } ?>
                                       </div>
                                       <!-- .mega-menu-5block -->
                                    </li>
                                 </ul>
                                 <!-- .dropdown-menu .fullwidth -->
                              </li>

                              <!-- .dropdown .mega-full .menu-color3 -->
                              <li class="menu-color3">
                                 <a href="/consejos/" role="button" aria-expanded="false">CONSEJOS</a>
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
         </div>
         <!-- .header -->
      </header>
      <!-- .header-wrapper -->