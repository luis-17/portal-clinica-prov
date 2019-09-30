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
				<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/especialidad/<?php echo $fEspecialidad['image_banner']; ?>" alt="<?php echo $fEspecialidad['nombre']; ?>" />
			</div>
		</div>
	</section>
	<section class="section-staff">
		<div class="box-title">
			<strong class="vineta"></strong> STAFF MÉDICO 
		</div>
		<div class="box-body">
			<?php if(!empty($arrMedicos)): ?>
			<?php foreach ($arrMedicos as $key => $row): ?>
			<div class="box-item">
				<div class="box-photo">
					<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/medico/<?php echo $row['foto']; ?>" alt="<?php echo $row['nombres']; ?>">
				</div>
				<h3 class="box-text"> <?php echo $row['nombres'].' '.$row['ap_paterno'].' '.$row['ap_materno']; ?> </h3>
			</div>
			<?php endforeach; ?>
			<?php else: ?>
				<p> No se encontraron médicos de la especialidad seleccionada. </p>
			<?php endif; ?>
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
			<?php foreach ($arrServicios as $key => $row): ?>
			<div class="box-item col-md-3">
				<a href="#">
					<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/<?php echo $row['image_servicio']; ?>" alt="" />
					<p> <?php echo $row['nombre']; ?> </p>
				</a>
			</div>
			<?php endforeach; ?>
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