<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-esp">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada wow bounceInRight delay-1s">
			<h1> Especialidades </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"></div>
	</div>
	<section class="section-especialidades">
		<div class="box-filtros">
			<div class="box-title">
				<h3> Busca tu especialidad: </h3>
			</div>
			<div class="box-form">
				<div class="form-group box-especialidad">
					<input id="txt-especialidad-str" type="text" name="txt-especialidad-str" class="form-control" placeholder="Ingresa la especialidad a buscar">
					<button type="button" class="btn btn-primary btn-buscarEsp">BUSCAR</button>
				</div>
			</div>
		</div>
		<div class="box-content wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
			<div class="box-inner-content">
				<div class="box-arrow box-left-arrow col-xs-1 col-sm-1 col-lg-1">
					<button id="btn-leftSlider" class="btn btn-primary"> <i class="fa fa-angle-left"></i> </button>
				</div>
				<div id="swiper-especialidades" class="box-items col-xs-10 col-sm-10 col-lg-10">
					<div class="row swiper-wrapper">
						<?php foreach($arrEspecialidades as $key => $row): ?>
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center swiper-slide" style="min-height: 140px;">
								<a href="<?php echo site_url('especialidad').'/'.$row['uri']; ?>" class="">
									<div class="box-item">
										<div class="box-icon">
											<img class="img-responsive" alt="<?php echo $row['uri']; ?>" src="<?php echo URL_PREVIEW; ?>assets/dinamic/especialidad/iconos-home/<?php echo $row['icono_home']; ?>" />
										</div>
									</div>
									<div class="box-nombre" title="<?php echo $row['nombre']; ?>"> <?php echo $row['nombre']; ?> </div>
								</a>
								<input type="hidden" name="uri" class="hid-uri" value="<?php echo $row['uri']; ?>" />
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="box-arrow box-right-arrow col-xs-1 col-sm-1 col-lg-1">
					<button id="btn-rightSlider" class="btn btn-primary"> <i class="fa fa-angle-right"></i> </button>
				</div>
			</div>
			<!-- <div class="box-paginate vineta">
				<div class="box-item-paginate"></div>
				<div class="box-item-paginate"></div>
				<div class="box-item-paginate"></div>
				<div class="box-item-paginate"></div>
				<div class="box-item-paginate"></div>
			</div> -->
		</div>
		<div class="box-footer-actions wow bounceInRight">
			<a href="<?php echo site_url('staff-medico'); ?>" class="btn btn-primary btn-lg"> Ver Staff Médico </a>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
</div>
<style type="text/css">
	.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{
		width: 60px;
	    border-radius: 4px;
	    background-color: #00488d;
	    height: 6px;
	}
</style>
<script type="text/javascript">

  $(document).ready(function() { 
    // ESPECIALIDADES
    var swiperEspec = new Swiper('#swiper-especialidades', {
      slidesPerView: 4,
      slidesPerColumn: 3,
      spaceBetween: 0,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
     //  nextButton: '#btn-rightSlider',
    	// prevButton: '#btn-leftSlider',
    });

    $('#btn-leftSlider').on('click', function(e) {
    	e.preventDefault();
    	swiperEspec.slidePrev();
    });
    $('#btn-rightSlider').on('click', function(e) {
    	e.preventDefault();
    	swiperEspec.slideNext();
    });
    $('#txt-especialidad-str').off();
    $('#txt-especialidad-str').on('keyup, keydown', function(e) {
    	var thes = $(this);
    	// console.log(thes.val(), 'thes.val()');
    	// if( !(thes.val()) ){
    	// 	return false;
    	// }
    	var strCadena = ($(this).val()).toLowerCase();
    	var $objItems = $('#swiper-especialidades .swiper-slide .hid-uri');
    	$objItems.each(function(key, row) {
    		// console.log(key, val, 'key, valkey, val');
    		var inputUri = $(row).val();
    		if( inputUri.search(strCadena) === -1 ){
    			$(row).parent().hide();
    		}else{
    			$(row).parent().show();
    		}
    	});
    	console.log(thes.val(), 'thes.val()');
    	if( !(thes.val()) ){
    		$('#swiper-especialidades .swiper-slide').show();
    	}
    	e.stopPropagation();
    });
	});
</script>