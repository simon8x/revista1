<!doctype html>

<html>

   <head>

      <meta charset="UTF-8">

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

      <?php } ?>

      <?php wp_head(); ?>
	  
	  <script>
		document.addEventListener('DOMContentLoaded', function() {
		  jQuery('form#commentform input#author').attr("placeholder", "Nombre *");
		  jQuery('form#commentform input#email').attr("placeholder", "E-mail *");
		  jQuery('form#commentform textarea#comment').attr("placeholder", "Tu Opinión");
		  
		  jQuery('form#commentform input#submit').addClass('btn-default');
		  jQuery('form#commentform input#submit').addClass('btn');
		  
		  jQuery('<p style="display:inline-block" class="padevert">Importante: Los campos obligatorios están marcados con <span class="required">*</span></p>').prependTo('form#commentform p.form-submit');
		  jQuery('#comments span.says').html('&nbsp;|&nbsp;');
      jQuery('.comment-body .reply a').html('RESPONDER &gt;');
      jQuery("input.wp_autosearch_input").attr("placeholder", "¿Qué auto me compro?");
		});
	  </script>

      <!-- INICIO AGREGADO TAG MANAGER -->

      <!-- INICIO URBI ET ORBI --> 
      <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
      <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
      </script>
      <!-- FIN URBI ET ORBI --> 

      <!-- inicio anuncios fondo -->

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_superbanner', [[728, 90], [980, 90], [980, 200], [320, 50], 'fluid', [970, 90], [960, 90], [970, 66], [950, 90], [930, 180], [970, 250], [980, 120]], 'div-gpt-ad-1537880161841-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_superbanner', [[970, 90], [930, 180], [970, 250], [980, 120], [960, 90], [728, 90], [970, 66], [980, 90], [320, 50], [950, 90], [980, 200]], 'div-gpt-ad-1537880498486-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>      


      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_superbanner', [[980,200],[980, 90],[728, 90], [320, 50]], 'div-gpt-ad-1537881202035-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

<!--      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_superbanner', [[970, 250], [320, 50], [970, 90], [980, 90], [980, 200], [950, 90], [930, 180], [960, 90], [970, 66], [728, 90], [980, 120]], 'div-gpt-ad-1537881202035-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>-->





      <!-- fin anuncios fondo -->

      <!-- INICIO ANUNCIOS HOME -->

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_728x90_2', [[320, 50], [728, 90]], 'div-gpt-ad-1537878667145-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_728x90_3', [[728, 90], [320, 50]], 'div-gpt-ad-1537878865292-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_1', [[300, 250], [300, 100], [300, 600]], 'div-gpt-ad-1537879052360-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_2', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1537879171402-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_3', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1537879262253-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_4', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1537879364070-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_5', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1537879461018-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_6', [[300, 100], [300, 250], [300, 600]], 'div-gpt-ad-1539351904376-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x600_7', [[300, 250], [300, 600], [300, 100]], 'div-gpt-ad-1539352010381-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_home_300x250_cont_1', [300, 250], 'div-gpt-ad-1537879584597-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <!-- FIN ANUNCIOS HOME -->
      <!-- INICIO ANUNCIOS SECCION -->

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_728x90_2', [[728, 90], [320, 50]], 'div-gpt-ad-1537880665156-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_728x90_3', [[728, 90], [320, 50]], 'div-gpt-ad-1537880721493-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_1', [[300, 100], [300, 600], [300, 250]], 'div-gpt-ad-1537880785213-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_2', [[300, 100], [300, 250], [300, 600]], 'div-gpt-ad-1537880836941-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_3', [[300, 100], [300, 250], [300, 600]], 'div-gpt-ad-1537880897816-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_4', [[300, 250], [300, 100], [300, 600]], 'div-gpt-ad-1537880958403-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_5', [[300, 100], [300, 250], [300, 600]], 'div-gpt-ad-1537881019841-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_6', [[300, 100], [300, 600], [300, 250]], 'div-gpt-ad-1539352070197-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_category_300x600_7', [[300, 600], [300, 250], [300, 100]], 'div-gpt-ad-1539352295381-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <!-- FIN ANUNCIOS SECCION -->

      <!-- INICIO ANUNCIOS SINGLE P -->

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_728x90_2', [[728, 90], [320, 50]], 'div-gpt-ad-1537881300607-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_728x90_3', [[728, 90], [320, 50]], 'div-gpt-ad-1537881377457-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_1', [[300, 250], [300, 600], [300, 100]], 'div-gpt-ad-1537881425017-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_2', [[300, 250], [300, 600], [300, 100]], 'div-gpt-ad-1537881482557-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_3', [[300, 100], [300, 250], [300, 600]], 'div-gpt-ad-1537881543191-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_4', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1537881587255-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_5', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1537881675173-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_6', [[300, 600], [300, 100], [300, 250]], 'div-gpt-ad-1539352437772-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <script>
        googletag.cmd.push(function() {
          googletag.defineSlot('/317699715/autotest_inner_300x600_7', [[300, 100], [300, 250], [300, 600]], 'div-gpt-ad-1539352540813-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>

      <!-- FIN ANUNCIOS SINGLE P -->


      <!-- FIN AGREGADO TAG MANAGER -->

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

                              <a href="https://twitter.com/AutoTestArg" target="_blank">

                              <i class="fa fa-twitter"></i>

                              </a>

                           </li>

                           <li class="social-youtube">

                              <a href="https://www.youtube.com/channel/UCIW8yQHD15w8lUXz1APcepw" target="_blank">

                              <i class="fa fa-youtube"></i>

                              </a>

                           </li>

                           <li class="social-instagram">

                              <a href="https://www.instagram.com/AutoTestArg/" target="_blank">

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

                        <h2 class="head-title">Evaluando autos desde 1991</h2>

                     </div>

                     <div class="col-xs-3 col-md-4 text-center">

                        <?php

                           $custom_logo_id = get_theme_mod( 'custom_logo' );

                           $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                           echo '<a class="clogo" rel="home" href="'.get_home_url().'"><img src="'. get_template_directory_uri(). '/images/logo-at-new.svg' .'" alt="Auto Test" width="132" height="88" /></a>';

                          ?>

                     </div>

                     <div class="col-xs-9 col-md-4">

                        <div id="que-content">

                           <!--<div class="input-group stylish-input-group">

                              <span class="input-group-addon">

								  <button type="button">

									<span class="glyphicon glyphicon-search"></span>

								  </button>  

                              </span>

                              <input id="s" name="s" type="text" class="form-control" autocomplete="off" data-provide="typeahead" placeholder="&iquest;Qu&eacute; auto me compro?" >

                           </div>-->

						   <?php echo do_shortcode( '[wi_autosearch_suggest_form]' ); ?>

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

                              <li class="menu-color3 pruebas">

                                 <a href="<?php echo get_post_type_archive_link( 'pruebas' ); ?>" role="button" aria-expanded="false">PRUEBAS</a>

                              </li>

                              <li class="menu-color3 noticias">

                                 <a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>" role="button" aria-expanded="false">NOTICIAS</a>

                              </li>

                              <li class="menu-color3 lanzamientos">

                                 <a href="<?php echo get_post_type_archive_link( 'lanzamientos' ); ?>" role="button" aria-expanded="false">LANZAMIENTOS</a>

                              </li>

                              <!-- Fullwith Mega Menu -->						 

                              <li class="dropdown mega-full menu-color3 marcas">

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

                              <li class="menu-color3 consejos">

                                 <a href="<?php echo get_post_type_archive_link( 'consejos' ); ?>" role="button" aria-expanded="false">CONSEJOS</a>

                              </li>

                              <li class="menu-color3 auto-test-tv">

                                 <a href="<?php echo get_permalink(2465); ?>" role="button" aria-expanded="false">AUTO TEST TV</a>

                              </li>

                              <li class="menu-color3 biblio">

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