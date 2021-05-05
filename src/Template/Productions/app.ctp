<?php 
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
?>
<script>
  $('#widget').draggable();
  $( "#sortable" ).disableSelection();
</script>
<link rel="stylesheet" href="/css/app.css">


<div id="dialog-confirm" title="Borrar Lista"></div>
<section class="col-xs-12 col-md-8 ">
  <div class="targetalateral">
    <div class="bs-example" data-example-id="simple-nav-stacked"> 
<!--       <ul class="nav nav-pills nav-stacked nav-pills-stacked-example"> -->  
        <div class="row">
          <div class="col-lg-12">
            <div class="input-group">
              <label class="principalPage" for="InpBuscar">Buscar</label>
              <input id ="InpBuscar" type="text" class="" placeholder="Buscar Anime" style="width:100%">
              <span class="input-group-btn">
                <button id="btnBuscar"  class="btn btn-default">Buscar</button>
                <!-- <button id="btnSuprTop"  class="btn btn-default">Top 100!</button> -->
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
          <div  class="targetabusqueda">
              <!-- <div class="cabecera">Búsqueda por Género</div> -->
              <div class="responsivegrid">
                <div id="panelBusqueda" class="centrar2 flexline">
                  <?php foreach ($generos as $genero): ?>
                    <button class=" btn label" ><?= $this->Html->link((h($genero->name)), ['controller' => 'Productions', 'action' => 'app', h($genero->slug)]) ?></button>
                  <?php endforeach; ?>
                  <p></p>
                </div>
              </div>
          </div>
        </div><!-- /.row -->
      </div>
    </div>
  <p></p>
  <hr>
  <?php $i=0;?>	
  <div class="centrar2"><h2>Mejores animes <?= h(str_replace("-", " ",$unico)); ?></h2></div>
  <?php foreach ($result as $index => $produccion): ?>
    <div class="compactar">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href=#<?= h($produccion->id.'0') ?> aria-controls="<?= h($produccion->id).'0' ?>" role="tab" data-toggle="tab">Info</a></li>
        <li class="hidden-lg hidden-md hidden-sm" role="presentation"><a href=#<?= h($produccion->id).'1' ?>  aria-controls="<?= h($produccion->id).'1' ?>" role="tab" data-toggle="tab">Descripción</a></li>
    </ul>
    </div>
    <div class="tab-content">
        <div role="tabpanel" id=<?= h($produccion->id.'0') ?> class="tab-pane active">
            <div class="targeta center">
                <div class="media">
                    <div class="media-left media-top">
                        <img alt="<?= 'Anime ' .h($produccion->name) ?>" src="<?= h($produccion->image) ?>" class="img-thumbnail img-rounded media-object" style="width:150px; height: 230px;">
                    </div>
                    <div class="media-body">
                      <h3 class="media-heading"><span class="rank"><?= '#'. h($produccion->rank) . '.';?></span> <?= h($produccion->name) ?>:</h3><span class="badge"></span>
                      <p class="hidden-xs-down " style="text-align:justify;"><?= h($produccion->description) ?></p>
                      <hr class="hidden-xs-down">
                      <?php foreach ($produccion->genres as $genero): ?>
                        <button class=" btn label" ><?= $this->Html->link((h($genero->name)), ['controller' => 'Productions', 'action' => 'app', h($genero->slug)]) ?></button>
                    <?php endforeach; ?>
                    <span class="label labelg label-success "><?= $this->Html->link((h($produccion->demographic->name)), ['controller' => 'Productions', 'action' => 'app', h($produccion->demographic->slug)]) ?></span>
                    <span class="label labelg"><?= $this->Html->link("Año: ".(h($produccion->year)), ['controller' => 'Productions', 'action' => 'app', h($produccion->year)]) ?></span>
                    <?php
                      $id2=  $produccion->chapter_numer;

                      if ($id2 >= 1 and $id2 <= 6 ) {
                        $id='entre-1-6-capitulos';
                      }elseif ($id2 >= 7 and $id2 <= 13 ) {
                        $id='entre-7-13-capitulos';
                      }elseif ($id2 >= 14 and $id2 <= 26 ) {
                        $id='entre-14-26-capitulos';
                      }elseif ($id2 >= 27 and $id2 <= 52 ) {
                        $id='entre-27-52-capitulos';
                      }elseif ($id2 >= 53 and $id2 <= 100 ) {
                        $id='entre-53-100-capitulos';
                      }elseif ($id2 >= 101 and $id2 <= 200 ) {
                        $id='entre-101-200-capitulos';
                      }elseif ($id2 >= 201 and $id2 <= 10000 ) {
                        $id='mas-de-200-capitulos';
                      }else{$id='mas-de-200-capitulos';}
                    ?>
                    <span class="label labelg label-primary"><?= $this->Html->link("Episodios: ".(h($produccion->chapter_numer)), ['controller' => 'Productions', 'action' => 'app', h($id)]) ?></span>
                    <button  class="leer label  label-default">Leer en voz alta</button>
                    <span><span numero=<?= h($produccion->id) ?> nombre="<?= h($produccion->name) ?>" class="label  label-success ">Agregar a mi lista</span></span>

                    <?php if(isset($current_user)): ?>
                    <button class=" btn label" ><?= $this->Html->link(__('editar'), ['controller' => 'Productions', 'action' => 'edit',$produccion->id]) ?></button>
                    <?php endif ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div role="tabpanel" id=<?= h($produccion->id).'1' ?> class="tab-pane" >
      <div class="targeta centrar">
                <div class="media">
                <h4 class="media-heading"><?= h($produccion->name) ?></h4>
                    <div class="">
                    <p class=""><?= h($produccion->description) ?></p>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<?php endforeach; ?>




<button id="btnCambiarCuadricula" class="form-control">Cambiar a modo cuadrícula</button>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __(' Anterior')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('Siguiente ') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, total:  {{count}} Resultados')]) ?></p>

</div>
</section>
<aside class="col-xs-12 col-md-4 ">
	<?php echo  $this->element('lateral'); ?>
</aside>
<script src="/js/app.js"></script>

<script>
	/*(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));*/
</script>
<script>
   $("#btnSuprTop").click(function() {
    buscartop();
   });

 <?php foreach ($pro as $genero): 
     $array[] = '"'.($genero->name).'"';            
  endforeach; 
 $var = implode(",", $array); ;
  ?>



   $('#InpBuscar').select2({
            placeholder: "Buscar Anime",
            allowClear: true,
            tags: [<?= $var; ?>]
        });

    function buscartop(){
    window.location.href = '/producciones/top100';
    }
</script>

<div class="col-xs-12 col-md-8 ">
	<div class="targetalateral">
		<div class="bs-example" data-example-id="simple-nav-stacked"> 
			<div class="fb-comments" data-href= <?= $host."/productions/app/".h($unico) ?> data-width="100%" data-numposts="50" data-mobile="true"></div>
		</div>
	</div>
</div>
