
<div class="container">
    <div class="col-md-8 col-md-offset-2">
    <?= $this->Form->create($production) ?>
    <fieldset>
        <legend><?= __('Editar Produccion') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('chapter_numer');
            echo $this->Form->control('year');
            echo $this->Form->control('description', ['maxlength' => 400, 'rows'=>12, 'cols' => 30]);
            echo $this->Form->control('qualification');
            echo $this->Form->control('image');
            echo $this->Form->control('demography_id', ['options' => $demographics]);
            echo $this->Form->control('genres._ids', ['options' => $genres, 'size' => 10]);
            echo $this->Form->control('visible', ['options' => ["0","1"] ]);
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
<hr>