<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-fichablog">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-entrie container-fluid">
		<div class="box-content-describe">
			<div class="col-lg-12 col-xs-12 box-header-entrie">
				<h1><?php echo $fEntrada['titulo']; ?></h1>
				<small><?php echo $fEntrada['fechaFormat']; ?></small>
			</div>
			<div class="box-body col-lg-12">
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 box-all-entries">
					<div class="row">
						<div class="col-lg-12 box-contenido">
							<?php echo $fEntrada['contenido_html']; ?>
						</div>
						<div class="col-lg-12 box-autor">
							<div class="box-autor-foto">
								<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/blog/foto-autor/<?php echo $fEntrada['foto_autor']; ?>" />
							</div>
							<div class="box-info">
								<h3> <?php echo $fEntrada['autor']; ?></h3>
								<small> <?php echo $fEntrada['cargo_autor']; ?> </small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 box-interes-right">
					<div class="box-header-interes text-center">
						También te puede interesar:
					</div>
					<div class="box-body-interes text-center">
						<?php foreach($arrListadoVideos as $key => $row): ?>
						<h2> <?php echo $row['titulo']; ?> </h2>
						<?php echo $row['embed']; ?>
						<!-- <a href="<?php //echo site_url('vidasalud/').$row['uri']; ?>" class="box-entrie col-lg-12">
							<h2> <?php //echo $row['titulo']; ?> </h2>
							<small> <?php //echo $row['fechaFormat']; ?> </small>
						</a> -->
						<?php endforeach; ?>
					</div>
					<!-- <div class="box-comentario">
						<div class="box-header-comentario">
							<img src="<?php echo base_url('assets/images/comentario-blog.png'); ?>" />
							<h3> Deja un comentario:</h3>
						</div>
						<div class="box-form-comentario">
							<div class="form-group">
								<textarea name="comentario" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<label> Nombre (*) </label>
								<input type="text" name="nombres" class="form-control" required /> 
							</div>
							<div class="form-group">
								<label> Email (no será publicado) (*) </label>
								<input type="mail" name="correo" class="form-control" required /> 
							</div>
							<div class="box-action">
								<button class="btn btn-primary" type="submit"> ENVIAR COMENTARIO </button>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<section class="section-interes container">
		<div class="box-title">
			<h2> También te puede interesar </h2>
		</div>
		<div class="box-content">
			<?php foreach($arrEntradasAle as $key => $row): ?>
			<div class="box-item col-lg-4 col-sm-4 col-xs-6 pre-item wow bounceInRight">
				<div class="item-blog">
					<img class="img-responsive" src=" <?php echo URL_PREVIEW; ?>assets/dinamic/blog/<?php echo $row['imagen_preview']; ?>" />
					<div class="box-hovered">
						<div class="box-action">
							<a class="btn" target="blank" href="<?php echo site_url('vidasalud/').$row['uri']; ?>"> LEER MÁS </a>
						</div>
					</div>
				</div>
				<a href="<?php echo site_url('vidasalud/').$row['uri']; ?>">
					<div class="item-blog-foot">
						<h4> <?php echo $row['titulo']; ?> </h4>
						<small> <?php echo $row['fechaFormat']; ?> </small>
						<p> <?php echo $row['resumen']; ?> </p>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
</div>
<script type="text/javascript">

  	$(document).ready(function() { 
    
	});
</script>