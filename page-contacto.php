<?php

   /*

   	Template Name: contacto

   */

   ?>

<?php get_header(); ?>

<?php $url = get_bloginfo('url'); ?>

<div class="container main-wrapper">

   <!-- Begin Main Banner -->

   <div class="mag-content clearfix">

      <div class="row">

         <div class="col-md-12">

            <div class="ad728-wrapper">

               <!-- /317699715/autotest_home_superbanner -->
              <div id='div-gpt-ad-1537880161841-0'>
                <script>
                  googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537880161841-0'); });
                </script>
              </div>

            </div>

         </div>

      </div>

   </div>

   <!-- End Main Banner -->

   <div class="main-content mag-content clearfix">

      <div class="breadcrumbs">

         <?php if(function_exists('bcn_display')) { bcn_display(); }?>

      </div>

      <div class="row blog-content">

         <div class="col-md-8">

            <h3 class="block-title"><span>CONTACTO</span></h3>

            <section class="bloque gray bottom-search" style="background-color:rgb(221, 11, 36);">

                  <h2>CONTACTO</h2>

                  <form role="form" name="form" id="form-contacto-cto" action="<?php echo $url;?>/contacto-enviar-cto" method="post">

                     <div class="form-group">

                        <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" name="nombre" required autofocus tabindex="1">

                     </div>

                     <div class="form-group">

                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required tabindex="2">

                     </div>

                     <div class="form-group">

                        <input type="text" class="form-control" id="tel" placeholder="Telefono" name="tel" tabindex="3">

                     </div>

                     <div class="form-group">

						<input type="text" class="form-control" id="asunto" placeholder="asunto" required name="asunto" tabindex="4">

                     </div>

                     <div class="form-group">

                        <textarea name="comentarios" rows="5" required class="form-control" id="comentarios" tabindex="5"></textarea>

                     </div>

                     *Importante: es obligatorio completar los campos. <input type="submit" name="submit" id="submit" value="ENVIAR CONSULTA >" tabindex="6" class="btn btn-bl-ve text-uppercase pull-right" />

                     <input type="hidden" name="action" value="send" />

                  </form>



            </section>

         </div>

         <div class="col-md-4">

           <?php get_sidebar(); ?>


         </div>

      </div>

   </div>

   <!-- .main-content -->

</div>

<!-- .main-wrapper -->



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

                  

                <p class="clearfix">

                   Copyright &copy; 2018 Motorpress Argentina

                </p>

                

                <ul class="foo-simple-list">

                    <li><a href="#!">Contacto</a></li>

                    <li><a href="#!">Pol&iacute;tica de Privacidad</a></li>

                    <li><a href="#!">Aviso Legal</a></li>

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

                <p> Powered by <a href="//www.dieciseisonce.com/" target="_blank">DiesiseisOnce.com</a></p>

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

            <a href="//autotest.com.ar/consejos" role="button" aria-expanded="false">CONSEJOS</a>

        </li>



        <li class="menu-color3">

            <a href="#!" role="button" aria-expanded="false">BIBLIOTECA DIGITAL</a>

        </li>

    </ul>

  </div>

</nav>

<!-- / Mobile Menu -->



<div id="go-top-button" class="fa fa-angle-up" title="Ir Arriba"></div>

<div class="mobile-overlay" id="mobile-overlay"></div>



<?php wp_footer(); ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>

		<script type="text/javascript">

		$('#form-contacto-cto').validate({

			rules: {

				nombre: 				{required: true},

				asunto: 				{required: true},

				//telefono: 				{required: true},

				email:					{required: true, email: true},

				comentarios:				{required: true, maxlength:1900},

				

				},

			messages: {

				nombre: 				{required: "Ingrese su nombre y apellido"},

				asunto: 				{required: "Ingrese el asunto"},

				//telefono: 				{required: "Ingrese su Telefono"},

				email:         			{required: "Ingrese su email", email:"Debe ingresar un email v&aacute;lido"},

				comentarios:          		{required: "Ingrese su consulta", maxlength:"El m&aacute;ximo son 1900 caracteres"},

				},

				submitHandler: function(form) {

					$('#submit').attr("disabled", true);

					$('#myPleaseWait').modal('show');

					form.submit();

				   },

				   invalidHandler: function() {

					 $('#submit').attr("disabled", false);

				   }

			});

</script>

<div class="modal modal-loading fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"

    role="dialog" aria-hidden="true" data-backdrop="static">

    <div class="modal-dialog modal-sm">

        <div class="modal-content">

            <div class="modal-body">

                <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>

                <span class="sr-only">Loading...</span>

            </div>

        </div>

    </div>

</div>

</body>

</html>

<?php //get_footer(); ?>