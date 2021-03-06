<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-sm">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada wow bounceInRight delay-1s">
			<h1> Staff Médico </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  <div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-medicos">
		<div class="container">
			<div class="box-title">
				<h3> Para conocer nuestro staff médico, seleccione una de nuestras especialidades </h3>
			</div>
			<div class="box-filtros">
				<div class="box-form">
					<div class="form-group box-especialidad">
						<select name="especialidad" class="form-control cbo-especialidad">
							<option value="ALL">Todas las especialidades</option>
							<?php foreach ($arrEspecialidades as $key => $row): ?>
							<option value="<?php echo $row['idespecialidad']; ?>"><?php echo $row['nombre']; ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group box-medico">
						<input type="text" name="txt-medico-str" class="form-control txt-medico-str" placeholder="Digite nombre del médico">
					</div>
					<button type="button" class="btn btn-buscarMedico">BUSCAR MÉDICO</button>
				</div>
				<div class="box-abc">
					<div class="box-item-abc">
						<input type="hidden" value="ALL" name="hid-medico-abc" class="hid-medico-abc selected">
						<button class="btn btn-letter selected" type="button"> TODOS LOS MÉDICOS </button>
					</div>
					<?php foreach ($arrAbc as $key => $row): ?>
						<div class="box-item-abc">
							<input type="hidden" value="<?php echo $row; ?>" name="hid-medico-abc" class="hid-medico-abc">
							<button class="btn btn-letter" type="button">
								<?php echo $row; ?>
							</button>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="box-result cont-staff-medico row">
			</div>
			<div class="box-paginate">
				<div class="box-content">
					<div class="box-lateral-left">
						<span> Mostrar: </span>
						<select class="form-control cbo-pageSize" name="pagina">
							<option value="12">12</option>
							<option value="24">24</option>
							<option value="48">48</option>
						</select>
					</div>
					<div class="box-lateral-right">
						<div> Página: </div>
						<select class="form-control cbo-pageNumber" name="pagina">
							<!-- <option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option> -->
						</select>
						<div class="propos"> de <span class="txt-limit"></span> </div>
						<button type="button" class="btn btn-direction btn-prev"> <i class="fa fa-angle-left"></i> </button>
						<button type="button" class="btn btn-direction btn-next"> <i class="fa fa-angle-right"></i> </button>
					</div>
				</div>
			</div>
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
						<dt class="inputjson tc"> Colegiatura: </dt>
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
			<div class="box-action">
				<a target="_blank" href="http://citasenlinea.clinicaprovidencia.pe" class="btn btn-primary btn-agendar-cita"> AGENDAR CITA </a>
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
	$('.btn-letter').on('click', function() {
		$('.btn-letter').removeClass('selected');
		$(this).addClass('selected');
		$('.hid-medico-abc').removeClass('selected');
		$(this).prev().addClass('selected');
		var arrParams = {
			paginate: {
				firstRow: ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val(),
				pageNumber: $('.cbo-pageNumber').val(),
				pageSize: $('.cbo-pageSize').val(),
				sort: "ASC",
				sortName: "md.nombres"
			},
			datos: {
				medicoAbc: $('.hid-medico-abc.selected').val(),
				medicoStr: $('.txt-medico-str').val(),
				idespecialidad: $('.cbo-especialidad').val()
			}
		};
		listarStaffMedico(arrParams);
	});
	$('.btn-buscarMedico').on('click', function() {
		// var paramsFirstRow = ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val();
		console.log('click me xdddf');
		var cboPageNumber = $('.cbo-pageNumber').val() || 1;
		var arrParams = {
			paginate: {
				firstRow: (cboPageNumber - 1) * $('.cbo-pageSize').val(),
				pageNumber: cboPageNumber,
				pageSize: $('.cbo-pageSize').val(),
				sort: "ASC",
				sortName: "md.nombres"
			},
			datos: {
				medicoAbc: $('.hid-medico-abc.selected').val(),
				medicoStr: $('.txt-medico-str').val(),
				idespecialidad: $('.cbo-especialidad').val()
			}
		};
		listarStaffMedico(arrParams);
	});
	$('.cbo-especialidad').on('change', function() {
		var arrParams = {
			paginate: {
				firstRow: ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val(),
				pageNumber: $('.cbo-pageNumber').val(),
				pageSize: $('.cbo-pageSize').val(),
				sort: "ASC",
				sortName: "md.nombres"
			},
			datos: {
				medicoAbc: $('.hid-medico-abc.selected').val(),
				medicoStr: $('.txt-medico-str').val(),
				idespecialidad: $('.cbo-especialidad').val()
			}
		};
		listarStaffMedico(arrParams);
	});
	$('.cbo-pageNumber').on('change', function() {
		var arrParams = {
			paginate: {
				firstRow: ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val(),
				pageNumber: $('.cbo-pageNumber').val(),
				pageSize: $('.cbo-pageSize').val(),
				sort: "ASC",
				sortName: "md.nombres"
			},
			datos: {
				medicoAbc: $('.hid-medico-abc.selected').val(),
				medicoStr: $('.txt-medico-str').val(),
				idespecialidad: $('.cbo-especialidad').val()
			}
		};
		listarStaffMedico(arrParams);
	});
	$('.cbo-pageSize').on('change', function() {
		var arrParams = {
			paginate: {
				firstRow: ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val(),
				pageNumber: $('.cbo-pageNumber').val(),
				pageSize: $('.cbo-pageSize').val(),
				sort: "ASC",
				sortName: "md.nombres"
			},
			datos: {
				medicoAbc: $('.hid-medico-abc.selected').val(),
				medicoStr: $('.txt-medico-str').val(),
				idespecialidad: $('.cbo-especialidad').val()
			}
		};
		listarStaffMedico(arrParams);
	});
	$('.btn-direction').on('click', function() {
		var $btnDirection = $(this);
		if($btnDirection.hasClass('btn-next')){
			var valPageNumber = parseInt($('.cbo-pageNumber').val());
			valPageNumber += 1;
			// $('.cbo-pageNumber').val(valPageNumber);
		}
		if($btnDirection.hasClass('btn-prev')){
			var valPageNumber = parseInt($('.cbo-pageNumber').val());
			if( valPageNumber > 1 ){
				valPageNumber -= 1;
				// $('.cbo-pageNumber').val(valPageNumber);
			}
		}
		var paramsFirstRow = (valPageNumber- 1) * $('.cbo-pageSize').val();
		if (paramsFirstRow < 0) {
			paramsFirstRow = 0;
		}
		var arrParams = {
			paginate: {
				firstRow: paramsFirstRow,
				pageNumber: valPageNumber,
				pageSize: $('.cbo-pageSize').val(),
				sort: "ASC",
				sortName: "md.nombres"
			},
			datos: {
				medicoAbc: $('.hid-medico-abc.selected').val(),
				medicoStr: $('.txt-medico-str').val(),
				idespecialidad: $('.cbo-especialidad').val()
			}
		};
		listarStaffMedico(arrParams);
	});
    function listarStaffMedico(params, callback) {
    	// var arrData = {
	    // 	correo: $('.correo-suscripcion').val()
	    // };
	    var params = params || {};
	    var paramsCallback = callback || function(){};
	    var $contStaffMedico = $('.cont-staff-medico');
	    $contStaffMedico.html(loaderCP);
	    $.ajax({
	      type: "POST",
	      url: "StaffMedico/listar_staff_medico",
	      data: JSON.stringify(params),
	      dataType: "json",
	      contentType: 'application/json',
	      success: function (response) {
	      	console.log(response, 'response');
	      	var paramData = response.datos;
	      	var paramPaginate = response.paginate;
	      	console.log(paramPaginate, 'paramPaginateee');
	      	var limitByView = Math.ceil(paramPaginate.totalRows / paramPaginate.itemsByView);
	      	// console.log(limitByView, 'limitByView');
	      	$contStaffMedico.empty();
	      	$.each(paramData, function(key, val) {
	      		var strJson = JSON.stringify(val);
	      		console.log(key, val, 'keyval');
	      		var $wrap1 = $('<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pre-item wow fadeIn" data-wow-duration="1s" data-wow-delay="500ms"></div>');
	      			var $wrap2 = $('<div class="item-medico"></div>');
	      				var $wrap2_1 = $('<img alt="'+val.medico+'" src="'+URLPreview+'assets/dinamic/medico/'+val.foto+'" />');
	      				var $wrap2_2 = $('<div class="box-hovered"></div>');
	      					var $wrap2_2_1 = $('<div class="box-info"></div>');
	      						var $wrap2_2_1_1 = $('<h5 class="especialidad">'+val.especialidad+'</h5>');
	      						var $wrap2_2_1_2 = $('<span class="cmp"> '+val.tipo_colegiatura+': '+val.cmp+'</span>');
	      					var $wrap2_2_2 = $('<div class="box-action"></div>');
	      						var $wrap2_2_2_1 = $('<button class="btn btn-verMas" type="button""> Ver más </button><code class="json-hide">'+strJson+'</code>');
	      			var $wrap3 = $('<h4>'+val.medico+'</h4>');
	      		var $itemWrapped = $wrap1.append($wrap2.append($wrap2_1, $wrap2_2.append($wrap2_2_1.append($wrap2_2_1_1, $wrap2_2_1_2), $wrap2_2_2.append($wrap2_2_2_1))),$wrap3);
	      		// console.log($itemWrapped, '$itemWrappedgg');
	      		$contStaffMedico.append($itemWrapped);
	      	});
			$('.txt-limit').html(limitByView);
			// cargar combo paginador 
			var optionsCombo =  '';
			for (var i = 1; i <= limitByView;) {
				optionsCombo += '<option>'+i+'</option>';
				i += 1;
			}
			$('.cbo-pageNumber').html(optionsCombo);
			$('.cbo-pageNumber').val(params.paginate.pageNumber);
			onClickPerfilMedico();
	      }
	  	});
    }
    $('.btn-buscarMedico').trigger('click');

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
				$('.inputjson.tc').html(arrPerfilJson.tipo_colegiatura+':');
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
					// console.log(arrPerfilJson.estudios_html, '==>arrPerfilJson.estudios_html');
					// console.log(atob(arrPerfilJson.estudios_html), 'dsffs');
					// var htmlEstudios = atob(arrPerfilJson.estudios_html);
					var htmlEstudios = arrPerfilJson.estudios_html;
					$('.inputjson.estudios').html( decodeURIComponent(escape(atob( htmlEstudios ))) );
				}else{
					$('.inputjson.estudios').text('No se muestra estudios en este momento.');
				}
				
				$('.inputjson.foto').attr("src", URLPreview+'assets/dinamic/medico/medico-perfil/'+arrPerfilJson.foto_perfil);
				// console.log(arrPerfilJson.reserva_cita, 'arrPerfilJson.reserva_cita');
				// console.log($('.btn-agendar-cita'));
				if(arrPerfilJson.reserva_cita == 1){
					$('.btn-agendar-cita').show();
				}else{
					$('.btn-agendar-cita').hide();
				}
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
});
</script>