<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $genre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productions'), ['controller' => 'Productions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Production'), ['controller' => 'Productions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="genres form large-9 medium-8 columns content">
    <?= $this->Form->create($genre) ?>
    <fieldset>
        <legend><?= __('Edit Genre') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('productions._ids', ['options' => $productions, 'size' => 10]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
