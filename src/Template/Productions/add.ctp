<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Production $production
 */
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Productions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Demographics'), ['controller' => 'Demographics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demographic'), ['controller' => 'Demographics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Titles'), ['controller' => 'Titles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Title'), ['controller' => 'Titles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
    <?= $this->Form->create($production) ?>
    <fieldset>
        <legend><?= __('Add Production') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('chapter_numer');
            echo $this->Form->control('year');
            echo $this->Form->control('description', ['maxlength' =>400, 'rows'=>12, 'cols' => 30]);
            echo $this->Form->control('qualification');
            echo $this->Form->control('image');
            echo $this->Form->control('demography_id', ['options' => $demographics]);
            echo $this->Form->control('genres._ids', ['options' => $genres, 'size' => 10]);
            echo $this->Form->control('visible', ['options' => ["1"=>1,"0"=>0] ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
