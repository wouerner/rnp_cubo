<div id="rnp-top-nav">
  <div id="root"></div>
</div>

<script>
function inicializar() {

  widget = NasNuvensWidget.new(
    {
      container : '#root' ,
      nasnuvens: true,
      origem: {
        site: "https://pocresellergw.nasnuvens.rnp.br/",
        loginRedirect: 'https://shib-uat.nasnuvens.rnp.br/Shibboleth.sso/Login?entityID=_REDIRECT_ENTITYID_&target=https://shib-uat.nasnuvens.rnp.br/jc-idp-connector-0.0.1-SNAPSHOT/login',
      }
    });

  widget.render();
}

inicializar();

/* Exemplo da nossa aplicação FileSender: */

/* widget = NasNuvensWidget.new({ */
/* 	container: '#navbar', */
/* 	origem: { */
/* 		nome: 'FileSender RNP', */
/* 		logo: 'https://filesender.rnp.br/images/RPN_filesender.png', */
/* 		site: 'https://filesender.rnp.br/', */
/* 		loginRedirect: 'https://filesender.rnp.br/Shibboleth.sso/DS?entityID=_REDIRECT_ENTITYID_&target=https://filesender.rnp.br/', */
/* 		logoutRedirect: 'https://filesender.rnp.br/Shibboleth.sso/Logout?return=https://filesender.rnp.br/' */
/* 	} */
/* }); */
/* widget.render() */


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
?>
