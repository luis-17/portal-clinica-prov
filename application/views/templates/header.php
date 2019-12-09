<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
	$arrServicios = $this->model_servicio->m_cargar_servicios_menu(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Clínica Providencia </title>
	<!--favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>">
    <!--fin favicon-->
	<link href="<?php echo base_url('libs/bootstrap-3.3.7/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('libs/bootstrap-3.3.7/css/bootstrap-social.css'); ?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('libs/owl-carousel/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('libs/owl-carousel/owl.theme.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('libs/swiper/css/swiper.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('libs/fancybox/jquery.fancybox.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate/animate.css'); ?>">

	<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet"> 
	<link href="<?php echo base_url('assets/css/custom-responsive.css'); ?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script> 
	<script type="text/javascript" src="<?php echo base_url('libs/jquery-3.2.0.min.js'); ?>"></script>
</head>
<body> 
<div class="site-wrapper">
  <header id="myHeaderTop" class="box-header"> 
  	<div class="box-content-header-secondary">
  		<div class="container-full">
			<div class="box-header-secondary">
	    		<div class="box-header-info">
	    			<div class="box-item box-telefono">
	    				<div class="box-icon"> <i class="fa fa-phone"></i> </div> 
	    				<div class="box-value"> (511) 660 6000 </div>
	    			</div>
	    			<!-- <div class="box-item box-mail">
	    				<div class="box-icon"> <i class="fa fa-envelope"></i> </div>
	    				<div class="box-value"> <a href="mailto:contacto@clinicaprovidencia.pe">contacto@clinicaprovidencia.pe </a></div>
	    			</div> -->
	    		</div>
	    		<div class="box-header-redes">
	    			<div class="box-item ">
	    				<a class="btn btn-fb" href="https://www.facebook.com/CLINICAPROVIDENCIAOFICIAL" target="_blank"> 
		    				<i class="fab fa-facebook-f"></i>
	    				</a> 
	    			</div>
	    			<div class="box-item">
	    				<a class="btn btn-yt" href="https://www.youtube.com/channel/UCJ1zj71qdkwnYKkXr6C6nmQ" target="_blank"> 
		    				<i class="fab fa-youtube"></i>
	    				</a> 
	    			</div>
	    			<div class="box-item">
	    				<a class="btn btn-ig" href="https://www.instagram.com/clinicaprovidenciaperu/" target="_blank"> 
		    				<i class="fab fa-instagram"></i>
	    				</a> 
	    			</div>
	    		</div>
	    		<div class="box-header-buttons">
	    			<a target="_blank" href="http://citasenlinea.clinicaprovidencia.pe" class="btn secondary btn-reserva">RESERVA TU CITA</a>
	    			<button type="button" class="btn btn-menu-lateral"> <i class="fas fa-bars"></i> </button>
	    		</div>
	  		</div>
	  	</div>
  	</div>
  	<div class="box-menu-lateral out">
		<div class="content-header">
			<div class="logo">
				<img class="" src="<?php echo URL_PREVIEW; ?>assets/dinamic/logo_white.png" alt="Clinica Providencia" />
			</div>
			<div class="close-icon">
				<div class="line line-x"></div>
				<div class="line line-y"></div>
			</div>
		</div>
		<nav class="content-nav">
			<ul class="content-list">
				<li class="hidden-desktop">
					<a href="<?php echo site_url('especialidades'); ?>"> Especialidades </a>
				</li>
				<li class="hidden-desktop">
					<a href="<?php echo site_url('staff-medico'); ?>"> Staff Médico </a>
				</li>
				<li class="hidden-desktop option-toggle">
					<a href="javascript:void;"> Servicios <i class="fa fa-angle-right"></i> </a>
					<ul class="box-content-subitems">
						<?php foreach($arrServicios as $key => $row): ?> 
  						<li class="box-subitem"> 
  							<a href="<?php echo site_url('servicio/'.$row['alias']); ?>"> <?php echo $row['nombre']; ?> </a>
  						</li>
  						<?php endforeach; ?> 
					</ul>
				</li>
				<li class="hidden-desktop">
					<a href="<?php echo site_url('vidasalud'); ?>"> VidaSalud - Blog </a>
				</li>
				<li class="hidden-desktop">
					<a href="<?php echo site_url('contactanos'); ?>"> Contáctanos </a>
				</li>
				<li>
					<a href="<?php echo site_url('conocenos'); ?>"> Conócenos </a>
				</li>
				<li>
					<a href="<?php echo site_url('alianzas-y-convenios'); ?>"> Convenios </a>
				</li>
				<li>
					<a href="<?php echo site_url('productos-especiales'); ?>"> Productos Especiales </a>
				</li>
				<li>
					<a href="<?php echo site_url('nuestras-promociones'); ?>"> Nuestras Promociones </a>
				</li>
				<li>
					<a href="https://www.multilab.com.pe/resultados" target="_blank">Resultados de Laboratorio </a>
				</li>
				<li>Pasos para reservar una cita</li>
				<li>
					<a href="https://www.computrabajo.com.pe/empresas/ofertas-de-trabajo-de-clinica-providencia-BEA07CFF8134E31A" target="_blank">Trabaja con Nosotros</a>
				</li>
				<li class="box-end"></li>
			</ul>
		</nav>
	</div>
	<div class="box-content-header-primary">
		<div class="container-full">
		  	<div class="box-header-primary" id="box-header-primary">
	    		<div class="box-logo">
	    			<a href="<?php echo site_url(); ?>"> <img data-wow-duration="3s" class="wow flipInX" src="<?php echo URL_PREVIEW; ?>assets/dinamic/logo.png" /> </a>
	    		</div>
	    		<div class="box-menu">
	    			<nav class="box-nav-menu collapse navbar-collapse">
	    				<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
		      			<ul class="box-list-menu">
		      				<li class="box-item <?php echo $active['inicio']; ?>">
		      					<a href="<?php echo site_url('inicio'); ?>" title="Inicio"> <i class="fa fa-home"></i> </a>
		      				</li>
		      				<li class="box-item <?php echo $active['especialidades']; ?>">
		      					<a href="<?php echo site_url('especialidades'); ?>"> ESPECIALIDADES </a> 
		      				</li>
		      				<li class="box-item <?php echo $active['staff_medico']; ?>">
		      					<a href="<?php echo site_url('staff-medico'); ?>"> STAFF MÉDICO </a> 
		      				</li>
		      				<li class="box-item <?php echo $active['servicios']; ?>">
		      					<a href="#"> SERVICIOS <img src="<?php echo base_url('assets/icons/arrow-down-32.png'); ?>"/> </a>
		      					<ul class="box-list-submenu"> 
		      						<?php foreach($arrServicios as $key => $row) { ?> 
		      						<li class="box-subitem"> 
		      							<a href="<?php echo site_url('servicio/'.$row['alias']); ?>"> <?php echo $row['nombre']; ?> </a>
		      						</li>
		      						<?php } ?> 
		      					</ul>
		      				</li>
		      				<li class="box-item <?php echo $active['vidasalud']; ?>">
		      					<a href="<?php echo site_url('vidasalud'); ?>"> VIDASALUD - BLOG </a> 
		      				</li>
		      				<li class="box-item <?php echo $active['contactanos']; ?>">
		      					<a href="<?php echo site_url('contactanos'); ?>"> CONTÁCTANOS </a>
		      				</li>
		      			</ul>
	    			</nav>
	    		</div>
	    		<div class="box-menu-resp">
	    			<div class="box-telefono">
	    				<div class="box-icon"> <i class="fa fa-phone"></i> </div> 
	    				<div class="box-value"> (511) 660 6000 </div>
	    			</div>
	    			<div class="box-header-buttons">
	    				<a href="<?php echo site_url('inicio'); ?>" class="btn btn-primary btn-home" title="Ir al Home"> <i class="fa fa-home"></i> </a>
		    			<a target="_blank" href="http://citasenlinea.clinicaprovidencia.pe" class="btn btn-primary btn-reserva">RESERVA TU CITA</a>
		    			<button type="button" class="btn btn-menu-lateral"> <i class="fas fa-bars"></i> </button>
		    		</div>
	    		</div>
		  	</div>
	  	</div>
	 </div>
</header> 