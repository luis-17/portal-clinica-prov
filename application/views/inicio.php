<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-home">
  <section class="section-galeria">
    <div id="prov-homeslider" class="owl-carousel">
      <?php // var_dump($arrSliders); ?>
      <?php foreach($arrSliders as $key => $row):?> 
      <div class="owl-item">
        <figure class="item item-1">
          <img src="<?php echo URL_PREVIEW; ?>assets/dinamic/slider/<?php echo $row['image_background']; ?>" alt="image description">
          <figcaption>
            <div class="container-full box-galeria-content" style="height: 100%;">
              <div class="box-image-lateral wow bounceInRight delay-05s">
                <img class="figura" alt="" src="<?php echo URL_PREVIEW; ?>assets/dinamic/slider/<?php echo $row['image_lateral']; ?>" />
              </div>
              <div class="box-text-lateral wow bounceInLeft delay-1s">
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
      <div class="box-title wow bounceInDown" data-wow-duration="1s">
        <h2> Especialidades </h2>
        <p>Seleccione una de nuestras especialidades y conozca nuestro staff médico </p>
      </div>
      <div class="box-content">
        <div id="prov-especialidades" class="owl-carousel wow bounceInRight delay-05s"> 
          <?php foreach($arrEspecialidades as $key => $row): ?> 
          <a href="#" class="owl-item">
            <div class="box-especialidad">
              <div class="box-img">
                <img alt="<?php echo $row['nombre']; ?>" src="<?php echo URL_PREVIEW; ?>assets/dinamic/especialidad/iconos-home/<?php echo $row['icono_home']; ?>" />
              </div>
              <div class="box-nombre">
                <?php echo $row['nombre']; ?>
              </div>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
        <div class="box-action wow bounceInLeft">
          <a href="<?php echo site_url('especialidades'); ?>" type="button" class="btn btn-rounded primary"> VER TODAS LAS ESPECIALIDADES </a>
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
        <img alt="Conocenos" src="<?php echo URL_PREVIEW; ?>assets/dinamic/conocenos/conocenos.jpg" />
      </div>
    </div>
  </section>
  <div class="angle-separator-content">
    <div class="angle-separator-up"></div>
  </div>
  <section class="section-porque-elegirnos">
    <div class="container">
      <div class="box-header">
        <h2> ¿Por qué elegirnos? </h2>
      </div>
      <div class="box-content">
        <?php //foreach($arrPorqueElegirnos as $key => $row): ?> 
        <div class="box-item motivo">
          <div class="box-item-content">
            <div class="box-image">
              <img src="<?php echo URL_PREVIEW; ?>assets/dinamic/porque-elegirnos/nuestros-profesionales.png">
            </div>
            <div class="box-title"> Nuestros profesionales </div>
            <div class="box-action">
              <a target="_blank" href="<?php echo site_url('staff-medico'); ?>" class="btn btn-rounded"> SABER MÁS </a>
            </div>
          </div>
        </div>
        <div class="box-item motivo">
          <div class="box-item-content">
            <div class="box-image">
              <img src="<?php echo URL_PREVIEW; ?>assets/dinamic/porque-elegirnos/nuestra-tecnologia-exclusiva.png">
            </div>
            <div class="box-title"> Nuestra reserva de citas en línea </div>
            <div class="box-action">
              <a target="_blank" href="#" class="btn btn-rounded"> SABER MÁS </a>
            </div>
          </div>
        </div>
        <div class="box-item motivo">
          <div class="box-item-content">
            <div class="box-image">
              <img src="<?php echo URL_PREVIEW; ?>assets/dinamic/porque-elegirnos/nuestras-alianzas-convenios.png">
            </div>
            <div class="box-title"> Nuestras alianzas y convenios </div>
            <div class="box-action">
              <a target="_blank" href="<?php echo site_url('alianzas-y-convenios'); ?>" class="btn btn-rounded"> SABER MÁS </a>
            </div>
          </div>
        </div>
        <?php //endforeach; ?>
      </div>
    </div>
  </section>
  <div class="angle-separator-content">
    <div class="angle-separator-bottom"></div>
  </div>
  <section class="section-testimonio">
    <div class="container">
      <div class="box-header">
        <h2> ¡Nuestros pacientes lo confirman! </h2>
      </div>
      <div class="box-content">
        <?php foreach($arrTestimonios as $key => $row): ?>
          <div class="box-item testimonio wow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
            <div class="box-item-wrap">
              <div class="box-image">
                <img src="<?php echo URL_PREVIEW; ?>assets/dinamic/testimonio/<?php echo $row['foto']; ?>">
              </div>
              <div class="box-info">
                <div class="box-title">
                  <span><?php echo $row['paciente']; ?></span>
                  <img src="assets/images/comillas.png" />
                </div>
                <div class="box-text">
                  <p><?php echo $row['testimonio_html']; ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- <div class="box-action">
        <button type="button" class="btn btn-rounded primary"> VER MÁS TESTIMONIOS </button>
      </div> -->
    </div>
  </section>
  <section class="section-seguro">
    <div class="container">
      <div class="box-header">
        <h2> Seguros </h2>
        <p> Para su tranquilidad trabajamos con las siguientes compañias de seguros </p>
      </div>
      <div class="box-content">
        <div id="prov-seguro" class="owl-carousel"> 
          <?php foreach($arrSeguros as $key => $row): ?> 
            <div class="box-seguro owl-item">
              <div class="box-img">
                <img alt="<?php echo $row['nombre']; ?>" src="<?php echo URL_PREVIEW; ?>assets/dinamic/seguro/<?php echo $row['logo']; ?>" />
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</div>
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
    owlEspec.owlCarousel({
      pagination : false,
      navigation : true,
      items: 4,
      navigationText: [
        "<i class='next fa fa-angle-left'></i>",
        "<i class='prev fa fa-angle-right'></i>"
      ]
    });
    // GALERIA SEGUROS  
    var owlSeg = $("#prov-seguro");
    // console.log($("#prov-seguro"), '$("#prov-seguro");');
    owlSeg.owlCarousel({
      pagination : true,
      navigation : false,
      items: 4,
      autoPlay: true,
      // stopOnHover: true,
      // navigationText: [
      //   "<i class='next fa fa-angle-left'></i>",
      //   "<i class='prev fa fa-angle-right'></i>"
      // ]
      // singleItem : true 
    });
  });

</script>