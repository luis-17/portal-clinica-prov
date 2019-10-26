<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="page page-conocenos">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada wow bounceInDown delay-1s">
			<h1> Conócenos </h1>
			<img src="<?php echo base_url(); ?>assets/images/favicon.png" />
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-conocenos">
		<div class="box-content-bg">
			<div class="box-background" style="
			background-image: linear-gradient(to top, rgba(213, 222, 229, 1) 0%, rgba(255, 255, 255, 0) 25%, rgba(255, 255, 255, 0) 75%, rgba(213, 222, 229, 1) 100%), 
			url(<?php echo URL_PREVIEW; ?>assets/dinamic/conocenos/conocenos-ficha.png);">
			</div>
		</div>
		<div class="box-barra">
			<div class="box-barra-1"></div>
			<div class="box-barra-2">
				<div class="box-option box-option-mision selected" data-destino="mision">
					<div class="box-icon">
						<img class="no-alt" src="<?php echo URL_PREVIEW; ?>assets/dinamic/conocenos/iconos/mision.png" />
					</div>
				</div>
				<div class="box-option box-option-vision" data-destino="vision">
					<div class="box-icon">
						<img class="no-alt" src="<?php echo URL_PREVIEW; ?>assets/dinamic/conocenos/iconos/vision.png" />
					</div>
				</div>
				<div class="box-option box-option-valores" data-destino="valores">
					<div class="box-icon">
						<img class="no-alt" src="<?php echo URL_PREVIEW; ?>assets/dinamic/conocenos/iconos/valores.png" />
					</div>
				</div>
			</div>
		</div>
		<div class="box-info">
			<div class="box-options-detail">
				<div class="box-option box-option-mision">
					<div class="box-title">
						<h3>Misión</h3>
						<small> Lorem ipsum Lorem ipsum</small>
					</div>
					<div class="box-parrafo">
						<p>Brindar una atención de calidad a nuestros pacientes, transmitiendo calidez, confianza y seguridad.</p>
					</div>
				</div>
				<div class="box-option box-option-vision">
					<div class="box-title">
						<h3>Visión</h3>
						<small> Lorem ipsum Lorem ipsum</small>
					</div>
					<div class="box-parrafo">
						<p>Ser reconocida como LA CLÍNICA de referencia en Lima, por nuestro modelo de atención humanizado y de calidad.</p>
					</div>
				</div>
				<div class="box-option box-option-valores">
					<div class="box-title">
						<h3>Valores</h3>
						<small> Lorem ipsum Lorem ipsum </small>
					</div>
					<div class="box-parrafo">
						<ul>
							<li>Honestidad</li>
							<li>Compromiso y lealtad</li>
							<li>Responsabilidad</li>
							<li>Respeto</li>
							<li>Excelencia</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-bottom wow slideInDown slow"></div>
	</div>
</div>
<script type="text/javascript">
  	$(document).ready(function() {
  		var objSelected = $('.box-barra-2 .box-option.selected');
  		var destino = objSelected.attr('data-destino');
  		var classDestino = 'box-option-' + destino;
  		$('.box-options-detail .box-option.'+classDestino).fadeIn(2000);
  		$('.box-barra-2 .box-option').on('click', function() {
  			var thes = $(this);
  			$('.box-barra-2 .box-option').removeClass('selected');
  			thes.addClass('selected');
  			var destino = thes.attr('data-destino');
  			var classDestino = 'box-option-' + destino;

  			$('.box-options-detail .box-option').hide().removeClass('animated bounceInRight delay-500ms');
  			$('.box-options-detail .box-option.'+classDestino).fadeIn(2000).addClass('animated bounceInRight delay-500ms');

  			// correr los iconos
  			if (thes.hasClass('box-option-mision')) {
  				$('.box-barra-2 .box-option.box-option-vision').css({left: '36%', top: '66%'});
  				$('.box-barra-2 .box-option.box-option-valores').css({left: '-2%', top: '87%'});
  			}
  			if (thes.hasClass('box-option-vision')) {
  				$('.box-barra-2 .box-option.box-option-mision').css({left: '36%', top: '24%'});
  				$('.box-barra-2 .box-option.box-option-valores').css({left: '36%', top: '66%'});
  			}
  			if (thes.hasClass('box-option-valores')) {
  				$('.box-barra-2 .box-option.box-option-mision').css({left: '0', top: '2%'});
  				$('.box-barra-2 .box-option.box-option-vision').css({left: '36%', top: '24%'});
  			}
  			thes.css({left: '45%', top: '45%'});
  		});
  	});
</script> 	
