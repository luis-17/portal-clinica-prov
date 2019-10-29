<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-fichesp">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada wow bounceInRight delay-1s">
			<h1> <?php echo $fEspecialidad['nombre']; ?> </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-describe">
		<div class="row box-content-describe">
			<div class="col-md-6 col-sm-12">
				<div class="box-descripcion wow bounceInLeft">
					<?php echo $fEspecialidad['descripcion_html']; ?>
				</div>
			</div>
			<div class="box-image-esp col-md-6 col-sm-12 text-center wow bounceInRight">
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
			<div class="box-item wow fadeIn" data-wow-delay="500ms" data-wow-duration="1s">
				<a class="btn-verMas" href="javascript:void;">
					<div class="box-photo">
						<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/medico/<?php echo $row['foto']; ?>" alt="<?php echo $row['nombres']; ?>">
						<div class="box-hovered">
							<h4> <?php echo $row['nombres'].' '.$row['ap_paterno'].' '.$row['ap_materno']; ?> </h4>
						</div>
					</div>
					<h3 class="box-text"> <?php echo $row['nombres'].' '.$row['ap_paterno'].' '.$row['ap_materno']; ?> </h3>
				</a>
				<code class="json-hide"><?php echo $row['json']; ?></code>
			</div>
			<?php endforeach; ?>
			<?php else: ?>
				<p> No se encontraron médicos de la especialidad seleccionada. </p>
			<?php endif; ?>
		</div>
		<div class="box-action">
			<a target="_blank" href="<?php echo site_url('staff-medico'); ?>" class="btn btn-primary"> VER STAFF MÉDICO </a>
		</div>
	</section>
	<section class="section-servicios container">
		<div class="box-title">
			<h2> Mas servicios para ti </h2>
		</div>
		<div class="box-content row">
			<?php foreach ($arrServicios as $key => $row): ?>
			<div class="box-item col-md-3 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="500ms" data-wow-duration="1s">
				<a href="<?php echo site_url('servicio').'/'.$row['alias']; ?>">
					<img src="<?php echo URL_PREVIEW; ?>assets/dinamic/servicio/<?php echo $row['icono_servicio']; ?>" alt="" />
					<p> <?php echo $row['nombre']; ?> </p>
					<div class="box-hovered"></div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
</div>
<!-- 		PERFIL DE MEDICO 	-->
<div class="box-modal-perfil out">
	<div class="box-close close-icon">
		<div class="line line-x"></div>
		<div class="line line-y"></div>
	</div>
	<div class="box-perfil-medico">
		<div class="box-info-medico">
			<div class="box-present">
				<div class="box-present-nombre">
					<h2 class="inputjson nombre"> - </h2>
				</div>
				<div class="box-present-detail">
					<dl>
						<dt> Especialidad: </dt>
						<dd class="inputjson especialidad"> - </dd>
					</dl>
					<dl>
						<dt> CMP: </dt>
						<dd class="inputjson cmp"> - </dd>
					</dl>
					<dl>
						<dt> RNE: </dt>
						<dd class="inputjson rne"> - </dd>
					</dl>
				</div>
				<div class="box-present-lema">
					<q class="inputjson lema"> - </q>
				</div>
			</div>
			<div class="box-horario">
				<h3> Horarios: </h3> 
				<div class="inputjson horarios">
					No se muestra horarios en este momento. 
				</div>
			</div>
			<div class="box-estudios">
				<h3> Estudios: </h3>
				<p class="inputjson estudios">
					No se muestra estudios en este momento. 
				</p>
			</div>
		</div>
		<div class="box-foto-perfil">
			<img class="inputjson foto" src="" alt="" />
		</div>
	</div>
</div>
<!-- END PERFIL DE MEDICO -->
<script type="text/javascript">
	$(document).ready(function() { 
		/* INTERACCION PERFIL MEDICO */
    function onClickPerfilMedico() {
    	$('.btn-verMas, .box-modal-perfil .box-close').off();
    	$('.btn-verMas, .box-modal-perfil .box-close').on('click', function(event){
    		var thes = $(this);
    		console.log('click mee xd');
				var sectionPerfilMed = $('.box-modal-perfil');
				if(sectionPerfilMed.hasClass('out')){
					sectionPerfilMed.removeClass('out').addClass('in');
					$('.page-sm').addClass('op-25');
					$('#myHeaderTop').addClass('op-25');
					// BINDEAR INFO
					strPerfilJson = thes.next().text();
					// console.log(strPerfilJson, 'strPerfilJson');
					arrPerfilJson = JSON.parse(strPerfilJson);
					// console.log(arrPerfilJson, 'arrPerfilJson');
					$('.inputjson.nombre').html(arrPerfilJson.medico);
					$('.inputjson.especialidad').html(arrPerfilJson.especialidad);
					$('.inputjson.cmp').html(arrPerfilJson.cmp);
					$('.inputjson.rne').html(arrPerfilJson.rne);

					$('.inputjson.lema').html(arrPerfilJson.lema);
					if(!arrPerfilJson.lema){
						$('.inputjson.lema').hide();
					}else{
						$('.inputjson.lema').show();
					}
					/* horarios */
					if( arrPerfilJson.horarios.length > 0 ){
						$('.inputjson.horarios').empty();
						$.each(arrPerfilJson.horarios, function(key, val) {
							var objDl = $('<dl> <dt> <img src="assets/images/mini-stethoscope.png" /> '+val.dia+': </dt> <dd> '+val.hora_inicio+' - '+val.hora_fin+ ' </dd> </dl>');
							$('.inputjson.horarios').append(objDl);
						});
					}
					if(arrPerfilJson.estudios_html){
						$('.inputjson.estudios').html(arrPerfilJson.estudios_html);
					}else{
						$('.inputjson.estudios').text('No se muestra estudios en este momento.');
					}
					
					$('.inputjson.foto').attr("src", URLPreview+'assets/dinamic/medico/medico-perfil/'+arrPerfilJson.foto_perfil);
				}else{
					$('.inputjson.foto').attr("src", '');
					sectionPerfilMed.removeClass('in').addClass('out');
					$('.page-sm').removeClass('op-25');
					$('#myHeaderTop').removeClass('op-25');
				}
				event.preventDefault();
			});
    };
    $(document).mouseup(function(e) {
		    var sectionMenuLat = $('.box-modal-perfil');
		    if(!sectionMenuLat.is(e.target) && sectionMenuLat.has(e.target).length === 0){
		        sectionMenuLat.removeClass('in').addClass('out');
		        $('.page-sm').removeClass('op-25');
		        $('#myHeaderTop').removeClass('op-25');
		        $('.inputjson.foto').attr("src", '');
		    }
		});
		onClickPerfilMedico();
	});
</script>