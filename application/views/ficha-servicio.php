<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-fichserv">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada">
			<h1> Servicios </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2"></div>
	</div>
	<section class="section-detalle">
		<div class="box-celeste">
			<h2> <?php echo $fServicio['nombre']; ?> </h2>	
		</div>
		<div class="box-imagen">
			<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/imagenes/<?php echo $fServicio['imagen_servicio']; ?>" />
		</div>
		<div class="box-description">
			<div class="box-letras col-lg-6 col-sm-12">
				<?php echo $fServicio['descripcion_html']; ?>
			</div>
			<div class="box-icono col-lg-6 col-sm-12 text-center">
				<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/iconos-lg/<?php echo $fServicio['icono_servicio_lg']; ?>" />
			</div>
		</div>
		<div class="box-como-acceder">
			<div class="box-letras col-lg-12">
				<h2> ¿Cómo acceder al servicio? </h2>
				<p> <?php echo $fServicio['como_acceder']; ?> </p>
			</div>
			<div class="box-video">
				<?php echo $fServicio['embed_video']; ?>
			</div>
		</div>
	</section>
	<section class="section-mas-servicios container">
		<div class="row">
			<h2 class="col-lg-12 text-center"> Más servicios para tí </h2>
			<div class="box-content-items col-lg-12 owl-carousel" id="prov-servicio">
				<?php foreach ($arrServicios as $key => $row): ?>
				<div class="box-item owl-item text-center">
					<a href="<?php echo site_url('servicio').'/'.$row['alias']; ?>">
						<div class="box-icono">
							<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/<?php echo $row['icono_servicio']; ?>" alt="" />
						</div>
						<p> <?php echo $row['nombre']; ?> </p>
					</a>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom"></div>
</div>
<script type="text/javascript">
  	$(document).ready(function() { 
    	// GALERIA servicio  
	    var owlEspec = $("#prov-servicio");
	    owlEspec.owlCarousel({
	      pagination : false,
	      navigation : true,
	      items: 4,
	      navigationText: [
	        "<i class='next fa fa-angle-left'></i>",
	        "<i class='prev fa fa-angle-right'></i>"
	      ]
	    });
	});
</script>