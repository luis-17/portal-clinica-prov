<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<section class="section-galeria">
  <div id="dcjv-homeslider" class="owl-carousel">
    <div class="owl-item">
      <figure class="item item-1">
          <img src="assets/images/gallery/gallery-01.jpg" alt="image description">
          <figcaption>
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-10 col-xs-12 pull-right -contenido">
                  <h1>Asesoría contable de calidad</h1>
                  <h2>Garantizada</h2> 
                  <div class="box-description">
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi
                        aliquip ex ea commodo consequat aute irure dolor in sprehen.</p>
                  </div>
                  <div class="box-actions">
                    <a class="vc-btn" href="<?php echo site_url('contactanos'); ?>"><span>Contáctanos</span></a> 
                  </div>
                </div>
              </div>
            </div>
          </figcaption>
      </figure>
    </div>
    <div class="owl-item">
      <figure class="item item-2 box-style-one">
        <img src="assets/images/gallery/gallery-02.jpg" alt="image description">
        <figcaption>
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-sm-10 col-xs-12 pull-right -contenido">
                <h1>Asesoría contable de calidad</h1>
                <h2>Garantizada</h2> 
                <div class="box-description">
                  <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi
                      aliquip ex ea commodo consequat aute irure dolor in sprehen.</p>
                </div>
                <div class="box-actions">
                  <a class="vc-btn btn-primary" href="<?php echo site_url('contactanos'); ?>"><span>Contáctanos</span></a> 
                </div>
              </div>
            </div>
          </div>
        </figcaption>
      </figure>
    </div>
  </div>
</section>

<section class="section-servicios">
  <div class="box-title">
    <h3> NUESTROS SERVICIOS </h3>
  </div>
  <div class="box-content">
    <div id="dcjv-servicios" class="owl-carousel"> 
      <?php foreach($arrServicios as $key => $row) { ?> 
      <div class="owl-item">
        <div class="box-servicio">
          <div class="box-img">
            <img alt="" src="assets/images/services/<?php echo $row['foto']; ?>" />
          </div>
          <div class="box-info">
            <div class="box-info-title">
              <?php echo $row['nombre']; ?>
            </div>
            <div class="box-info-description">
              <?php echo $row['descripcion']; ?>
            </div>
            <div class="box-action">
              <a class="vc-btn -white" href="<?php echo site_url('servicio/'.$row['alias']); ?>"> <span> VER MÁS </span> </a> 
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="owl-item">
        <div class="box-servicio">
          <div class="box-img">
            <img alt="" src="assets/images/services/asesoria.jpg" />
          </div>
          <div class="box-info">
            <div class="box-info-title">
              ASESORIA PARA PEQUEÑA Y MEDIANA EMPRESA 
            </div>
            <div class="box-info-description"> 
              Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi aliquip ex ea commodo consequat aute irure dolor in sprehen. 
            </div>
            <div class="box-action">
              <a class="vc-btn -white" href="#"><span> VER MÁS </span></a> 
            </div>
          </div>
        </div>
      </div>
      <div class="owl-item">
        <div class="box-servicio">
          <div class="box-img">
            <img alt="" src="assets/images/services/const-empresa.jpg" />
          </div>
          <div class="box-info">
            <div class="box-info-title">
              CONSTITUCIÓN DE EMPRESA 
            </div>
            <div class="box-info-description">
              Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi aliquip ex ea commodo consequat aute irure dolor in sprehen.
            </div>
            <div class="box-action">
              <a class="vc-btn -white" href="#"><span> VER MÁS </span></a> 
            </div>
          </div>
        </div>
      </div>
      <div class="owl-item">
        <div class="box-servicio">
          <div class="box-img">
            <img alt="" src="assets/images/services/auditoria.jpg" />
          </div>
          <div class="box-info">
            <div class="box-info-title">
              SERVICIO DE AUDITORÍA 
            </div>
            <div class="box-info-description">
              Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi aliquip ex ea commodo consequat aute irure dolor in sprehen.
            </div>
            <div class="box-action">
              <a class="vc-btn -white" href="#"><span> VER MÁS </span></a> 
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>

<script type="text/javascript">

  $(document).ready(function() { 
    // GALERIA INICIO 
    var owl = $("#dcjv-homeslider");
    owl.owlCarousel({
      pagination : false,
      navigation : true,
      singleItem : true,
      navigationText: [
        "<i class='vc-btnnext fa fa-angle-left'></i>",
        "<i class='vc-btnprev fa fa-angle-right'></i>"
      ]
    });
  });
    
  $(document).ready(function() { 
    // GALERIA SERVICIOS  
    var owl = $("#dcjv-servicios");
    owl.owlCarousel({
      pagination : true,
      navigation : true,
      singleItem : true 
    });
  });
</script>