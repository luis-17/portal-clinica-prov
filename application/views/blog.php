<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-blog">
	<section class="section-portada">
		<div class="box-arrow box-left-arrow">
			<button id="btn-leftSlider" class="btn"> <img src="<?php echo base_url('assets/images/flecha-left.png'); ?>"> </button>
		</div>
		<div id="swiper-blog" class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach($arrEntradasAle as $key => $row): ?>
				<div class="swiper-slide">
					<div class="img-portada">
						<div class="bg-portada" style="background-image: url(<?php echo URL_PREVIEW; ?>assets/dinamic/blog/portadas/<?php echo $row['imagen_portada']; ?>);"></div>
					</div>
					<div class="texto-portada">
						<h1> <?php echo $row['titulo']; ?> </h1>
					</div>
					<div class="action-portada">
						<a class="btn btn-primary btn-white btn-sm" href="<?php echo site_url('vidasalud/').$row['uri']; ?>"> LEER MÁS </a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="box-arrow box-right-arrow">
			<button id="btn-rightSlider" class="btn"> <img src="<?php echo base_url('assets/images/flecha-right.png'); ?>"> </button>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-listentries">
		<div class="container">
			<div class="box-result cont-entries-blog row"></div>
			<div class="row">
				<div class="col-xs-12 col-lg-12 text-center cont-entries-paginate"></div>
			</div>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
</div>
<script type="text/javascript">
$(document).ready(function() { 
    // BLOG ITEMS
    var swiperBlog = new Swiper('#swiper-blog', {
    	slidesPerView: 1,
	    slidesPerColumn: 1,
	    spaceBetween: 0,
	    parallax: true,
	    autoplay: {
			delay: 5000,
		},
	    autoplayDisableOnInteraction: false,
    });
    $('#btn-leftSlider').on('click', function(e) {
    	e.preventDefault();
    	swiperBlog.slidePrev();
    });
    $('#btn-rightSlider').on('click', function(e) {
    	e.preventDefault();
    	swiperBlog.slideNext();
    });

    // CARGAR BLOGS 
    function listarBlogs(params) { 
    	var pageNumberVal = 1;
    	var pageSizeVal = 9;
	    var params = params || {
			paginate: {
				firstRow: (pageNumberVal - 1) * pageSizeVal,
				pageNumber: pageNumberVal,
				pageSize: pageSizeVal
				// sort: "ASC",
				// sortName: "md.ap_paterno"
			}
		};
	    var $contEntriesBlog = $('.cont-entries-blog');
	    $contEntriesBlog.html(loaderCP);
	    $.ajax({
	      type: "POST",
	      url: "Blog/listar_blogs",
	      data: JSON.stringify(params),
	      dataType: "json",
	      contentType: 'application/json',
	      success: function (response) {
	      	// console.log(response, 'response');
	      	var paramData = response.datos;
	      	var paramPaginate = response.paginate;
	      	// console.log(paramPaginate, 'paramPaginateee');
	      	var limitByView = Math.ceil(paramPaginate.totalRows / paramPaginate.itemsByView);
	      	// console.log(limitByView);
	      	$contEntriesBlog.empty();
	      	$.each(paramData, function(key, val) {
	      		var strJson = JSON.stringify(val);
	      		var $wrap1 = $('<div class="col-lg-4 col-sm-6 col-xs-12 pre-item"></div>');
	      			var $wrap2 = $('<div class="item-blog"></div>');
	      				var $wrap2_1 = $('<img class="img-responsive" src="'+URLPreview+'assets/dinamic/blog/'+val.imagen_preview+'" />');
	      				var $wrap2_2 = $('<div class="box-hovered"></div>');
	      					var $wrap2_2_1 = $('<div class="box-action"></div>');
	      						var $wrap2_2_1_1 = $('<a target="blank" href="<?php echo site_url('vidasalud/'); ?>'+val.uri+'" class="btn btn-verMas"> LEER MÁS </a><code class="json-hide">'+strJson+'</code>');
	      			var $wrap3 = $('<a href="<?php echo site_url('vidasalud/'); ?>'+val.uri+'"></a>');
	      				var $wrap3_1 = $('<div class="item-blog-foot"></div>');
		      				var $wrap3_1_1 = $('<h4>'+val.titulo+'</h4>');
		      				var $wrap3_1_2 = $('<small>'+val.fechaFormat+'</small>');
		      				var $wrap3_1_3 = $('<p>'+val.resumen+'</p>');
	      		var $itemWrapped = $wrap1.append($wrap2.append($wrap2_1, $wrap2_2.append($wrap2_2_1.append($wrap2_2_1_1))),$wrap3.append($wrap3_1.append($wrap3_1_1, $wrap3_1_2, $wrap3_1_3)));
	      		$contEntriesBlog.append($itemWrapped);
	      	});
	      	// generar paginacion
	      	$('.cont-entries-paginate').empty();
	      	var $contPaginates = $('.cont-entries-paginate');
	      	for (i = 1; i <= limitByView;) {
	      		$itemPaginate = $('<div class="box-item-paginate">'+i+'</div>');
	      		$contPaginates.append($itemPaginate);
	      		i +=1;
	      	}
			// event clic
			$('.box-item-paginate').each(function() {
				var thes = $(this);
				var strThes = thes.text();
				// var pageNumberVal = 1;
    			var pageSizeVal = 9;
    			thes.off();
				thes.on('click', function() {
					var arrParams = {
						paginate: {
							firstRow: (strThes - 1) * pageSizeVal,
							pageNumber: strThes,
							pageSize: pageSizeVal
						}
					};
					listarBlogs(arrParams);
				});
			});
	      }
	  	});
    }
    listarBlogs();
});
</script>