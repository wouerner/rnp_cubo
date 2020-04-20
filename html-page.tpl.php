<!--div id="cubo"></div-->
<!--div id="widget"></div-->

<div id="rnp-top-nav">
  <div id="root"></div>
</div>

<script>
/* function inicializar() { */
/*   widget = NasNuvensWidget.new( */
/*     { */
/*       container : '#widget' , */
/*       cubo: { */
/*       corFundo: 'transparent',  //padrão: transparent */
/*         corBlocos: '#000'  //padrão: #000 */
/*       } */
/*     } */
/*   ); */

/*   widget.renderCuboServicos() ; */
/* } */

/* inicializar(); */
</script>

<script>
function inicializar() {
  widget = NasNuvensWidget.new(
    {
      //seletor CSS do container a ser utilizado para renderizar o widget
      container : '#root' ,
      //site de origem (que está utilizando o widget)
      origem: {
        //nome utilizado em alguns pontos do widget e integração com outros serviços
        nome: "Conferência Web",
        //URL do logo tipo do site de origem
        logo: "https://nasnuvens.gsc-hmg.rnp.br/img-servicos-temp/confweb.png",
        //URL do site de origem, utilizado ao clicar na logo e em alguns fluxos da navbar
        site: "https://conferenciaweb.rnp.br/",
        //URL a ser utilizada pelo serviço de autenticação para enviar o redirecionamento pós-login,
        //se não for informado será utilizado o atributo "site" da configuração.
        //Exemplo com placeholder do EntityID recuperado da sessão CAFe:
        //https://conferenciaweb.rnp.br/?idp=_REDIRECT_ENTITYID_
        loginRedirect: null,
        //URL de redirect após o logout do serviço de autenticação,
        //se não for informado será utilizado o atributo "site" da configuração.
        logoutRedirect: null
      }
    });

  widget.render();
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
