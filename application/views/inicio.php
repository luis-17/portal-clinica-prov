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
<section class="section-especialidades">
  <div class="container">
    <div class="box-title">
      <h2> Especialidades </h2>
      <p>Seleccione una de nuestras especialidades y conozca nuestro staff médico </p>
    </div>
    <div class="box-content">
      <div id="prov-especialidades" class="owl-carousel"> 
        <?php foreach($arrEspecialidades as $key => $row): ?> 
        <div class="owl-item">
          <div class="box-especialidad">
            <div class="box-img">
              <img alt="<?php echo $row['nombre']; ?>" src="assets/dinamic/especialidad/iconos-home/<?php echo $row['icono_home']; ?>" />
            </div>
            <div class="box-nombre">
              <?php echo $row['nombre']; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="box-action">
        <button type="button" class="btn btn-rounded primary"> VER TODAS LAS ESPECIALIDADES </button>
      </div>
    </div>
  </div>
</section>

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
      // navigationText: [
      //   "<i class='vc-btnnext fa fa-angle-left'></i>",
      //   "<i class='vc-btnprev fa fa-angle-right'></i>"
      // ]
      // singleItem : true 
    });
  });

</script>