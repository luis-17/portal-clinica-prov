<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-convenio">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada">
				<div class="box-persona-image">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/portada-persona-convenio.png" />
				</div>
			</div>
		</div>
		<div class="texto-portada wow bounceInLeft delay-1s">
			<h1> 
				<img src="<?php echo base_url(); ?>assets/images/favicon.png" />
				<span> Nuestros Convenios </span>
				<small>La confianza brindada la plasmamos en nuestra atención de calidad</small>
			</h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-list">
		<div class="box-title">
			<h2 class="text-center"> <img src="<?php echo base_url(); ?>assets/images/favicon.png" /> Clientes a los cuales hoy llamamos amigos: </h2>
		</div>
		<div class="box-listado wow zoomIn">
			<div class="box-layer"></div>
			<div class="box-content-listado">
				<ul>
					<?php foreach($arrConvenios as $key => $row): ?>
					<li> <?php echo $row['descripcion']; ?> </li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
	<section class="section-seguro">
	    <div class="container">
	      <div class="box-header">
	        <h2> Seguros y Autoseguros </h2>
	        <p> Para su tranquilidad trabajamos con las siguientes compañias de seguros </p>
	      </div>
	      <div class="box-content">
	        <div id="prov-seguro" class="owl-carousel"> 
	          <?php foreach($arrSeguros as $key => $row): ?> 
	            <div class="box-seguro owl-item wow zoomIn">
	              <div class="box-img">
	                <img alt="<?php echo $row['nombre']; ?>" src="<?php echo URL_PREVIEW; ?>assets/dinamic/seguro/<?php echo $row['logo']; ?>" />
	              </div>
	            </div>
	          <?php endforeach; ?>
	        </div>
	      </div>
	    </div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
</div>
<script type="text/javascript">
$(document).ready(function() { 
    $('[data-fancybox="promociones"]').fancybox({
		
	});
	var owlSeg = $("#prov-seguro");
    owlSeg.owlCarousel({
      pagination : true,
      navigation : false,
      items: 4,
      // autoPlay: true,
      itemsDesktopSmall: [992,3],
      itemsTablet: [768,3],
      itemsMobile: [380,2]
    });
});
</script>