<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-sm">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada">
			<h1> Staff Médico </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  <div class="angle-separator-up-style-2"></div>
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
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
						<div class="propos"> de <span class="txt-limit"></span> </div>
						<button type="button" class="btn btn-direction btn-next"> <i class='next fa fa-angle-left'></i> </button>
						<button type="button" class="btn btn-direction btn-prev"> <i class='prev fa fa-angle-right'></i> </button>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  <div class="angle-separator-bottom"></div>
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
					<h2> Carlos Perez Loyola </h2>
				</div>
				<div class="box-present-detail">
					<dl>
						<dt> Especialidad: </dt>
						<dd> Pediatría </dd>
					</dl>
					<dl>
						<dt> CMP: </dt>
						<dd> 04535 </dd>
					</dl>
					<dl>
						<dt> RNE: </dt>
						<dd> 023535 </dd>
					</dl>
				</div>
				<div class="box-present-lema">
					<q>Donde quiera que se ame el arte de la medicina, se ama también a la humanidad</q>
				</div>
			</div>
			<div class="box-horario">
				<h3> Horarios: </h3>
				<dl>
					<dt> <img src="<?php echo base_url('assets/images/mini-stethoscope.png'); ?>"> Lunes: </dt>
					<dd> 08:00 - 21:00 </dd>
				</dl>
				<dl>
					<dt> <img src="<?php echo base_url('assets/images/mini-stethoscope.png'); ?>"> Jueves: </dt>
					<dd> 09:00 - 13:00 </dd>
				</dl>
				<dl>
					<dt> <img src="<?php echo base_url('assets/images/mini-stethoscope.png'); ?>"> Sábado: </dt>
					<dd> 08:00 - 13:00 </dd>
				</dl>
			</div>
			<div class="box-estudios">
				<h3> Estudios: </h3>
				<p>
					Facultad de Medicina, Universidad Nacional Mayor de San Marcos Pediatria, Hospital del Niño, UNMSM (1970 - 1973)
				</p>
			</div>
		</div>
		<div class="box-foto-perfil">
			<img src="<?php echo base_url('assets/dinamic/medico/medico-perfil/perfil.png'); ?>" alt="" />
		</div>
	</div>
</div>
<!-- END PERFIL DE MEDICO -->
<script type="text/javascript">
  $(document).ready(function() { 
  	// if (typeof page == 'undefined') return false;
  	console.log($('.btn-buscarMedico'), 'load btn');
		
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
					sortName: "md.ap_paterno"
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
			var arrParams = {
				paginate: {
					firstRow: ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val(),
					pageNumber: $('.cbo-pageNumber').val(),
					pageSize: $('.cbo-pageSize').val(),
					sort: "ASC",
					sortName: "md.ap_paterno"
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
					sortName: "md.ap_paterno"
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
					sortName: "md.ap_paterno"
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
					sortName: "md.ap_paterno"
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
				var valPageNumber = $('.cbo-pageNumber').val();
				valPageNumber += 1;
				$('.cbo-pageNumber').val(valPageNumber);
			}
			if($btnDirection.hasClass('btn-prev')){
				var valPageNumber = $('.cbo-pageNumber').val();
				if( valPageNumber > 1 ){
					valPageNumber -= 1;
					$('.cbo-pageNumber').val(valPageNumber);
				}
			}
			var paramsFirstRow = ($('.cbo-pageNumber').val() - 1) * $('.cbo-pageSize').val();
			if (paramsFirstRow < 0) {
				paramsFirstRow = 0;
			}
			var arrParams = {
				paginate: {
					firstRow: paramsFirstRow,
					pageNumber: $('.cbo-pageNumber').val(),
					pageSize: $('.cbo-pageSize').val(),
					sort: "ASC",
					sortName: "md.ap_paterno"
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
	      	console.log(limitByView);
	      	$contStaffMedico.empty();
	      	$.each(paramData, function(key, val) {
	      		console.log(key, val, 'keyval');
	      		var $wrap1 = $('<div class="col-lg-3 pre-item"></div>');
	      			var $wrap2 = $('<div class="item-medico"></div>');
	      				var $wrap2_1 = $('<img alt="'+val.medico+'" src="assets/dinamic/medico/'+val.foto+'" />');
	      				var $wrap2_2 = $('<div class="box-hovered"></div>');
	      					var $wrap2_2_1 = $('<div class="box-info"></div>');
	      						var $wrap2_2_1_1 = $('<h5 class="especialidad">'+val.especialidad+'</h5>');
	      						var $wrap2_2_1_2 = $('<span class="cmp"> CMP: '+val.cmp+'</span>');
	      					var $wrap2_2_2 = $('<div class="box-action"></div>');
	      						var $wrap2_2_2_1 = $('<button class="btn btn-verMas" type="button"> Ver más </button>');
	      			var $wrap3 = $('<h4>'+val.medico+'</h4>');
	      		var $itemWrapped = $wrap1.append($wrap2.append($wrap2_1, $wrap2_2.append($wrap2_2_1.append($wrap2_2_1_1, $wrap2_2_1_2), $wrap2_2_2.append($wrap2_2_2_1))),$wrap3);
	      		// console.log($itemWrapped, '$itemWrappedgg');
	      		$contStaffMedico.append($itemWrapped);
	      	});
			$('.txt-limit').html(limitByView);
			onClickPerfilMedico();
	      }
	  	});
    }
    $('.btn-buscarMedico').trigger('click');

    /* INTERACCION PERFIL MEDICO */
    function onClickPerfilMedico() {
    	$('.btn-verMas, .box-modal-perfil .box-close').off();
    	$('.btn-verMas, .box-modal-perfil .box-close').on('click', function(event){
    		console.log('click mee xd');
			var sectionPerfilMed = $('.box-modal-perfil');
			if(sectionPerfilMed.hasClass('out')){
				sectionPerfilMed.removeClass('out').addClass('in');
				$('.page-sm').addClass('op-25');
				$('#myHeaderTop').addClass('op-25');
			}else{
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
		    }
		});
	});
</script>