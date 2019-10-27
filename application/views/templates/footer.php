	<section class="section-footer">
		<div class="container">
			<div class="box-suscripcion">
		    <form id="form-suscripcion" class="form-suscripcion">
		    	<div class="form-header">
		    		<h3> Suscríbete </h3>
		      	<p> Entérate de todas las novedades sobre cómo cuidar tu salud </p>
		    	</div>
		      <div class="form-group">
		      	<input class="form-control correo-suscripcion" placeholder="Email*" type="email" required name="correo" />
		      	<button class="btn btn-rounded btn-suscripcion" type="submit">Suscríbete</button>
		      	<button class="btn btn-rounded btn-suscrito" disabled type="button">¡Te suscribiste!</button>
		      </div>
		    </form>
		  </div>
		  <div class="box-contacto"> 
	      <div class="box-telefono">
	      	<div class="box-icon">
	      		<img src="<?php echo base_url('assets/images/telefono.png'); ?>" />
	      	</div>
	      	<div class="box-items">
	      		<div class="box-item telefono-1">
		      		<div class="box-key"> Central de citas: </div>
		      		<div class="box-value">
		      			(511) 660-6000 
		      		</div>
		      	</div>
		      	<div class="box-item telefono-2">
		      		<div class="box-key"> Central administrativa:</div>
		      		<div class="box-value">
		      			(511) 660-6020 
		      		</div>
		      	</div>
	      	</div>
	      </div>
	      <div class="box-ubicación">
	      	<div class="box-icon">
	      		<img src="<?php echo base_url('assets/images/ubicacion.png'); ?>" />
	      	</div>
	      	<div class="box-item">
	      		<div class="box-key"> Ubicación: </div>
		      	<div class="box-value">
		      		Carlos Gonzales 250 - San Miguel (alt. cdra. 26 de la Av. La Marina).
		      	</div>
	      	</div>
	      </div>
	      <div class="box-redes">
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
		  </div>
		</div>
	</section>
	<section class="section-post-footer">
	  <div class="box-derechos">
	    2019 Todos los derechos reservados © 
	  </div>
	  <div class="box-autor">
	    Diseño y programación: <strong> VitaCloud Perú. </strong>
	  </div>
	</section> 
</div>
<script type="text/javascript" src="<?php echo base_url('libs/bootstrap-3.3.7/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('libs/jquery-mask-plugin/jquery.mask.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('libs/owl-carousel/owl.carousel.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('libs/swiper/js/swiper.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('libs/jquery-validate/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('libs/fancybox/jquery.fancybox.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('libs/wow/wow.min.js'); ?>"></script>
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/var.js'); ?>"></script>
<!-- Include js plugin -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/5c6336d66cb1ff3c14cc3933/default';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
</script>

<script type="text/javascript">
window.onscroll = function() {myScrollFixedMenu()};

var header = document.getElementById("myHeaderTop");
var pointToFixed = document.getElementById("box-header-primary");
var sticky = pointToFixed.offsetTop;

function myScrollFixedMenu() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky-fixed");
  } else {
    header.classList.remove("sticky-fixed");
  }
}

/* menu lateral */
$( document ).ready( function() {
	$('.btn-menu-lateral').on('click', function(){
		var sectionMenuLat = $('.box-menu-lateral');
		if(sectionMenuLat.hasClass('out')){
			sectionMenuLat.removeClass('out').addClass('in');
		}else{
			sectionMenuLat.removeClass('in').addClass('out');
		}
	});
	$(document).mouseup(function(e) {
	    var sectionMenuLat = $('.box-menu-lateral');
	    if(!sectionMenuLat.is(e.target) && sectionMenuLat.has(e.target).length === 0){
	        sectionMenuLat.removeClass('in').addClass('out');
	    }
	});
	$('.close-icon').on('click', function(){
		var sectionMenuLat = $('.box-menu-lateral');
		sectionMenuLat.removeClass('in').addClass('out');
	});
	$('.btn-suscrito').hide();
	$('.btn-suscripcion').show();
	
	// REGISTRAR SUSCRIPCIÓN
	$("#form-suscripcion").validate({
		rules: {
	       correo: {
	           required: true,
	           email: true
	       },
   		},
   		messages: {
   			correo: {
   				required: 'Este campo es requerido.',
	           	email: 'Este campo sólo permite correo.'
   			},
   		},
		submitHandler: function(form) {
		    // form.submit();
		    var arrData = {
		    	correo: $('.correo-suscripcion').val()
		    };
		    $.ajax({
		         type: "POST",
		         url: "Suscripcion/registrar",
		         data: JSON.stringify(arrData),
		         dataType: "json",
		         contentType: 'application/json',
		         success: function (response) {
		         	console.log(response, 'responseee');
		         	$('.btn-suscrito').show();
		         	$('.btn-suscripcion').hide();
		         	$('.correo-suscripcion').prop('disabled', true);
		         }
		     });
		     return false;
	 	}
	});
});
</script>
<!--End of Tawk.to Script-->

</body>
</html>