<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-fichesp">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada">
			<h1> <?php echo $fEspecialidad['nombre']; ?> </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2"></div>
	</div>
	<section class="section-describe">
		<div class="row box-content-describe">
			<div class="col-md-6 col-sm-12">
				<div class="box-descripcion">
					<?php echo $fEspecialidad['descripcion_html']; ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 text-center">
				<img src="<?php echo base_url().'assets/dinamic/especialidad/'.$fEspecialidad['image_banner']; ?>"  alt="<?php echo $fEspecialidad['nombre']; ?>" />
			</div>
		</div>
	</section>
	<section class="section-staff">
		<div class="box-title">
			<strong class="vineta"></strong> STAFF MÉDICO 
		</div>
		<div class="box-body">
			<div class="box-item">
				<div class="box-photo">
					<img src="<?php echo base_url().'assets/dinamic/medico/medico-1.jpg'; ?>" alt="Juan Perez">
				</div>
				<h3 class="box-text"> Beatriz Lucero Mendoza Ortega </h3>
			</div>
			<div class="box-item">
				<div class="box-photo">
					<img src="<?php echo base_url().'assets/dinamic/medico/medico-1.jpg'; ?>" alt="Juan Perez">
				</div>
				<h3 class="box-text"> Beatriz Lucero Mendoza Ortega </h3>
			</div>
			<div class="box-item">
				<div class="box-photo">
					<img src="<?php echo base_url().'assets/dinamic/medico/medico-1.jpg'; ?>" alt="Juan Perez">
				</div>
				<h3 class="box-text"> Beatriz Lucero Mendoza Ortega </h3>
			</div>
		</div>
		<div class="box-action">
			<button type="button" class="btn btn-primary"> RESERVA TU CITA </button>
		</div>
	</section>
	<section class="section-servicios container">
		<div class="box-title">
			<h2> Mas servicios para ti </h2>
		</div>
		<div class="box-content row">
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-1.png'; ?>" alt="" />
					<p> Ambulancia </p>
				</a>
				
			</div>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-2.png'; ?>" alt="" />
					<p> Emergencia 24 horas </p>
				</a>
			</div>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-3.png'; ?>" alt="" />
					<p> Hospitalización </p>
				</a>
			</div>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-4.png'; ?>" alt="" />
					<p> Centro Quirúrgico </p>
				</a>
			</div>
			<div class="box-item col-md-3">
				<a href="">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-5.png'; ?>" alt="" />
					<p> Farmacia </p>	
				</a>
			</div>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-6.png'; ?>" alt="" />
					<p> Laboratorio </p>
				</a>
			</div>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-7.png'; ?>" alt="" />
					<p> Departamento de Imágenes </p> 
				</a>
			</div>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo base_url().'assets/dinamic/servicio/serv-8.png'; ?>" alt="" />
					<p> Unidad de Cuidados Intensivos </p> 
				</a>
			</div>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom"></div>
</div>
<script type="text/javascript">

  	$(document).ready(function() { 
    
	});
</script>