<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<section class="section-galeria">
  <div id="prov-homeslider" class="owl-carousel">
    <?php // var_dump($arrSliders); ?>
    <?php foreach($arrSliders as $key => $row):?> 
    <div class="owl-item">
      <figure class="item item-1">
          <img src="assets/dinamic/slider/<?php echo $row['image_background']; ?>" alt="image description">
          <figcaption>
            <div class="container-full box-galeria-content" style="height: 100%;">
              <div class="box-image-lateral">
                <img alt="" src="assets/dinamic/slider/<?php echo $row['image_lateral']; ?>" />
              </div>
              <div class="box-text-lateral">
                <h1><?php echo $row['lema']; ?></h1>
                <div class="box-description">
                  <p><?php echo $row['lema_alt']; ?></p>
                </div>
                <div class="box-actions">
                  <a class="btn primary btn-rounded" href="<?php echo site_url('contactanos'); ?>"><span><?php echo $row['text_button']; ?></span></a> 
                </div>
              </div>
            </div>
          </figcaption>
      </figure>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<div class="angle-separator-content">
  <div class="angle-separator-up"></div>
</div>
<section class="section-especialidades">
  <div class="container">
    <div class="box-title">
      <h2> Especialidades </h2>
      <p>Seleccione una de nuestras especialidades y conozca nuestro staff médico </p>
    </div>
    <div class="box-content">
      <div id="prov-especialidades" class="owl-carousel"> 
        <?php foreach($arrEspecialidades as $key => $row): ?> 
        <a href="#" class="owl-item">
          <div class="box-especialidad">
            <div class="box-img">
              <img alt="<?php echo $row['nombre']; ?>" src="assets/dinamic/especialidad/iconos-home/<?php echo $row['icono_home']; ?>" />
            </div>
            <div class="box-nombre">
              <?php echo $row['nombre']; ?>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
      <div class="box-action">
        <button type="button" class="btn btn-rounded primary"> VER TODAS LAS ESPECIALIDADES </button>
      </div>
    </div>
  </div>
</section>
<div class="angle-separator-content">
  <div class="angle-separator-bottom"></div>
</div>
<section class="section-conocenos">
  <div class="box-conocenos">
    <div class="box-text">
      <h2> Conócenos </h2>
      <p> 
        Somos una institución hospitalaria privada de alto nivel resolutivo, dedicada al cuidado de la salud de los peruanos con un enfoque novedoso en sus servicios asistenciales clínicos y quirúrgicos, acreditados y certificados dentro de los más altos estándares nacionales e internacionales. Garantizando a nuestros usuarios calidad en nuestro servicio médico hospitalario.
      </p>
      <button type="button" class="btn btn-rounded">SABER MÁS</button>
    </div>
    <div class="box-image">
      <img alt="Conocenos" src="assets/dinamic/conocenos/conocenos.jpg" />
    </div>
  </div>
</section>
<div class="angle-separator-content">
  <div class="angle-separator-up"></div>
</div>
<section class="section-porque-elegirnos">
  <div class="container">
    <div class="box-header">
      <img src="assets/images/corazon-salud.png" />
      <h2> ¿Por qúe elegirnos? </h2>
    </div>
    <div class="box-content">
      <?php foreach($arrPorqueElegirnos as $key => $row): ?> 
      <div class="box-item motivo">
        <div class="box-item-content">
          <div class="box-image">
            <img src="assets/dinamic/porque-elegirnos/<?php echo $row['icon']; ?>">
          </div>
          <div class="box-title">
            <?php echo $row['nombre']; ?>
          </div>
          <div class="box-action">
            <a href="#" class="btn btn-rounded"> SABER MÁS </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<div class="angle-separator-content">
  <div class="angle-separator-bottom"></div>
</div>
<script type="text/javascript">

  $(document).ready(function() { 
    // GALERIA INICIO 
    var owlHomeSlider = $("#prov-homeslider");
    owlHomeSlider.owlCarousel({
      pagination : false,
      navigation : true,
      singleItem : true,
      navigationText: [
        "<i class='vc-btnnext fa fa-angle-left'></i>",
        "<i class='vc-btnprev fa fa-angle-right'></i>"
      ]
    });
    // GALERIA ESPECIALIDADES  
    var owlEspec = $("#prov-especialidades");
    console.log($("#prov-especialidades"), '$("#prov-especialidades");');
    owlEspec.owlCarousel({
      pagination : false,
      navigation : true,
      items: 4,
      navigationText: [
        "<i class='next fa fa-angle-left'></i>",
        "<i class='prev fa fa-angle-right'></i>"
      ]
      // singleItem : true 
    });
  });

</script>