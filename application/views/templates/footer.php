	<section class="section-footer">
	  <div class="box-content">
	    <div class="box-resenia">
	      <div class="box-logo">
	        <img alt="Estudio Contable JV" src="<?php echo base_url('assets/images/logo_white.png'); ?>" /> 
	      </div>
	      <div class="box-description">
	        <p>
	          Somos una compañia con experiencia. dedicada a la consultoria contable, tributaria, laboral y financiera. Con personal capacitado con mas de 15 años de experiencia brindando a nuestros cliente, eficiencia, economía y valor humano. 
	        </p>
	      </div>
	      <div class="box-redes-sociales">
	        <div class="red-social-fb">
	          <i class="fab fa-facebook-square"></i> 
	        </div>
	      </div>
	    </div>
	    <div class="box-mapa-sitio">
	      <div class="box-title"> Mapa de Sitio </div>
	      <div class="box-list">
	        <ul>
	          <li>
	            <a href="#"> Inicio </a>
	          </li>
	          <li>
	            <a href="#"> Nosotros</a>
	          </li>
	          <li>
	            <a href="#"> Servicios</a>
	          </li>
	          <li>
	            <a href="#"> Clientes</a>
	          </li>
	          <li>
	            <a href="#"> Contáctanos</a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <div class="box-contacto"> 
	      <div class="box-title"> CONTACTO </div>
	      <div class="box-content">
	        <div class="box-direccion">
	          <i class="fa fa-map-marker"></i> Av. Gran Chimú 1421 Urb. Zárate S.J.L. 
	        </div>
	        <div class="box-horario">
	          <i class="fa fa-clock"></i> Lun. a Sab. 9am - 5:30pm
	        </div>
	        <div class="box-telefono">
	          <i class="fa fa-phone"></i> (01) 945 142 588 / (01) 704-3855 
	        </div>
	        <div class="box-correo">
	          <a href="mailto:informes@dcyjvasociados.com"> <i class="fas fa-envelope"></i> informes@dcyjvasociados.com </a>
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
	console.log('click me', $('.btn-menu-lateral'));
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
});
</script>
<!--End of Tawk.to Script-->
</body>
</html>