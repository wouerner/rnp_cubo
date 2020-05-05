<div id="cubo"></div>

<script>
function inicializar() {
  widget = NasNuvensWidget.new(
    {
      container : '#cubo' ,
      cubo: {
      corFundo: 'transparent',  //padrão: transparent
        corBlocos: '#000'  //padrão: #000
      }
    }
  );

  widget.renderCuboServicos() ;
}

inicializar();
</script>

<style>
#root {
}

#rnp-top-nav{
  width: 1000px !important;
  margin: 0 auto;
  margin-top: 10px;
}
</style>

<?php
drupal_add_js('https://nasnuvens.gsc-hmg.rnp.br/navbar/widget.js', array(
  'type' => 'external',
  'scope' => 'header'
));

/* drupal_add_js(drupal_get_path('module', 'rnp_cubo') . '/dist/cubo.js', array( */
/*   'type' => 'file', */
/*   'scope' => 'footer' */
/* )); */

/* drupal_add_js(drupal_get_path('module', 'rnp_cubo') . '/dist/chunk-vendors.js', array( */
/*   'type' => 'file', */
/*   'scope' => 'footer' */
/* )); */

/* drupal_add_js(drupal_get_path('module', 'rnp_cubo') . '/dist/chunk-common.js', array( */
/*   'type' => 'file', */
/*   'scope' => 'footer' */
/* )); */

/* drupal_add_css(drupal_get_path('module', '/dist/chunk-vendors.css'), */
/*   array('type' => 'file', */
/*   'scope' => 'footer' */
/*   ) */
/* ); */

/* drupal_add_css( */
/*   drupal_get_path('module', 'rnp_cubo') . '/dist/cubo.css', */
/*   array('type' => 'file', */
/*   'scope' => 'footer' */
/*   ) */
/* ); */
?>
