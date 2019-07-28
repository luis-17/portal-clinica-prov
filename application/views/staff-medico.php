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
			<div class="box-result cont-staff-medico">
				<!-- <?php //foreach ($arrEspecialidades as $key => $row): ?>
				<div class="col-lg-3">
					<div class="item-medico">
						<img alt="" src="">
						<div class="box-hovered">
							<div class="box-info">
								<h5 class="especialidad"> <?php echo $row['especialidad'] ?> </h5>
								<span class="cmp"> CMP: <?php echo $row['cmp'] ?> </span>
							</div>
							<div class="box-action">
								<button class="btn btn-verMas" type="button"> Ver más </button>
							</div>
						</div>
					</div>
					<h4> <?php echo $row['nombres']; ?> </h4>
				</div>
				<?php //endforeach ?> -->
			</div>
			<div class="box-paginate">
				<div class="box-content">
					<div class="box-lateral-left">
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
						<div> de <span class="txt-limit"></span> </div>
						<button type="button" class="btn btn-direction btn-next"> <i class='next fa fa-angle-left'></i> </button>
						<button type="button" class="btn btn-direction btn-prev"> <i class='prev fa fa-angle-right'></i> </button>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
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
	      url: "staffmedico/listar_staff_medico",
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
	      	// var strLimit = 
	      	

	      	// return false;
	      	// var paginate = response.
	      	// $contStaffMedico.empty();
	      	// var $itemsWrappedAll = $('');
	      	$contStaffMedico.empty();
	      	$.each(paramData, function(key, val) {
	      		console.log(key, val, 'keyval');
	      		var $wrap1 = $('<div class="col-lg-3"></div>');
	      			var $wrap2 = $('<div class="item-medico"></div>');
	      				var $wrap2_1 = $('<img alt="'+val.medico+'" src="assets/dinamic/medico/'+val.foto+'" />');
	      				var $wrap2_2 = $('<div class="box-hovered"></div>');
	      					var $wrap2_2_1 = $('<div class="box-info"></div>');
	      						var $wrap2_2_1_1 = $('<h5 class="especialidad">'+val.especialidad+'</h5>');
	      						var $wrap2_2_1_2 = $('<span class="cmp">'+val.cmp+'</span>');
	      					var $wrap2_2_2 = $('<div class="box-action"></div>');
	      						var $wrap2_2_2_1 = $('<button class="btn btn-verMas" type="button"> Ver más </button>');
	      			var $wrap3 = $('<h4>'+val.nombres+'</h4>');
	      		var $itemWrapped = $wrap1.append($wrap2.append($wrap2_1, $wrap2_2.append($wrap2_2_1.append($wrap2_2_1_1, $wrap2_2_1_2), $wrap2_2_2.append($wrap2_2_2_1))),$wrap3);
	      		console.log($itemWrapped, '$itemWrappedgg');
	      		$contStaffMedico.append($itemWrapped);
	      	});
	      	// $contStaffMedico.empty();
	      	// $contStaffMedico.append($itemsWrappedAll);
	      	// console.log($contStaffMedico, 'contStaffMedico');
	      	// console.log($itemsWrappedAll, 'itemsWrappedAll');
					$('.txt-limit').html(limitByView);
	        /*
						<div class="col-lg-3">
							<div class="item-medico">
								<img alt="" src="">
								<div class="box-hovered">
									<div class="box-info">
										<h5 class="especialidad"> <?php echo $row['especialidad'] ?> </h5>
										<span class="cmp"> CMP: <?php echo $row['cmp'] ?> </span>
									</div>
									<div class="box-action">
										<button class="btn btn-verMas" type="button"> Ver más </button>
									</div>
								</div>
							</div>
							<h4> <?php // echo $row['nombres']; ?> </h4>
						</div>
	        */
	      }
	  	});
    }
    $('.btn-buscarMedico').trigger('click');
  });
</script>