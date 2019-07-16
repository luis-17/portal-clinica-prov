<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="page page-detalle-servicio">
	<div class="box-breadcrumb">
		<div class="container">
			<div class="text-breadcrumb"> <span>Home</span> / <span>Servicios</span> / <strong><?php echo $fServicio['nombre']; ?></strong> </div>
		</div>
	</div>
	<div class="box-content container"> 
		<div class="box-info"> 
			<div class="box-info-text">
				<h1> <?php echo $fServicio['nombre']; ?> </h1> 
				<?php echo $fServicio['descripcion']; ?>
			</div>
			<div class="box-info-image"> 
				<img src="<?php echo base_url('assets/images/services/'.$fServicio['foto']); ?>" />
			</div> 
		</div>
	</div>
</div>