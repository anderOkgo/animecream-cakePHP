<link rel="stylesheet" href="/css/app2.css">
<div class=" responsivegrid flex-container">
	<section class="col-xs-12 col-md-4 targetas ">
		<div id="paquete" class="paquete ">
			<?php $i=0;?>  
			<?php foreach ($result as $produccion): ?>
				<div class="linea">
					<div id="capa1">
						<img alt="<?= 'Anime ' .h($produccion->name) ?>" src=<?= h($produccion->image) ?> class=" img-thumbnail img-rounded" style="width:150px">
						<div id="capa2"  class="" >
							<div class="cent"><?= '#'. h($produccion->rank). ". " . h($produccion->name) ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<span  class="cento insetshadow foott">Fuente: animecream.com</span>
		</div>
	</section>
</div>

<section class="col-xs-12 col-md-12 ">
	<button id="footing"  class="form-control" type="button"  data-toggle="modal" data-target="#myModal" class="form-control  data-toggle="modal" data-target="#myModal"/>Ver Imagen</button>
	<button id="crearimagen"  class="form-control" />Descargar Imagen</button>
	<button  class="form-control" onclick="cambiarG();">Regresar a modo lista</button>

	<div class="paginator cent">
		<ul class="pagination">
			<?= $this->Paginator->prev('< ' . __(' Anterior')) ?>
			<?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
			<?= $this->Paginator->next(__('Siguiente ') . ' >') ?>
		</ul>
		<hr>
		<p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, total:  {{count}} Resultados')]) ?></p>
	</div>
</section>


<aside class="col-xs-12 col-md-12 ">
	<?php echo  $this->element('lateral'); ?>
</aside>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Imagen</h4>
        </div>
        <div class="modal-body responsivegrid">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script src="/js/app2.js"></script>








