<?php // No borrar estas líneas

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

		die ('Por favor, no abras esta página directamente. ¡Gracias!');



	if (!empty($post->post_password)) { // Si hay una contraseña

		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // Y no coincide con la cookie

			?>



			<p>Esta entrada está protegida con contraseña. Introduce la contraseña para ver los comentarios.</p>



			<?php

			return;

		}

	}



	/* Esta variable es para alternar el fondo de los comentarios */

	$oddcomment = 'class="alt" ';

?>



<!-- Puedes empezar a modificar aquí. -->



<?php if ($comments) : ?>

	<h3 id="comments"><?php comments_number('Sin Opiniones', 'Una Opini&oacute;n', '% Opiniones' );?> a &#8220;<?php the_title(); ?>&#8221;</h3>



	<ol>



	<?php foreach ($comments as $comment) : ?>



		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">

			<?php echo get_avatar( $comment, 80 ); ?>

			<cite><?php comment_author_link() ?></cite> |

			<?php if ($comment->comment_approved == '0') : ?>

			<p>Su comentario est&aacute; pendiente de moderaci&oacute;n.</p>

			<?php endif; ?>

			<p>
				<a href="#comment-<?php comment_ID() ?>" title="">
					<?php comment_date('F jS, Y') ?> a las <?php comment_time() ?>
						
					</a> 
					<?php edit_comment_link('editar','&nbsp;&nbsp;',''); ?>
				</p>
			

			<?php comment_text() ?>

			<?php 
			$post_id = get_the_ID();
			$comment_id =get_comment_ID();

			//get the setting configured in the admin panel under settings discussions "Enable threaded (nested) comments  levels deep"  
			$max_depth = get_option('thread_comments_depth');
			//add max_depth to the array and give it the value from above and set the depth to 1
			$default = array(
			    'add_below'  => 'comment',
			    'respond_id' => 'respond',
			    'reply_text' => __('Reply'),
			    'login_text' => __('Log in to Reply'),
			    'depth'      => 1,
			    'before'     => '',
			    'after'      => '',
			    'max_depth'  => $max_depth
			    );
                    comment_reply_link($default,$comment_id,$post_id);  ?>

		</li>



	<?php

		/* Cambia cualquier otro comentario (trakbacks) a una clase distinta */

		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';

	?>



	<?php endforeach; /* fin de los comentarios */ ?>



	</ol>



 <?php else : // esto se muestra si aún no hay comenarios ?>



	<?php if ('open' == $post->comment_status) : ?>

		<!-- Si los comentarios están abiertos, pero no hay comentarios. -->



	 <?php else : // los comentarios están cerrados ?>

		<!-- Si los comentarios están cerrados -->

		<p>Los comentarios est&aacute;n cerrados.</p>



	<?php endif; ?>

<?php endif; ?>



<?php if ('open' == $post->comment_status) : ?>



<div class="form-content">

    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>

    <p>Debe estar <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">conectado</a> para escribir un comentario.</p>

    <?php else : ?>





    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<h3>DEJANOS TU OPINI&Oacute;N</h3>



<?php if ( $user_ID ) : ?>



<p>Conectado como: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Salir de esta cuenta">Deconectarme &raquo;</a></p>



<?php else : ?>



<div class="form-group">

    <input type="text" placeholder="Nombre (obligatorio)" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

    <label for="author">Nombre <?php if ($req) echo "(necesario)"; ?></label>

</div>



<div class="form-group">

    <input type="text" placeholder="Email (obligatorio)" name="email" id="email" class="form-control" value="<?php echo $comment_author_email; ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />

    <label for="email">Email (no se publicará) <?php if ($req) echo "(necesario)"; ?></label>

</div>



<input class="hidden" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />

<label for="url" class="hidden">Página web</label>



<?php endif; ?>



<div class="form-group">

<p><strong>HTML:</strong> Puede utilizar estas etiquetas: <code><?php echo allowed_tags(); ?></code></p>

</div>



<div class="form-group">

    <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" class="form-control" placeholder="Tu opini&oacute;n"></textarea>

</div>



<div class="form-group text-right fgb">

    <input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-default" value="Enviar Comentario &raquo;" />

</div>



<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>



</form>

</div>



<?php endif; // Si es necesario registro y no está conectado ?>



<?php endif; // Si borras esto el cielo caerá sobre tu cabeza ?>

