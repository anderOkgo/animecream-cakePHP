<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
header("Last-Modified: " . "Wed, 07 October 2020 17:55:10 GMT");
/*if($_SERVER['SERVER_PORT'] != '443') {
  $url=str_replace("www.", "", $_SERVER['HTTP_HOST']);
  $url=$url.$_SERVER['REQUEST_URI'];
  header('Location: https://www.'.$url  ); exit(); 

}*/

/*header($_SERVER['SERVER_PROTOCOL'].' 304 Not Modified');
header("HTTP/1.1 304 Not Modified");

if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])){
    // Comprobar si el cache del navegador coincide con el modify time
    if($last_modify_time == strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])){
        // Enviar un header 304, sin contenido
        header("HTTP/1.1 304 Not Modified");
        exit;
    }
}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Animecream - Las mejores RECOMENDACIONES de anime</title>
  <!-- adsense -->
<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
<script>
  /*(adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2618982977638862",
    enable_page_level_ads: true
  });*/
</script>

<!-- <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script> -->

<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
<!--   <script>
  	if (location.protocol != 'https:')
	{
	 location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
	}
  </script> -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113312665-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113312665-1');
  </script>
    <?= $this->Html->charset() ?>
    <meta property="og:title" content="Animecream">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.animecream.com">
    <meta property="og:image" content="https://www.animecream.com/img/tarjeta/AnimecreamTargetaSEO.png">
    <meta property="og:image:width" content="417">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="♡ Top 100 anime all time, Veo que estás buscando RECOMENDACIONES de anime. [ shonen - shojo - romántico ♡ etc ], ¿Quizás los mejores animes de y desde siempre?.  Tenemos todas las clasificaciones, Top 10 - recomendaciones de lo mejor cada año, etc. ¡ADEMAS!  ✏ Crea tus propias listas e imágenes de estas, guárdalas, compártelas y MUCHO MAS...  ¡Dale un vistazo!  se que te va a gustar.  ¡VAMOS! entra y nos cuentas tu experiencia y si has encontrado tus mejores animes, [BIENVENID@S].">
    
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='apple-mobile-web-app-title' content='Animecream'>
    <meta name='application-name' content='Animecream'>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Animecream">
    <meta name="twitter:site" content="https://www.animecream.com">
    <meta name="twitter:creator" content="@AnderOkgo">
    <meta name="twitter:image" content="https://www.animecream.com/img/tarjeta/AnimecreamTargetaSEO.png">
    <meta name="twitter:description" content="♡ Top 100 anime all time, Veo que estás buscando RECOMENDACIONES de anime. [ shonen - shojo - romántico ♡ etc ], ¿Quizás los mejores animes de y desde siempre?.  Tenemos todas las clasificaciones, Top 10 - recomendaciones de lo mejor cada año, etc. ¡ADEMAS!  ✏ Crea tus propias listas e imágenes de estas, guárdalas, compártelas y MUCHO MAS...  ¡Dale un vistazo!  se que te va a gustar.  ¡VAMOS! entra y nos cuentas tu experiencia y si has encontrado tus mejores animes, [BIENVENID@S].">

    <meta name="Title" CONTENT="Animecream Las mejores RECOMENDACIONES de anime">
    <meta name="Author" CONTENT="Ander Innervideo">
    <meta name="Subject" CONTENT="Animecream">
    <meta name="Language" CONTENT="Spanish">
    <meta name="theme-color" content="#0a4656">
    <meta name="Revisit" CONTENT="7 days">
    <meta name="Distribution" CONTENT="Global">
    <meta name="robots" content="all"/>
    <meta name="description" content="♡ Top 100 anime all time, Veo que estás buscando RECOMENDACIONES de anime. [ shonen - shojo - romántico ♡ etc ], ¿Quizás los mejores animes de y desde siempre?.  Tenemos todas las clasificaciones, Top 10 - recomendaciones de lo mejor cada año, etc. ¡ADEMAS!  ✏ Crea tus propias listas e imágenes de estas, guárdalas, compártelas y MUCHO MAS...  ¡Dale un vistazo!  se que te va a gustar.  ¡VAMOS! entra y nos cuentas tu experiencia y si has encontrado tus mejores animes, [BIENVENID@S]."/>

    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.ico">
    <link rel="manifest" href="/manifest.json">
    <link rel="canonical" href="https://www.animecream.com/producciones"/>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['bootstrap.min','animecream','select2'])?>
    <?= $this->Html->script(['jquery-2.2.4.min','jquery-ui.min','bootstrap.min','animecream','select2'])?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav>
    <div class="container-fluid navbar-inverse navbar-fixed-top">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?= $this->Html->link(__('Animecream'), ['controller' => 'Productions', 'action' => 'app'],['class'=>'navbar-brand']) ?></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tops Décadas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('Top Animes 70s'), ['controller' => 'Productions', 'action' => 'app',"70s"]) ?></li>
              <li><?= $this->Html->link(__('Top Animes 80s'), ['controller' => 'Productions', 'action' => 'app',"80s"]) ?></li>
              <li><?= $this->Html->link(__('Top Animes 90s'), ['controller' => 'Productions', 'action' => 'app',"90s"]) ?></li>
              <li><?= $this->Html->link(__('Top Animes 00s'), ['controller' => 'Productions', 'action' => 'app',"00s"]) ?></li>
              <li><?= $this->Html->link(__('Top Animes 10s'), ['controller' => 'Productions', 'action' => 'app',"10s"]) ?></li>
              <li role="separator" class="divider"></li>
              <li><a href="/especiales/">Especiales</a></li>
            </ul>
          </li>
          <li><a aria-label="sigueme en" href="https://www.youtube.com/channel/UC1tCm6nZothAhbp_9dFzmNQ" target="_blank" rel="noopener">YouTube<span class="sr-only">(current)</span></a></li>
          <li><a href="https://www.animecream.com/especiales/">Especiales</a></li>
           <?php if(isset($current_user)): ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menú <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Producciones'), ['controller' => 'Productions', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Generos'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Titulos'), ['controller' => 'Titles', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Demografias'), ['controller' => 'Demographics', 'action' => 'index']) ?></li>
            </ul>
          </li>
          <?php endif; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
           <a href="/politica-privacidad.html">Política de Privacidad</a>
         </li>
         <li>
         	<a href="/acerca.html">Acerca de</a>
         </li>
         <li>
         	<a href="/especiales/contacto/">Contacto</a>
         </li>
        <?php if(isset($current_user)): ?>
          <li>
           <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?>
         </li>
        <?php else:  ?>
          
        <?php  endif; ?>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="container-fluid navbar-inverse">
       <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand " href="#">Animecream</a>
      </div>
  </div> 
  <div class="jumbotron text-center">
  	<h1 class="insetshadow">Animecream<span class="rotar"><a aria-label="sigueme en" href="https://www.youtube.com/channel/UC1tCm6nZothAhbp_9dFzmNQ" target="_blank" rel="noopener"></a></span></h1>
  	<p>¡Las mejores RECOMENDACIONES de anime!</p>
  </div>

  <script>
      if('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js', { scope: '/' })
          .then(function(registration) {
                console.log('Service Worker Registered');
          });

        navigator.serviceWorker.ready.then(function(registration) {
           console.log('Service Worker Ready');
        });
      }
    </script>
  

    <?= $this->Flash->render() ?>
    <div class="container">
            <?= $this->fetch('content')?>
            <?= $this->Html->css(['jquery-ui.min']) ?>
            <?= $this->Html->script(['filesaver','html2canvas']) ?>
    </div>
<footer class="footer">
	<div class="navbar-inverse">
		<p class="text-muted">Copyright © 2018 Animecream <span id="Anderin">@anderOkgo</span>  Todos los derechos reservados.</p>
	</div>
</footer>
</body>
</html>