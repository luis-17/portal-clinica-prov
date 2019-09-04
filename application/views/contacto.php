<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-contacto">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada">
			<h1> Contáctanos </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2"></div>
	</div>
	<div class="row box-notificacion">
		<?php if( $this->session->flashdata('bool_info') == 'ok' ){ ?>
			<div class="col-lg-12">
				<div class="alert alert-success">
					Gracias por contactar con nosotros. En unos momentos nos comunicaremos con Ud. 
				</div>
			</div>
		<?php } ?>
		<?php if( $this->session->flashdata('bool_info') == 'error' ){ ?>
			<div class="col-lg-12">
				<div class="alert alert-danger">
					Ocurrió un error, inténtelo nuevamente. 
				</div>
			</div>
		<?php } ?> 
	</div>
	<section class="section-contacto">
		<div class="row">
			<div class="box-content-img col-sm-4">
				<img src="<?php echo base_url().'assets/images/chica-contacto.png'; ?>" alt="Contacto" />
			</div>
			<div class="box-form col-sm-8">
				<form class="form" method="post" name="form_contacto">
					<div class="box-header">
						<h3> Para cualquier duda o consulta: </h3>
						<small> Si quieres contactarte con nosotros, llena el siguiente formulario </small>
					</div>
					<div class="box-form-detail">
						<div class="form-group">
							<label> Nombres y Apellidos(*) </label>
							<input type="text" name="nombres" class="form-control" placeholder="Nombres" required /> 
						</div>
						<div class="form-group">
							<label> Empresa </label>
							<input type="text" name="empresa" class="form-control" placeholder="Empresa" /> 
						</div>
						<div class="form-group">
							<label> Teléfono(*) </label>
							<input type="text" name="telefono" class="form-control" placeholder="Telefono" maxlength="9" required /> 
						</div>
						<div class="form-group">
							<label> Correo(*) </label>
							<input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" required /> 
						</div>
						<div class="form-group">
							<label> Consulta(*) </label>
							<textarea name="consulta" class="form-control" required></textarea> 
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input" id="politPrivacidad" required>
						    <label style="margin-left: 5px;" class="form-check-label" for="politPrivacidad">Si, he leído y acepto de manera expresa la 
						    	<a href="/politica-privacidad.pdf"> Política de Privacidad (*) </a> 
						    </label>
						</div>
					</div>
					<div class="box-action">
						<button class="btn btn-primary" type="submit"> ENVIAR </button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- <div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2"></div>
	</div> -->
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom"></div>
</div>
<script type="text/javascript"> 
	// Initialize and add the map  , AIzaSyAZooz66oNyefiGdO7JueDtqUGQBBUIUHY AIzaSyAZooz66oNyefiGdO7JueDtqUGQBBUIUHY

	// function initMap() {
	//   var posdcjv = {lat: -12.023995, lng: -76.988537};
	//   var map = new google.maps.Map(
	//       document.getElementById('map-dcjv'), {zoom: 12, center: posdcjv});
	//   var marker = new google.maps.Marker({position: posdcjv, map: map});
	// }
</script>

<!-- <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZooz66oNyefiGdO7JueDtqUGQBBUIUHY&callback=initMap"> 
</script> -->