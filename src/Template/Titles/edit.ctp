<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Title $title
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $title->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $title->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Titles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productions'), ['controller' => 'Productions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Production'), ['controller' => 'Productions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="titles form large-9 medium-8 columns content">
    <?= $this->Form->create($title) ?>
    <fieldset>
        <legend><?= __('Edit Title') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('production_id', ['options' => $productions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
