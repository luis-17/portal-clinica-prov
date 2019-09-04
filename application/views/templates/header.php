<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
	$arrServicios = $this->model_servicio->cargar_servicios_menu(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> Clínica Providencia </title> 
	<link href="<?php echo base_url('libs/bootstrap-3.3.7/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('libs/bootstrap-3.3.7/css/bootstrap-social.css'); ?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('libs/owl-carousel/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('libs/owl-carousel/owl.theme.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('libs/swiper/css/swiper.min.css'); ?>">

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
	    			<div class="box-item box-mail">
	    				<div class="box-icon"> <i class="fa fa-envelope"></i> </div>
	    				<div class="box-value"> <a href="mailto:contacto@clinicaprovidencia.pe">contacto@clinicaprovidencia.pe </a></div>
	    			</div>
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
	    			<button type="button" class="btn secondary btn-reserva">RESERVA TU CITA</button>
	    			<button type="button" class="btn btn-menu-lateral"> <i class="fas fa-bars"></i> </button>
	    		</div>
	  		</div>
	  	</div>
  	</div>
  	<div class="box-menu-lateral out">
		<div class="content-header">
			<div class="logo">
				<img src="<?php echo base_url('assets/dinamic/logo_white.png'); ?>" alt="Clinica Providencia" />
			</div>
			<div class="close-icon">
				<div class="line line-x"></div>
				<div class="line line-y"></div>
			</div>
		</div>
		<ul class="content-list">
			<li>Conócenos</li>
			<li>Convenios</li>
			<li>Resultados de Laboratorio</li>
			<li>Trabaja con Nosotros</li>
			<li>Novedades y Eventos</li>
			<li>Testimonios</li>
		</ul>
	</div>
	<div class="box-content-header-primary">
		<div class="container-full">
		  	<div class="box-header-primary" id="box-header-primary">
	    		<div class="box-logo">
	    			<a href="<?php echo site_url(); ?>"> <img src="<?php echo base_url('assets/dinamic/logo.png'); ?>" /> </a>
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
		      				<!-- <li class="box-item <?php echo $active['conocenos']; ?>">
		      					<a href="<?php echo site_url('conocenos'); ?>"> CONÓCENOS </a> 
		      				</li> -->
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
		      				<li class="box-item <?php echo $active['noticias']; ?>">
		      					<a href="<?php echo site_url('noticias'); ?>"> VIDASALUD - BLOG </a> 
		      				</li>
		      				<li class="box-item <?php echo $active['contactanos']; ?>">
		      					<a href="<?php echo site_url('contactanos'); ?>"> CONTÁCTANOS </a>
		      				</li>
		      			</ul>
	    			</nav>
	    		</div>
		  	</div>
	  	</div>
	 </div>
</header> 