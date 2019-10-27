<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-promocion">
	<section class="section-portada">
		<div class="img-portada">
			<div class="bg-portada"></div>
		</div>
		<div class="texto-portada wow bounceInRight delay-1s">
			<h1> Promociones </h1>
		</div>
	</section>
	<div class="angle-separator-content">
	  	<div class="angle-separator-up-style-2 wow slideInUp slow"></div>
	</div>
	<section class="section-list">
		<div class="container">
			<div class="box-result row">
				<?php foreach($arrPromociones as $key => $row): ?>
				<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
					<a href="<?php echo URL_PREVIEW; ?>assets/dinamic/promocion/<?php echo $row['foto']; ?>" class="box-item" data-fancybox="promociones" data-caption="<?php echo $row['titulo']; ?>">
						<div class="box-image" style="background-image: url(<?php echo URL_PREVIEW; ?>assets/dinamic/promocion/<?php echo $row['foto']; ?>);"></div>
						
					</a>
					<div class="box-description">
						<?php echo $row['titulo']; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>
<div class="angle-separator-content">
  	<div class="angle-separator-bottom wow slideInDown slow"></div>
</div>
<script type="text/javascript">
$(document).ready(function() { 
    $('[data-fancybox="promociones"]').fancybox({
		
	});
});
</script>