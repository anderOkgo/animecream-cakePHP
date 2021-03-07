<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demographic $demographic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $demographic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $demographic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Demographics'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="demographics form large-9 medium-8 columns content">
    <?= $this->Form->create($demographic) ?>
    <fieldset>
        <legend><?= __('Edit Demographic') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
