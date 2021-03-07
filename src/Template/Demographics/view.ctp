<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demographic $demographic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demographic'), ['action' => 'edit', $demographic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demographic'), ['action' => 'delete', $demographic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demographic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demographics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demographic'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demographics view large-9 medium-8 columns content">
    <h3><?= h($demographic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($demographic->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demographic->id) ?></td>
        </tr>
    </table>
</div>
