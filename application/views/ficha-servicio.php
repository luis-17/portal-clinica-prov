<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-fichserv">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada" style="background-image: url(<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/imagenes/<?php echo $fServicio['imagen_portada']; ?>);"></div>
		</div>
		<div class="texto-portada wow bounceInDown delay-1s">
			<h1> <?php echo $fServicio['nombre']; ?> 
				<img src="<?php echo base_url(); ?>assets/images/favicon.png" />
			</h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-detalle">
		<div class="box-description">
			<div class="box-icono col-lg-4 col-md-3 col-sm-12 text-center">
				<div class="box-icono-content wow bounceInLeft">
					<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/<?php echo $fServicio['icono_servicio']; ?>" />
				</div>
				<div class="line-dashed wow bounceInUp delay-1s"></div>
			</div>
			<div class="box-letras col-lg-8 col-md-9 col-sm-12 wow bounceInRight delay-1s">
				<?php echo $fServicio['descripcion_html']; ?>
			</div>
		</div>
		<div class="box-como-acceder">
			<div class="box-letras col-lg-12 wow bounceInLeft">
				<h2> ¿Cómo acceder al servicio? </h2>
				<p> <?php echo $fServicio['como_acceder']; ?> </p>
			</div>
			<div class="box-video wow bounceInRight">
				<?php echo $fServicio['embed_video']; ?>
			</div>
		</div>
	</section>
	<section class="section-mas-servicios container">
		<div class="row">
			<h2 class="text-center wow bounceInDown"> Más servicios para tí </h2>
			<div class="box-content-items owl-carousel" id="prov-servicio">
				<?php foreach ($arrServicios as $key => $row): ?>
				<div class="box-item owl-item text-center wow bounceInRight delay-500ms">
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
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
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
	      ],
	      itemsDesktopSmall: [992,3],
	      itemsTablet: [768,3],
	      itemsMobile: [380,2]
	    });
	});
  	var heightLetras = $('.box-letras').height();
  	var widthLetras = $('.box-letras').width();
  	$('.line-dashed').height(heightLetras + 100).width(widthLetras + 180);


	// Y axis scroll speed
	// var velocity = 0.5;

	// function update(){ 
	//     var pos = $(window).scrollTop(); 
	//     $('.bg-portada').each(function() { 
	//         var $element = $(this);
	//         // subtract some from the height b/c of the padding

	//         var height = 2;
	//         console.log(height, pos, velocity, 'height, pos, velocity');
	//         $(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) + 'px'); 
	//     }); 
	// };

	// $(window).bind('scroll', update);
</script>