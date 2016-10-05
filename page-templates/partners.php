<?php 

    the_post();

    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && !strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        /* SE NÃO FOR AJAX REDIRECIONA */

        $redirect = get_bloginfo('url') . '/#' . bdq_hash_slug(get_permalink());
        header("Location: $redirect");
        die();
    }

?>

<?php /* Template Name: parceiros */ ?>

<section id="partners">
    <h2>Parceiros</h2>
    <h3>uma boa legenda</h3>
    <div class="row">
      <div class="col-xs-8 col-sm-3 col-md-4">
        <a class="thumbnail">
          <img src="assets/img/parceiro1.png" alt="parceiro 1" class="imagem" style="height: 160px;">
        </a>
      </div>
      <div class="col-xs-8 col-sm-3 col-md-4">
        <a class="thumbnail">
          <img src="assets/img/parceiro2.png" alt="parceiro 2" class="imagem" style="height: 160px;">
        </a>
      </div>
      <div class="col-xs-8 col-sm-3 col-md-4">
        <a class="thumbnail">
          <img src="assets/img/parceiro3.png" alt="parceiro 3" class="imagem" style="height: 160px;">
        </a>
      </div>
      <div class="col-xs-8 col-sm-3 col-md-4">
        <a class="thumbnail">
          <img src="assets/img/parceiro1.png" alt="parceiro 1" class="imagem" style="height: 160px;">
        </a>
      </div>
      <div class="col-xs-8 col-sm-3 col-md-4">
        <a class="thumbnail">
          <img src="assets/img/parceiro2.png" alt="parceiro 2" class="imagem" style="height: 160px;">
        </a>
      </div>
      <div class="col-xs-8 col-sm-3 col-md-4">
        <a class="thumbnail">
          <img src="assets/img/parceiro3.png" alt="parceiro 3" class="imagem" style="height: 160px;">
        </a>
      </div>
    </div>
</section>