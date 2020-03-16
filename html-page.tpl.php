<!--div id="cubo"></div-->
<div id="widget"></div>

<script>
function inicializar() {
  widget = NasNuvensWidget.new(
    {
      container : '#widget' ,
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
