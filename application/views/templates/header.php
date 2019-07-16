<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
	$arrServicios = $this->model_servicio->cargar_servicios(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> Estudio Contable DC & JV </title> 
	<link href="<?php echo base_url('libs/bootstrap-3.3.7/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('libs/bootstrap-3.3.7/css/bootstrap-social.css'); ?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('libs/owl-carousel/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('libs/owl-carousel/owl.theme.css'); ?>">

	<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
	<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script> 
	<script type="text/javascript" src="<?php echo base_url('libs/jquery-3.2.0.min.js'); ?>"></script>
</head>
<body> 
<div class="site-wrapper">
  <header class="box-header"> 
  	<div class="box-content-header-secondary">
  		<div class="container">
				<div class="box-header-secondary">
	    		<div class="box-header-lema">
	    			"Contadores confiables para tu crecimiento" 
	    		</div>
	    		<div class="box-header-info">
	    			<div class="box-item box-telefono">
	    				<div class="box-icon"> <i class="fa fa-phone"></i> </div> 
	    				<div class="box-value"> (01) 945 142 588 </div>
	    			</div>
	    			<div class="box-item box-direccion">
	    				<div class="box-icon"> <i class="fa fa-map-marker"></i> </div> 
	    				<div class="box-value"> Av. Gran Chimú 1421 Urb. Zárate </div>
	    			</div>
	    			<div class="box-item box-rs">
	    				<a href="https://www.facebook.com/profile.php?id=100012277215574" target="_blank"> 
		    				<div class="box-icon"> <i class="fab fa-facebook"></i> </div> 
	    				</a> 
	    			</div>
	    		</div>
	  		</div>
	  	</div>
  	</div>
	<div class="box-content-header-secondary">
		<div class="container">
		  	<div class="box-header-primary">
	    		<div class="box-logo">
	    			<a href="<?php echo site_url(); ?>"> <img src="<?php echo base_url('assets/images/logo.png'); ?>" /> </a>
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
		      					<a href="<?php echo site_url('inicio'); ?>"> Inicio </a>
		      				</li>
		      				<li class="box-item <?php echo $active['nosotros']; ?>">
		      					<a href="#"> Nosotros <img src="<?php echo base_url('assets/icons/arrow-down-32.png'); ?>"/> </a>
		      					<ul class="box-list-submenu">
		      						<li class="box-subitem">
		      							<a href="<?php echo site_url('quienes-somos'); ?>"> Quienes Somos </a>
		      						</li>
		      						<li class="box-subitem">
		      							<a href="<?php echo site_url('mision'); ?>"> Misión </a>
		      						</li>
		      						<li class="box-subitem">
		      							<a href="<?php echo site_url('vision'); ?>"> Visión </a>
		      						</li>
		      					</ul> 
		      				</li>
		      				<li class="box-item <?php echo $active['servicios']; ?>">
		      					<a href="#"> Servicios <img src="<?php echo base_url('assets/icons/arrow-down-32.png'); ?>"/> </a>
		      					<ul class="box-list-submenu"> 
		      						<?php foreach($arrServicios as $key => $row) { ?> 
		      						<li class="box-subitem"> 
		      							<a href="<?php echo site_url('servicio/'.$row['alias']); ?>"> <?php echo $row['nombre']; ?> </a>
		      						</li>
		      						<?php } ?> 
		      					</ul>
		      				</li>
		      				<li class="box-item <?php echo $active['clientes']; ?>">
		      					<a href="<?php echo site_url('clientes'); ?>"> Clientes </a> 
		      				</li>
		      				<li class="box-item <?php echo $active['contacto']; ?>">
		      					<a href="<?php echo site_url('contactanos'); ?>"> Contáctanos </a>
		      				</li>
		      			</ul>
	    			</nav>
	    		</div>
		  	</div>
	  	</div>
	 </div>
</header> 