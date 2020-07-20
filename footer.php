

<!-- Footer -->

<footer class="footer source-org vcard copyright clearfix" id="footer" role="contentinfo">

  <div class="footer-main">

    <div class="fixed-main">

      <div class="container">

        <div class="mag-content">

          <div class="row">

              

            <div class="col-xs-12">

              <div class="footer-block text-center clearfix">

                

                <ul class="social-list clearfix">

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

                    <a href="https://www.instagram.com/AutoTestArg/" target="_blank">

                      <i class="fa fa-instagram"></i>

                    </a>

                  </li>                 

                </ul>

                

                <p class="clearfix">

                   Copyright &copy; 2018 Motorpress Argentina<br>

                   Av. Alicia Moreau de Justo 1750, CABA  |  <a href="tel:+5401148931800">(011) 4316.8000</a>  |  <a href="mailto:autotest@motorpress.com.ar">autotest@motorpress.com.ar</a>

                </p>

                

                <ul class="foo-simple-list">

                    <li><a href="/contacto/">Contacto</a></li>

                </ul>

                

              </div><!-- Footer Block -->

            </div>

              

          </div>

        </div>

      </div>

    </div>

  </div>



  <div class="footer-bottom clearfix">

    <div class="fixed-main">

      <div class="container">

        <div class="mag-content">

          <div class="row">

              

            <div class="col-xs-12 text-center">

                <p> Powered by <a href="http://www.dieciseisonce.com/" target="_blank">DiesiseisOnce.com</a></p>

            </div>



          </div>

        </div>

      </div>

    </div>

  </div>

</footer>

<!-- End Footer -->



</div><!-- End Main -->



<!-- Mobile Menu -->

<nav id="mobile-nav">

  <div>

    <ul>

        <li class="menu-color3">

            <a href="<?php echo get_post_type_archive_link( 'pruebas' ); ?>" role="button" aria-expanded="false">PRUEBAS</a>

        </li>



        <li class="menu-color3">

            <a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>" role="button" aria-expanded="false">NOTICIAS</a>

        </li>



        <li class="menu-color3">

            <a href="<?php echo get_post_type_archive_link( 'lanzamientos' ); ?>" role="button" aria-expanded="false">LANZAMIENTOS</a>

        </li>



        

		

		<li>

                  <a href="#">MARCAS</a>

				   <ul>

				  <?php

                  $args = array( 'hide_empty' => 1 );

                  $terms = get_terms( 'marca', $args );

                  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

						foreach ( $terms as $term ) { ?>

							<li><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>

					<?php	} } ?>

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

</nav>

<!-- / Mobile Menu -->



<div id="go-top-button" class="fa fa-angle-up" title="Ir Arriba"></div>

<div class="mobile-overlay" id="mobile-overlay"></div>



<?php wp_footer(); ?>



<script type="text/javascript">



    // Galeria de los singles:



    (function($) {

        var current = 0,

            $preview = $( '#preview' ),

            $carouselEl = $( '#carousel' ),

            $carouselItems = $carouselEl.children(),

            carousel = $carouselEl.elastislide( {

                current : current,

                minItems : 5,

                onClick : function( el, pos, evt ) {



                    changeImage( el, pos );

                    evt.preventDefault();



                },

                onReady : function() {



                    changeImage( $carouselItems.eq( current ), current );



                }

            } );



        function changeImage( el, pos ) {



            $preview.attr( 'src', el.data( 'preview' ) );

            $carouselItems.removeClass( 'current-img' );

            el.addClass( 'current-img' );

            carousel.setCurrent( pos );



        }





        $( '#carouseldos' ).elastislide( {

            minItems : 2

        } );

		

		$('.wp_autosearch_suggestions .wp_autosearch_category').removeClass('wp_autosearch_category');

		$('.wp_autosearch_suggestions .wp_autosearch_category').addClass('wp_new_class');

		

		//$('.wp_autosearch_form_wrapper button.wp_autosearch_submit').remove();

		

		/*

		$('#que-content form#wizardinfosys_autosearch_form').bind('keydown', function(e) {

			if (e.keyCode == 13) {

				e.preventDefault();

			}

		});



		$('section.bottom-search .wizardinfosys_autosearch_wrapper > form').bind('keydown', function(e) {

			if (e.keyCode == 13) {

				e.preventDefault();

			}

		});

		*/

		

		$("#caccordeon").click(function(){

			$("#myDIV").slideToggle();

			$(this).toggleClass("mopen");

		});

		

		

		if ((window.location.href.indexOf("#comment") > -1) || 

		(window.location.href.indexOf("replytocom") > -1)) {

			$('.nav.tatop > li').removeClass('active');

			$('.nav.tatop > li.opiniones').addClass('active');

			$('.tab-content > div').removeClass('active');

			$('.tab-content > div#tab-opiniones').addClass('active');

		} 

		

    })(jQuery);

	

	

	//Cancelar envio de formulario de busqueda (Autocompletar):

	const element = document.querySelector('#que-content form#wizardinfosys_autosearch_form');

	element.addEventListener('submit', event => {

	  event.preventDefault();

	  // actual logic, e.g. validate the form

	  //console.log('Form submission cancelled.');

	});

	

	//Cancelar envio de formulario de busqueda (Autocompletar):

	const element2 = document.querySelector('section.bottom-search .wizardinfosys_autosearch_wrapper > form');

	element2.addEventListener('submit', event => {

	  event.preventDefault();

	  // actual logic, e.g. validate the form

	  //console.log('Form submission cancelled.');

	});

	

	

	/*Arreglo pestañas en mobile:

	function myFunction() {

		var x = document.getElementById("myDIV");

		if (x.style.display == "block") {

			x.style.display = "none";

		} else {

			x.style.display = "block";

		}

		

		var a = document.getElementById("caccordeon");

		if (a.classList.contains("mclose")) {

			a.classList.remove("mclose");

			a.classList.add("mopen");

		} else {

			a.classList.remove("mopen");

			a.classList.add("mclose");

		}

	} 

	*/

	

</script>



</body>

</html>