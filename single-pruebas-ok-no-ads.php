<?php get_header(); ?>

<div class="container main-wrapper">

    <!-- End Main Banner -->
    <div class="mag-content clearfix">
      <div class="row">
        <div class="col-md-12">
          <div class="ad728-wrapper">
               <?php echo adrotate_group(16); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Banner -->

    <div class="main-content mag-content clearfix" style="margin: 0 !important;">
	 
	   <div class="breadcrumbs">
			<?php
			if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
	   </div>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row blog-content" style="margin: 0 !important;"> 
				 <!-- 123 probando tabs -->
				 <div class="ptitle-m visible-xs">
					<h1><?php echo get_the_title();?></h1>
				 </div>
				 <ul class="nav nav-pills tatop-m visible-xs">
					<li role="presentation" class="active" id="caccordeon"><a href="#tab-prueba" aria-controls="tab-prueba" role="tab" data-toggle="tab">PRUEBA</a></li>
					<li id="myDIV" class="pestana_prueba_m">
						<ul class="nav nav-pills tabottom-m">
						  <li role="presentation" class="active"><a href="#tab-resumen" aria-controls="tab-resumen" role="tab" data-toggle="tab">RESUMEN</a></li>
						  <li role="presentation"><a href="#tab-vida-a-bordo" aria-controls="tab-vida-a-bordo" role="tab" data-toggle="tab">VIDA A BORDO</a></li>
						  <li role="presentation"><a href="#tab-diseno" aria-controls="tab-diseno" role="tab" data-toggle="tab">DISEÑO</a></li>
						  <li role="presentation"><a href="#tab-manejo" aria-controls="tab-manejo" role="tab" data-toggle="tab">MANEJO</a></li>
						  <li role="presentation"><a href="#tab-performance" aria-controls="tab-performance" role="tab" data-toggle="tab">PERFORMANCE</a></li>
						  <li role="presentation"><a href="#tab-equipamiento" aria-controls="tab-equipamiento" role="tab" data-toggle="tab">EQUIPAMIENTO</a></li>
						</ul>
					</li>
					<li role="presentation" class="opiniones"><a href="#tab-opiniones" aria-controls="tab-opiniones" role="tab" data-toggle="tab">OPINIONES DE USUARIOS</a></li>
					<li role="presentation"><a href="#tab-rivales" aria-controls="tab-rivales" role="tab" data-toggle="tab">Rivales</a></li>
					<li role="presentation"><a href="#tab-modelos-anteriores" aria-controls="tab-modelos-anteriores" role="tab" data-toggle="tab">Modelos Anteriores</a></li>
				 </ul>
				 <!-- fin 123 probando tabs -->
                 <ul class="nav nav-pills tatop hidden-xs">
					<li role="presentation" class="active"><a href="#tab-prueba" aria-controls="tab-prueba" role="tab" data-toggle="tab">PRUEBA</a></li>
					<li role="presentation" class="opiniones"><a href="#tab-opiniones" aria-controls="tab-opiniones" role="tab" data-toggle="tab">OPINIONES DE USUARIOS</a></li>
					<li role="presentation"><a href="#tab-rivales" aria-controls="tab-rivales" role="tab" data-toggle="tab">Rivales</a></li>
					<li role="presentation"><a href="#tab-modelos-anteriores" aria-controls="tab-modelos-anteriores" role="tab" data-toggle="tab">Modelos Anteriores</a></li>
				 </ul>
				 
				<div class="ptitle hidden-xs">
                  <h1><?php echo get_the_title();?></h1>
                </div>

			  <div class="tab-content">
				
				<div role="tabpanel" class="tab-pane active" id="tab-prueba" style="padding: 0 !important;"> <!-- INICIO PRUEBA -->
				
				  <div class="row">
					<ul class="nav nav-pills tabottom hidden-xs">
					  <li role="presentation" class="active"><a href="#tab-resumen" aria-controls="tab-resumen" role="tab" data-toggle="tab">RESUMEN</a></li>
					  <li role="presentation"><a href="#tab-vida-a-bordo" aria-controls="tab-vida-a-bordo" role="tab" data-toggle="tab">VIDA A BORDO</a></li>
					  <li role="presentation"><a href="#tab-diseno" aria-controls="tab-diseno" role="tab" data-toggle="tab">DISEÑO</a></li>
					  <li role="presentation"><a href="#tab-manejo" aria-controls="tab-manejo" role="tab" data-toggle="tab">MANEJO</a></li>
					  <li role="presentation"><a href="#tab-performance" aria-controls="tab-performance" role="tab" data-toggle="tab">PERFORMANCE</a></li>
					  <li role="presentation"><a href="#tab-equipamiento" aria-controls="tab-equipamiento" role="tab" data-toggle="tab">EQUIPAMIENTO</a></li>
					</ul>

					<div class="tab-content clearfix">

						  <div role="tabpanel" class="tab-pane active" id="tab-resumen">

							  <div class="col-md-8">

								  <?php
								  $gal_imgs = get_field('galeria_de_imagenes');

								  $size_big = 'galeria_big';
								  $size_thumb = 'galeria_thumb';

								  $defimgbig = $gal_imgs [0]['sizes']['galeria_big'];

								  if( $gal_imgs ): ?>
								  <div class="gallery">

									  <div class="image-preview">
										  <img id="preview" src="<?php echo $defimgbig; ?>" />
									  </div>

									  <!-- Elastislide Carousel -->
									  <ul id="carousel" class="elastislide-list">
										  <?php foreach( $gal_imgs as $image ):

											  $image_url = $image['sizes'][$size_thumb];
											  $image_url_big = $image['sizes'][$size_big];
											  ?>

											  <li data-preview="<?php echo $image_url_big; ?>"><a href="#!"><img src="<?php echo $image_url; ?>" alt="image04" /></a></li>

										  <?php endforeach; ?>
									  </ul>
									  <!-- End Elastislide Carousel -->

								  </div><!-- End Gallery -->
								  <?php endif; ?>


								  <div class="datap">
									  <?php
									  $cterms = get_the_terms( $post->ID, 'marca' );
									  $que_marca = $cterms [0]->name;
									  ?>
									  <p><span>MARCA: </span> <?php echo $que_marca; ?></p>
									  <p><span>MODELO: </span> <?php echo get_field('modelo'); ?></p>
								  </div>

								  <div class="el-contenido">
									  <?php echo get_field('contenido'); ?>
								  </div>

								  <div id="afc">
									  <div class="afavor">
										  <h5>A favor <i class="fa fa-caret-up" aria-hidden="true"></i></h5>

										  <?php
										  $rows = get_field('a_favor');
										  if($rows)
										  {

											  foreach($rows as $row)
											  {
												  echo '<p>' . $row['caracteristica'] .'</p>';
											  }

										  }
										  ?>
									  </div>

									  <div class="encontra">
										  <h5>En contra <i class="fa fa-caret-down" aria-hidden="true"></i></h5>

										  <?php
										  $rows = get_field('en_contra');
										  if($rows)
										  {

											  foreach($rows as $row)
											  {
												  echo '<p>' . $row['caracteristica'] .'</p>';
											  }

										  }
										  ?>
									  </div>
								  </div>

							  </div><!-- End Left big column -->

							  <div class="col-md-4">

								  <div class="widget my-custom-widget wdark">

									  <?php
									  $wg = get_field('widget_resumen');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">CALIFICACI&Oacute;N</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>
										  <ul class="widlist">

											  <li>
												  <div class="wcontent">
													  <div class="name">Seguridad</div>
													  <div class="balls">
														  <?php
														   $puntaje = floatval( $wg['seguridad'] );

														   include ( TEMPLATEPATH . '/rueditas.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Vida a Bordo</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['vida_a_bordo'] );

														  include ( TEMPLATEPATH . '/rueditas.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Performance</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['prestaciones'] );

														  include ( TEMPLATEPATH . '/rueditas.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Manejo</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['manejo'] );

														  include ( TEMPLATEPATH . '/rueditas.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Performance</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['costob'] );

														  include ( TEMPLATEPATH . '/rueditas.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

								  <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_vida');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">VIDA A BORDO</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>
										  <ul class="widlist">

											  <li>
												  <div class="wcontent">
													  <div class="name">Posicion de manejo</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['posicion_de_manejo'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Asientos delanteros</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['asientos_delanteros'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Asientos traseros</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['asientos_traseros'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Espacio interior</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['espacio_interior'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Capacidad de baúl</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['capacidad_baul'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Climatización</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['climatizacion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Insonorización</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['insonorizacion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Instrumental</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['instrumental'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Equipamiento de serie</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['equipamiento_de_serie'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Multimedia</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['multimedia'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Terminación / Materiales</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['terminacion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Percepción de calidad</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['percepcion_calidad'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

								  <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_seguridad');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">DISE&Ntilde;O</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>
										  <ul class="widlist">

											  <li>
												  <div class="wcontent">
													  <div class="name">Seguridad Activa</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['activa'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Seguridad Pasiva</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['pasiva'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Distancia de frenado</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['distancia_de_frenado'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Visibilidad panorámica</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['visibilidad'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Luces</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['luces'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

							      <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_manejo');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">MANEJO</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>

										  <ul class="widlist">
											  <li>
												  <div class="wcontent">
													  <div class="name">Comp. dinámico</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['comp_dinamico'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Confort de marcha</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['confort_de_marcha'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Maniobrabilidad</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['maniobrabilidad'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Dirección</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['direccion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Selector de caja</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['selector_de_caja'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Sensibilidad al viento</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['sensibilidad_viento'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

							      <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_presta_consumo');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">performance</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>

										  <ul class="widlist">
											  <li>
												  <div class="wcontent">
													  <div class="name">Aceleración</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['aceleracion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Recuperaciones</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['recuperaciones'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Consumo</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['consumo'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Autonomía</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['autonomia'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Potencia - CV/litro</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['potencia_cv_litro'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->
							 
							 </div><!-- End Sidebar -->

						  </div><!-- End of .tab-pane -->

						  <div role="tabpanel" class="tab-pane" id="tab-vida-a-bordo">

							  <div class="col-md-8">

								  <?php
								  $gal_imgs = get_field('galeria_vida_a_bordo');

								  $size_big = 'galeria_big';
								  $size_thumb = 'galeria_thumb';

								  $defimgbig = $gal_imgs [0]['sizes']['galeria_big'];

								  if( $gal_imgs ): ?>
									  <div class="gallery">

										  <div class="image-preview">
											  <img id="preview" src="<?php echo $defimgbig; ?>" />
										  </div>

										  <!-- Elastislide Carousel -->
										  <ul id="carousel" class="elastislide-list">
											  <?php foreach( $gal_imgs as $image ):

												  $image_url = $image['sizes'][$size_thumb];
												  $image_url_big = $image['sizes'][$size_big];
												  ?>

												  <li data-preview="<?php echo $image_url_big; ?>"><a href="#!"><img src="<?php echo $image_url; ?>" alt="image04" /></a></li>

											  <?php endforeach; ?>
										  </ul>
										  <!-- End Elastislide Carousel -->

									  </div><!-- End Gallery -->
								  <?php endif; ?>
								  <div class="datap">									  <?php									  $cterms = get_the_terms( $post->ID, 'marca' );									  $que_marca = $cterms [0]->name;									  ?>									  <p><span>MARCA: </span> <?php echo $que_marca; ?></p>									  <p><span>MODELO: </span> <?php echo get_field('modelo'); ?></p>								  </div>
								  <div class="el-contenido">
									  <?php echo get_field('contenido_vida_a_bordo'); ?>
								  </div>

							  </div><!-- End Left big column -->

							  <div class="col-md-4">

								  <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_vida');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">VIDA A BORDO</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>
										  <ul class="widlist">

											  <li>
												  <div class="wcontent">
													  <div class="name">Posicion de manejo</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['posicion_de_manejo'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Asientos delanteros</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['asientos_delanteros'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Asientos traseros</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['asientos_traseros'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Espacio interior</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['espacio_interior'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Capacidad de baúl</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['capacidad_baul'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Climatización</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['climatizacion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Insonorización</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['insonorizacion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Instrumental</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['instrumental'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Equipamiento de serie</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['equipamiento_de_serie'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Multimedia</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['multimedia'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Terminación / Materiales</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['terminacion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Percepción de calidad</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['percepcion_calidad'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

								  <?php get_sidebar('singles'); ?>

							  </div><!-- End Sidebar -->

						  </div><!-- End of .tab-pane -->

						  <div role="tabpanel" class="tab-pane" id="tab-diseno"> 

							  <div class="col-md-8">

								  <?php
								  $gal_imgs = get_field('galeria_seguridad');

								  $size_big = 'galeria_big';
								  $size_thumb = 'galeria_thumb';

								  $defimgbig = $gal_imgs [0]['sizes']['galeria_big'];

								  if( $gal_imgs ): ?>
									  <div class="gallery">

										  <div class="image-preview">
											  <img id="preview" src="<?php echo $defimgbig; ?>" />
										  </div>

										  <!-- Elastislide Carousel -->
										  <ul id="carousel" class="elastislide-list">
											  <?php foreach( $gal_imgs as $image ):

												  $image_url = $image['sizes'][$size_thumb];
												  $image_url_big = $image['sizes'][$size_big];
												  ?>

												  <li data-preview="<?php echo $image_url_big; ?>"><a href="#!"><img src="<?php echo $image_url; ?>" alt="image04" /></a></li>

											  <?php endforeach; ?>
										  </ul>
										  <!-- End Elastislide Carousel -->

									  </div><!-- End Gallery -->
								  <?php endif; ?>
								  <div class="datap">									  <?php									  $cterms = get_the_terms( $post->ID, 'marca' );									  $que_marca = $cterms [0]->name;									  ?>									  <p><span>MARCA: </span> <?php echo $que_marca; ?></p>									  <p><span>MODELO: </span> <?php echo get_field('modelo'); ?></p>								  </div>
								  <div class="el-contenido">
									  <?php echo get_field('contenido_seguridad'); ?>
								  </div>

							  </div><!-- End Left big column -->

							  <div class="col-md-4">

								  <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_seguridad');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">DISE&Ntilde;O</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>
										  <ul class="widlist">

											  <li>
												  <div class="wcontent">
													  <div class="name">Seguridad Activa</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['activa'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Seguridad Pasiva</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['pasiva'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Distancia de frenado</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['distancia_de_frenado'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Visibilidad panorámica</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['visibilidad'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Luces</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['luces'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

								  <?php get_sidebar('singles'); ?>

							  </div><!-- End Sidebar -->

						  </div><!-- End of .tab-pane -->

						  <div role="tabpanel" class="tab-pane" id="tab-manejo"> 

							  <div class="col-md-8">

								  <?php
								  $gal_imgs = get_field('galeria_manejo');

								  $size_big = 'galeria_big';
								  $size_thumb = 'galeria_thumb';

								  $defimgbig = $gal_imgs [0]['sizes']['galeria_big'];

								  if( $gal_imgs ): ?>
									  <div class="gallery">

										  <div class="image-preview">
											  <img id="preview" src="<?php echo $defimgbig; ?>" />
										  </div>

										  <!-- Elastislide Carousel -->
										  <ul id="carousel" class="elastislide-list">
											  <?php foreach( $gal_imgs as $image ):

												  $image_url = $image['sizes'][$size_thumb];
												  $image_url_big = $image['sizes'][$size_big];
												  ?>

												  <li data-preview="<?php echo $image_url_big; ?>"><a href="#!"><img src="<?php echo $image_url; ?>" alt="image04" /></a></li>

											  <?php endforeach; ?>
										  </ul>
										  <!-- End Elastislide Carousel -->

									  </div><!-- End Gallery -->
								  <?php endif; ?>
								  <div class="datap">									  <?php									  $cterms = get_the_terms( $post->ID, 'marca' );									  $que_marca = $cterms [0]->name;									  ?>									  <p><span>MARCA: </span> <?php echo $que_marca; ?></p>									  <p><span>MODELO: </span> <?php echo get_field('modelo'); ?></p>								  </div>
								  <div class="el-contenido">
									  <?php echo get_field('contenido_manejo'); ?>
								  </div>

							  </div><!-- End Left big column -->

							  <div class="col-md-4">

								  <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_manejo');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">MANEJO</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>

										  <ul class="widlist">
											  <li>
												  <div class="wcontent">
													  <div class="name">Comp. dinámico</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['comp_dinamico'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Confort de marcha</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['confort_de_marcha'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Maniobrabilidad</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['maniobrabilidad'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Dirección</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['direccion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Selector de caja</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['selector_de_caja'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Sensibilidad al viento</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['sensibilidad_viento'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

								  <?php get_sidebar('singles'); ?>

							  </div><!-- End Sidebar -->

						  </div><!-- End of .tab-pane -->

						  <div role="tabpanel" class="tab-pane" id="tab-performance">

							  <div class="col-md-8">							     <div class="datap">									  <?php									  $cterms = get_the_terms( $post->ID, 'marca' );									  $que_marca = $cterms [0]->name;									  ?>									  <p><span>MARCA: </span> <?php echo $que_marca; ?></p>									  <p><span>MODELO: </span> <?php echo get_field('modelo'); ?></p>								  </div>

								  <?php
								  $tablas = get_field('prestaciones_y_consumo');

								  if( $tablas ): ?>

									  <div class="table-responsive">
										  <table class="table">
											  <caption align="top">
												  ACELERACIONES
											  </caption>

											  <tr>
												  <td>0-100 km/h</td>
												  <td><?php echo $tablas ['cceleraciones']['0-100_km/h']; ?></td>
											  </tr>

											  <tr>
												  <td>0-400 metros</td>
												  <td><?php echo $tablas ['cceleraciones']['0-400_metros']; ?></td>
											  </tr>

											  <tr>
												  <td>0-1.000 metros</td>
												  <td><?php echo $tablas ['cceleraciones']['0-1.000_metros']; ?></td>
											  </tr>

										  </table>
									  </div>

									  <div class="table-responsive">
										  <table class="table">
											  <caption align="top">
												  RECUPERACIONES
											  </caption>

											  <?php
											  foreach ($tablas ['recuperaciones'] as $val) {
												  echo "<tr>";
												  foreach ($val as $v) {
													  ?>

													  <td><?php echo $v; ?></td>

													  <?php
												  }
												  echo "</tr>";
											  }
											  ?>
										  </table>
									  </div>

									  <div class="table-responsive">
										  <table class="table">
											  <caption align="top">
												  FRENADA
											  </caption>

											  <tr>
												  <td>60-0 km/h</td>
												  <td><?php echo $tablas ['frenada']['60-0_km/h']; ?></td>
											  </tr>

											  <tr>
												  <td>100-0 km/h</td>
												  <td><?php echo $tablas ['frenada']['100-0_km/h']; ?></td>
											  </tr>

											  <tr>
												  <td>130-0 km/h</td>
												  <td><?php echo $tablas ['frenada']['130-0_km/h']; ?></td>
											  </tr>

										  </table>
									  </div>

									  <div class="table-responsive">
										  <table class="table">
											  <caption align="top">
												  Fuerza G
											  </caption>

											  <tr>
												  <td>Aceleracion</td>
												  <td><?php echo $tablas ['fuerza_g']['aceleracion']; ?></td>
											  </tr>

											  <tr>
												  <td>Desaceleracion</td>
												  <td><?php echo $tablas ['fuerza_g']['desaceleracion']; ?></td>
											  </tr>
										  </table>
									  </div>

									  <div class="table-responsive">
										  <table class="table">
											  <caption align="top">
												  Consumo (L/100km) Autonom&Iacute;a (KM)
											  </caption>

											  <?php
											  foreach ($tablas ['consumo_autonomia'] as $val) {
												  echo "<tr>";
												  foreach ($val as $v) {
													  ?>

													  <td><?php echo $v; ?></td>

													  <?php
												  }
												  echo "</tr>";
											  }
											  ?>
										  </table>
									  </div>

									  <div class="table-responsive">
										  <table class="table">
											  <caption align="top">
												  Error de Veloc&Iacute;metro
											  </caption>

											  <tr>
												  <td>100 km/h</td>
												  <td><?php echo $tablas ['error_velocímetro']['100_km/h']; ?></td>
											  </tr>

											  <tr>
												  <td>130 km/h</td>
												  <td><?php echo $tablas ['error_velocímetro']['130_km/h']; ?></td>
											  </tr>
										  </table>
									  </div>

									  <div class="table-responsive">
										  <table class="table condipruebas">
											  <caption align="top">
												  Condiciones de la prueba
											  </caption>

											  <tr>
												  <td>Km inicial/final</td>
												  <td><?php echo $tablas ['condiciones_prueba']['km_inicial/final']; ?></td>
											  </tr>

											  <tr>
												  <td>Temp/Humedad</td>
												  <td><?php echo $tablas ['condiciones_prueba']['temp/humedad']; ?></td>
											  </tr>

											  <tr>
												  <td>Peso real con tanque lleno</td>
												  <td><?php echo $tablas ['condiciones_prueba']['peso_real_con_tanque_lleno']; ?></td>
											  </tr>

											  <tr>
												  <td>Neum&aacute;ticos</td>
												  <td><?php echo $tablas ['condiciones_prueba']['neumaticos']; ?></td>
											  </tr>

											  <tr>
												  <td>Presi&oacute;n</td>
												  <td><?php echo $tablas ['condiciones_prueba']['presion']; ?></td>
											  </tr>

										  </table>
									  </div>

									  <div class="aclaraciones clearfix">
										 <?php $aclaraciones = get_field('aclaraciones');

										 if ($aclaraciones) echo $aclaraciones;
										 ?>
									  </div>

								  <?php endif; ?>
							  </div><!-- End Left big column -->

							  <div class="col-md-4">

								  <div class="widget my-custom-widget">

									  <?php
									  $wg = get_field('widget_presta_consumo');

									  if( $wg ): ?>

										  <div class="calif">
											  <div class="wcontent">
												  <div class="name">performance</div>
												  <div class="ptotal">
													  <?php echo $wg['puntaje_total']; ?>
												  </div>
											  </div>
										  </div>

										  <ul class="widlist">
											  <li>
												  <div class="wcontent">
													  <div class="name">Aceleración</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['aceleracion'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Recuperaciones</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['recuperaciones'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Consumo</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['consumo'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Autonomía</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['autonomia'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>

											  <li>
												  <div class="wcontent">
													  <div class="name">Potencia - CV/litro</div>
													  <div class="balls">
														  <?php
														  $puntaje = floatval( $wg['potencia_cv_litro'] );

														  include ( TEMPLATEPATH . '/rueditas-dark.php' );
														  ?>
													  </div>
												  </div>
											  </li>
										  </ul>

										  <div class="total">
											  <div class="wcontent">
												  <div class="name">TOTAL</div>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas.php' );
													  ?>
												  </div>
											  </div>
										  </div>

									  <?php endif; ?>
								  </div><!-- End of .my-custom-widget -->

								 <?php get_sidebar('singles'); ?>

							  </div><!-- End Sidebar -->

						  </div><!-- End of .tab-pane -->
						  
						  
						  <div role="tabpanel" class="tab-pane" id="tab-equipamiento">

							  <div class="col-md-8">							      <div class="datap">									  <?php									  $cterms = get_the_terms( $post->ID, 'marca' );									  $que_marca = $cterms [0]->name;									  ?>									  <p><span>MARCA: </span> <?php echo $que_marca; ?></p>									  <p><span>MODELO: </span> <?php echo get_field('modelo'); ?></p>								  </div>

								  <?php if( have_rows('equipamiento') ):

									  while( have_rows('equipamiento') ): the_row();

										  // vars
										  $uno = get_sub_field('seguridad');
										  $dos = get_sub_field('confort');
										  $tres = get_sub_field('funcionamiento');
										  ?>

										  <div id="grupos">

											  <div class="cabecera-equipamiento">
												  <span class="block-title">
													<span>equipamiento</span>
												  </span>

												  <span class="codigos-int">
												  <span class="verde"><i class="fa fa-check"></i></span>&nbsp;<span>Serie</span> | <span class="rojo"><i class="fa fa-times"></i></span>&nbsp;<span>ND</span> | <span class="gris"><i class="fa fa-circle-o"></i></span>&nbsp;<span>Opcional</span>
												  </span>
											  </div>

											  <?php
											  $valcheck = "";
											  if( $uno ): ?>

											  <div class="table-responsive">
												  <table class="table">
													  <caption align="top">
														  SEGURIDAD
													  </caption>

													  <tbody>
													  <tr>
														  <td class="concepto">Airbags laterales delanteros / traseros</td>
														  <td class="equipo">
															   <?php
																   $valcheck = $uno ['airbagsLateralesDelanteroTrasero'] ['delantero'];

																   if ($valcheck == "serie") {
																	   echo '<span class="verde"><i class="fa fa-check"></i></span>';
																   } elseif ($valcheck == "nd") {
																	   echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																   } elseif ($valcheck == "opcional") {
																	   echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																   } else {
																	   echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																   }
															   ?>
														  </td>
														  <td class="equipo">
															  <?php
																  $valcheck = $uno ['airbagsLateralesDelanteroTrasero'] ['trasero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	 echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Airbags de cortina / rodilla</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['airbags-cortina-rodilla'] ['airbag-cortina'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['airbags-cortina-rodilla'] ['airbag-rodilla'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Apoyacabezas/delanteros activos</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['apoyacabezas-delanteros-activos'] ['apoyacabezas'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																 echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['apoyacabezas-delanteros-activos'] ['delanteros-activos'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Ayuda de arranque en pendiente</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['ayuda-en-pendiente'] ['ayuda-en-pendiente_in'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  &nbsp;
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Cierre automático de puertas en rodaje</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['cierre-puertas-en-rodaje'] ['cierre-puertas-en-rodaje_in'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																 echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Cinturones de seguridad inerciales delanteros / traseros</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['cinturones-seguridad-inerciales'] ['cinturones-seguridad-inerciales_delantero'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['cinturones-seguridad-inerciales'] ['cinturones-seguridad-inerciales_trasero'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Control de presión de neumáticos</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['ctrl-presion-neumaticos'] ['ctrl-presion-neumaticos_in'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  &nbsp;
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Control de tracción/estabilidad</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['control-traccion-estabilidad'] ['traccion'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['control-traccion-estabilidad'] ['estabilidad'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Detector / mantenimiento de carril</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['detectorMantenimiento-carril'] ['detector'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['detectorMantenimiento-carril'] ['mantenimiento'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Detector de punto ciego / fatiga</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['detector-pto-cieg-fatiga'] ['detector-pto-cieg-in'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['detector-pto-cieg-fatiga'] ['fatiga'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Encendido automático de luces</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['encendido-automatico-luces'] ['encendido-automatico-luces_in'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
														  <td class="equipo">&nbsp;</td>
													  </tr>
													  
													  <tr>
														  <td class="concepto">Faros direccionales / corning</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['faros_corning'] ['faros-dir'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['faros_corning'] ['corning'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Faros xenón/bixenón/LED</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['faros-xenon-bixenon-led'] ['faros-xenon'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['faros-xenon-bixenon-led'] ['faros-bixenon'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['faros-xenon-bixenon-led'] ['faros-LED'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
													  </tr>

													  <tr>
														  <td class="concepto">Ganchos Isofix</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['ganchos-isofix'] ['ganchos-isofix'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  <tr>
														  <td class="concepto">Luces antiniebla delanteras / traseras</td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['luces-antiniebla-delantero-trasero'] ['luces-antiniebla-delantera'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">
															  <?php
															  $valcheck = $uno ['luces-antiniebla-delantero-trasero'] ['luces-antiniebla-traseras'];

															  if ($valcheck == "serie") {
																  echo '<span class="verde"><i class="fa fa-check"></i></span>';
															  } elseif ($valcheck == "nd") {
																  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
															  } elseif ($valcheck == "opcional") {
																  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
															  } else {
																  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
															  }
															  ?>
														  </td>
														  <td class="equipo">&nbsp;</td>
													  </tr>

													  </tbody>

												  </table>
											  </div>

											  <div class="aclaraciones clearfix">
												  <?php $uno_aclaraciones = $uno ['aclaraciones'];

												  if ($uno_aclaraciones) echo $uno_aclaraciones;
												  ?>
											  </div>

											  <?php endif; ?>

											  <?php
											  $valcheck = "";
											  if( $dos ): ?>

												  <div class="table-responsive">
													  <table class="table">
														  <caption align="top">
															  CONFORT
														  </caption>

														  <tbody>
														  <tr>
															  <td class="concepto">Aire acondicionado / climatizador autom&aacute;tico / bizona</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['aireacondicionado-climatizador-bizona'] ['aire-acondicionado'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['aireacondicionado-climatizador-bizona'] ['climatizador'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['aireacondicionado-climatizador-bizona'] ['bizona'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Apertura a distancia puertas/baúl</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['apertura-distancia-puertas-baul'] ['apertura-distancia-puertas_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['apertura-distancia-puertas-baul'] ['apertura-distancia-baul_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Apertura-cierre automático de baúl</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['apertura-cierre-baul'] ['apertura-cierre-baul_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Apertura interna de baúl / tanque</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['apertura-interna-baul-tanque'] ['apertura-interna-baul_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['apertura-interna-baul-tanque'] ['apertura-interna-tanque_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Asientos Calefaccionados</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asientos-calefaccionados'] ['asientos-calefaccionados_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Asientos regulables eléctricos de conductor / acompañante</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asiento-regulables-electricos'] ['asiento-regulables-electricos-cond'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asiento-regulables-electricos'] ['asiento-regulables-electricos-acomp'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Asientos con memoria de conductor / acompañante</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asiento-memoria'] ['asientos_con_memoria_cond.'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asiento-memoria'] ['asientos_con_memoria_acomp'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Asientos regulables altura de conductor / acompañante</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asiento-regulables-altura'] ['asiento-regulables-altura-cond'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asiento-regulables-altura'] ['asiento-regulables-altura-acomp'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Asistente de estacionamiento</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['asistente-estacionamiento'] ['asistente-estacionamiento_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">CD Player / entrada auxiliar / conexión HDMI</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cd-auxiliar-hdmi'] ['cd-player'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cd-auxiliar-hdmi'] ['auxiliar'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cd-auxiliar-hdmi'] ['hdmi'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Cierre centralizado de puertas/espejos/vidrios</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cierre-centralizado-puertas-espejos-vidrios'] ['puertas'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cierre-centralizado-puertas-espejos-vidrios'] ['espejos'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cierre-centralizado-puertas-espejos-vidrios'] ['vidrios'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Computadora de a bordo/multifunción</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['compu-multifuncion'] ['computadora_a_bordo'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['compu-multifuncion'] ['multifuncion'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Conexión Bluetooth/USB</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['conex-blue-usb'] ['bluetooth'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['conex-blue-usb'] ['usb'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Cortina lateral/posterior</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cortina-lat-pos'] ['cortina-lat'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cortina-lat-pos'] ['cortina-pos'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Cruise control / limitador de velocidad</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cruise-limitador'] ['cruise_control'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['cruise-limitador'] ['limitador'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;
																  &nbsp;
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Encendedor / cenicero</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['encendedor-cenicero'] ['encendedor'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['encendedor-cenicero'] ['cenicero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Espejos el&eacute;ctricos / rebatido el&eacute;ctrico / desempa&ntilde;ador</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['espejos-rebatidor_desempaniador'] ['espejos-elec'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['espejos-rebatidor_desempaniador'] ['rebatidor-elec'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['espejos-rebatidor_desempaniador'] ['desempanador'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Freno de estacionamiento el&eacute;ctrico / brake hold</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['freno-elec-brake'] ['freno-elec'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['freno-elec-brake'] ['brake-hold'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Levantavidrios eléctricos delanteros/traseros</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['levantavidrios-elect-del-tra'] ['delanteros'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['levantavidrios-elect-del-tra'] ['traseros'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Limpialava faros / Limpialava luneta</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['lfaros-lluneta'] ['lfaros'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['lfaros-lluneta'] ['lluneta'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Llantas de aleación</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['llantas-aleac'] ['llantas-aleac_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Navegador satelital / Pantalla táctil</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['navegador-pantalla'] ['navegador'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['navegador-pantalla'] ['pantalla'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Plazas traseras corredizas/reclinables</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['plazas-traseras-cor-rec'] ['corredizas'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['plazas-traseras-cor-rec'] ['reclinables'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Portamapas en contrapuerta delantera / trasera</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['portamapas-del-tras'] ['delantero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['portamapas-del-tras'] ['trasero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Radio / comando satelital</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['radio-mando'] ['radio'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['radio-mando'] ['mando'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Respaldo trasero rebatible completo/parcial</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['respaldo-trasero'] ['completo'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['respaldo-trasero'] ['parcial'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Rueda de auxilio temporal/original/run flat</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['rueda-auxilio'] ['rueda-auxilio-temporal'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['rueda-auxilio'] ['rueda-auxilio-orginal'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['rueda-auxilio'] ['rueda-auxilio-run-flat'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Sensor de estacionamiento delantero/trasero</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-estacionamiento'] ['delantero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-estacionamiento'] ['trasero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Sensor de estacionamiento sonoro/visual/c&aacute;mara</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-est-s-v-c'] ['sonoro'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-est-s-v-c'] ['visual'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-est-s-v-c'] ['camara'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Sensor de lluvia / intermitente regulable / crepuscular</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-lluvia'] ['lluvia'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-lluvia'] ['intermitente'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sensor-lluvia'] ['crepuscular'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Sujeci&oacute;n lumbar regulable de conductor / acompa&ntilde;ante</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sujecion-lumbar'] ['conductor'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['sujecion-lumbar'] ['acompaniante'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Tapizado textil/mixto/cuero</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['tapizado'] ['textil'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['tapizado'] ['mixto'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['tapizado'] ['cuero'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Techo solar eléctrico/panorámico</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['techo-solar'] ['electrico'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['techo-solar'] ['panoramico'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Volante regulable altura/profundidad/eléctrico</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['volante-regu'] ['altura'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['volante-regu'] ['profundidad'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $dos ['volante-regu'] ['electrico'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  </tbody>

													  </table>
												  </div>

												  <div class="aclaraciones clearfix">
													  <?php $dos_aclaraciones = $dos ['aclaraciones'];

													  if ($dos_aclaraciones) echo $dos_aclaraciones;
													  ?>
												  </div>

											  <?php endif; ?>


											  <?php
											  $valcheck = "";
											  if( $tres ): ?>

												  <div class="table-responsive">
													  <table class="table">
														  <caption align="top">
															  FUNCIONAMIENTO
														  </caption>

														  <tbody>
														  <tr>
															  <td class="concepto">Alarma sonora de luces encendidas/llaves</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['alarma-luces-llaves'] ['luces'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['alarma-luces-llaves'] ['llaves'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Acceso manos libres/arranque por botón</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['acceso-manos-arranque'] ['manos-libres'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['acceso-manos-arranque'] ['arranque-boton'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Apagado automático de luces</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['apagado-aut-luces'] ['apagado-aut-luces_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Indicador nivel/presión/temperatura de aceite</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['indicador-aceite'] ['nivel'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['indicador-aceite'] ['presion'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['indicador-aceite'] ['temperatura'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  <tr>
															  <td class="concepto">Indicador temperatura de agua / temperatura exterior</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['indicador-agua-text'] ['temp-agua'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['indicador-agua-text'] ['temp-exterior'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Luz de reserva de combustible</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['luz-combustible'] ['luz-combustible_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Regulación interna de faros/automática</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['reg-faros'] ['faros-interna'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['reg-faros'] ['faros-reg-automatica'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Shift up-down</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['shift'] ['shift_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Stop and start</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['stop-start'] ['stop-start_in'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">&nbsp;</td>
															  <td class="equipo">&nbsp;</td>
														  </tr>

														  <tr>
															  <td class="concepto">Testigo de puertas / capot / ba&uacute;l abiertos</td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['testigo-p-c-b'] ['puertas'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['testigo-p-c-b'] ['capot'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
															  <td class="equipo">
																  <?php
																  $valcheck = $tres ['testigo-p-c-b'] ['baul'];

																  if ($valcheck == "serie") {
																	  echo '<span class="verde"><i class="fa fa-check"></i></span>';
																  } elseif ($valcheck == "nd") {
																	  echo '<span class="rojo"><i class="fa fa-times"></i></span>';
																  } elseif ($valcheck == "opcional") {
																	  echo '<span class="gris"><i class="fa fa-circle-o"></i></span>';
																  } else {
																	  echo '<i class="fa fa-window-minimize gris" aria-hidden="true"></i>';
																  }
																  ?>
															  </td>
														  </tr>

														  </tbody>

													  </table>
												  </div>

												  <div class="aclaraciones clearfix">
													  <?php $tres_aclaraciones = $tres ['aclaraciones'];

													  if ($tres_aclaraciones) echo $tres_aclaraciones;
													  ?>
												  </div>

											  <?php endif; ?>

										  </div><!-- end of #grupos -->

									  <?php endwhile; ?>

								  <?php endif; ?>

							  </div><!-- End Left big column -->

							  <div class="col-md-4">

								  <?php get_sidebar('singles'); ?>

							  </div><!-- End Sidebar -->

						  </div><!-- End of .tab-pane -->
						  
			         </div><!-- End of .tab-content -->
				  </div>

				</div><!-- FIN PRUEBA -->

             

				<div role="tabpanel" class="tab-pane" id="tab-opiniones"> <!-- INICIO COMENTARIOS -->

				    <!-- Comment List -->
					<div id="comments" class="clearfix">
						 <?php comments_template( '', true ); ?>
					</div>
				  
				</div><!-- FIN COMENTARIOS -->

				<div role="tabpanel" class="tab-pane" id="tab-rivales"> <!-- inicio rivales -->
				   <div class="row">
					  <div class="col-xs-12">

						  <div class="row modelo-seleccionado no-mar">

							  <div class="col-sm-6 col-md-2 no-pad-left">
								  <div class="mini-thumb">
									  <!-- post thumbnail -->
									  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										  <a href="#!" title="<?php the_title(); ?>">
											  <?php the_post_thumbnail('rivales-tamanio' );  ?>
										  </a>
									  <?php endif; ?>
									  <!-- /post thumbnail -->
								  </div>
							  </div>

							  <div class="col-sm-6 col-md-3 tittulo text-center">
								   <span>
									  <?php
									  $cterms2 = get_the_terms( $post->ID, 'marca' );
									  $que_marca2 = $cterms2 [0]->name;
									  ?>
									   <span class="atributto">Marca</span>
									  <span class="datto"><?php echo $que_marca2; ?></span>
								   </span>
							  </div>

							  <div class="col-sm-6 col-md-4 tittulo text-center">
							  <span>
								<span class="atributto">Modelo</span>
								<span class="datto"><?php echo get_field('modelo'); ?></span>
							  </span>
							  </div>

							  <div class="col-sm-6 col-md-3 tittulo">
								  <?php
								  $wg = get_field('widget_resumen');

								  if( $wg ): ?>

									  <ul class="califf">
										  <li>
											  <div class="wcontent">
												  <span class="atributto">CALIFICACI&Oacute;N</span>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas-dark.php' );
													  ?>
												  </div>
											  </div>
										  </li>
									  </ul>

								  <?php endif; ?>
							  </div>

						  </div><!-- End of .modelo-seleccionado -->

						  <div class="row los-competidores">

							  <?php
							  $post_objects = get_field('p_rivales');

							  if( $post_objects ): ?>
								  <?php foreach( $post_objects as $post):  ?>
									  <?php setup_postdata($post); ?>

									  <div class="col-sm-4 col-md-3">

										  <div class="img-compet">
											  <a href="<?php echo get_post_type_archive_link( 'pruebas' ); ?>" class="category">PRUEBAS</a>

											  <!-- post thumbnail -->
											  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
												  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													  <?php the_post_thumbnail('thumbnail-nota-big', array( 'class' => 'img-responsive' ) );  ?>
												  </a>
											  <?php endif; ?>
											  <!-- /post thumbnail -->
										  </div>

										  <div class="txt-compet">
											  <div class="mmodelo">
												  <?php echo get_field('modelo'); ?>
											  </div>

											  <div class="mmarca">
												  <?php
												  $cterms3 = get_the_terms( get_the_ID(), 'marca' );
												  $que_marca3 = $cterms3 [0]->name;
												  ?>

												  <?php echo $que_marca3; ?>
											  </div>

											  <div class="tit-texto">
												  <?php
												  $value = get_field( "extracto" );

												  if( $value ) {

													  echo '<p>' . $value . '</p>';

												  } else {

													  echo '<p>' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';

												  }
												  ?>
											  </div>
											  <a class="clm" href="<?php the_permalink(); ?>">Leer m&aacute;s</a>
										  </div>

									  </div>
								  <?php endforeach; ?>
								  <?php wp_reset_postdata();  ?>
							  <?php endif;
							  ?>

						  </div>

					  </div>
				  </div>
			 
				</div><!-- fin rivales -->

				<div role="tabpanel" class="tab-pane" id="tab-modelos-anteriores"> <!--inicio modelos-anteriores -->
				   <div class="row">
					  <div class="col-xs-12">

						  <div class="row modelo-seleccionado no-mar">

							  <div class="col-sm-6 col-md-2 no-pad-left">
								  <div class="mini-thumb">
									  <!-- post thumbnail -->
									  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										  <a href="#!" title="<?php the_title(); ?>">
											  <?php the_post_thumbnail('rivales-tamanio' );  ?>
										  </a>
									  <?php endif; ?>
									  <!-- /post thumbnail -->
								  </div>
							  </div>

							  <div class="col-sm-6 col-md-3 tittulo text-center">
								   <span>
									  <?php
									  $cterms2 = get_the_terms( $post->ID, 'marca' );
									  $que_marca2 = $cterms2 [0]->name;
									  ?>
									  <span class="atributto">Marca</span>
									  <span class="datto"><?php echo $que_marca2; ?></span>
								   </span>
							  </div>

							  <div class="col-sm-6 col-md-4 tittulo text-center">
							  <span>
								<span class="atributto">Modelo</span>
								<span class="datto"><?php echo get_field('modelo'); ?></span>
							  </span>
							  </div>

							  <div class="col-sm-6 col-md-3 tittulo">
								  <?php
								  $wg = get_field('widget_resumen');

								  if( $wg ): ?>

									  <ul class="califf">
										  <li>
											  <div class="wcontent">
												  <span class="atributto">CALIFICACI&Oacute;N</span>
												  <div class="balls">
													  <?php
													  $puntaje = floatval( $wg['puntaje_total'] );

													  include ( TEMPLATEPATH . '/rueditas-dark.php' );
													  ?>
												  </div>
											  </div>
										  </li>
									  </ul>

								  <?php endif; ?>
							  </div>

						  </div><!-- End of .modelo-seleccionado -->

						  <div class="row los-competidores">

						  <?php
						  $post_objects = get_field('modelos_anteriores');

						  if( $post_objects ): ?>
							  <?php foreach( $post_objects as $post):  ?>
								   <?php setup_postdata($post); ?>

								   <div class="col-sm-4 col-md-3">

										<div class="img-compet">
										  <a href="<?php echo get_post_type_archive_link( 'pruebas' ); ?>" class="category">PRUEBAS</a>

										  <!-- post thumbnail -->
										  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												  <?php the_post_thumbnail('thumbnail-nota-big', array( 'class' => 'img-responsive' ) );  ?>
											  </a>
										  <?php endif; ?>
										  <!-- /post thumbnail -->
									  </div>

										<div class="txt-compet">
										  <div class="mmodelo">
											  <?php echo get_field('modelo'); ?>
										  </div>

										  <div class="mmarca">
											  <?php
											  $cterms3 = get_the_terms( get_the_ID(), 'marca' );
											  $que_marca3 = $cterms3 [0]->name;
											  ?>

											  <?php echo $que_marca3; ?>
										  </div>

										  <div class="tit-texto">
											  <?php
											  $value = get_field( "extracto" );

											  if( $value ) {

												  echo '<p>' . $value . '</p>';

											  } else {

												  echo '<p>' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';

											  }
											  ?>
										  </div>
										  <a class="clm" href="<?php the_permalink(); ?>">Leer m&aacute;s</a>
									  </div>

								   </div>
							  <?php endforeach; ?>
						  <?php wp_reset_postdata();  ?>
						  <?php endif;
						  ?>

					  </div>

					  </div>
				  </div>
						  
				</div><!--fin modelos-anteriores -->

			  </div>

              <div id="datos-al-pie">
                  <ul>
                      <li class="fabricante">
                          <h4>FABRICANTE <span>Marca</span></h4>
                          <?php
                          $terms = get_the_terms( get_the_ID(), 'marca' );
                          if ( $terms && ! is_wp_error( $terms ) ){
                              $lamarca = $terms [0]->name;
                          }
                          echo "<div class='valor'>" .$lamarca. "</div>";
                          ?>
                      </li>

                      <?php if( have_rows('datos_al_pie') ):
	                  while( have_rows('datos_al_pie') ): the_row(); ?>

                          <li class="origen">
                              <h4>ORIGEN <span>Planta</span></h4>
                              <?php
                                 echo "<div class='valor'>" .get_sub_field('origen_/_planta'). "</div>";
                              ?>
                          </li>

                          <li class="garan">
                              <h4>GARANT&Iacute;A <span>Oficial</span></h4>
                              <?php
                              echo "<div class='valor'>" .get_sub_field('garantia'). "</div>";
                              ?>
                          </li>

                          <li class="lanza">
                              <h4>LANZAMIENTO <span>A&ntilde;o</span></h4>
                              <?php
                              echo "<div class='valor'>" .get_sub_field('lanzamiento_/_ano'). "</div>";
                              ?>
                          </li>

                      <?php endwhile; ?>
                      <?php endif; ?>
                  </ul>
              </div>
			  
			  
			 <div role="tabpanel" class="tab-pane" id="tab-modelos-anteriores"> <!--inicio modelos-anteriores -->
				   <div class="row">
					  <div class="col-xs-12">						  <?php						  $post_objects = get_field('modelos_rela');						  if( $post_objects ): ?>
						  <h2 class="rel-tit">Tambi&eacute;n podr&iacute;a interesarte:</h2>
						  <div class="row los-competidores">
							  <?php foreach( $post_objects as $post):  ?>
								   <?php setup_postdata($post); ?>

								   <div class="col-sm-4 col-md-3">

										<div class="img-compet">
										  <a href="<?php echo get_post_type_archive_link( 'pruebas' ); ?>" class="category es-prueba">PRUEBAS</a>
										  <!-- post thumbnail -->
										  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												  <?php the_post_thumbnail('thumbnail-nota-big', array( 'class' => 'img-responsive' ) );  ?>
											  </a>
										  <?php endif; ?>
										  <!-- /post thumbnail -->
									  </div>

										<div class="txt-compet">
										  <div class="mmodelo">
											  <?php echo get_field('modelo'); ?>
										  </div>

										  <div class="mmarca">
											  <?php
											  $cterms3 = get_the_terms( get_the_ID(), 'marca' );
											  $que_marca3 = $cterms3 [0]->name;
											  ?>

											  <?php echo $que_marca3; ?>
										  </div>

										  <div class="tit-texto">
											  <?php
											  $value = get_field( "extracto" );

											  if( $value ) {

												  echo '<p>' . $value . '</p>';

											  } else {

												  echo '<p>' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';

											  }
											  ?>
										  </div>
										  <a class="clm" href="<?php the_permalink(); ?>">Leer m&aacute;s</a>
									  </div>

								   </div>
							  <?php endforeach; ?>
						  <?php wp_reset_postdata();  ?>					  
					     </div>					  <?php endif; ?>	

					  </div>
				  </div>						  
				</div><!--fin modelos-anteriores -->


      </div><!-- .blog-content -->
      <?php endwhile; endif; ?>
      
    </div><!-- .main-content -->


</div><!-- .main-wrapper -->


<?php get_footer(); ?>