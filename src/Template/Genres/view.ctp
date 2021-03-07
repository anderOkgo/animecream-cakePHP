<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Genre'), ['action' => 'edit', $genre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Genre'), ['action' => 'delete', $genre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Genres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productions'), ['controller' => 'Productions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Production'), ['controller' => 'Productions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="genres view large-9 medium-8 columns content">
    <h3><?= h($genre->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($genre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($genre->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Productions') ?></h4>
        <?php if (!empty($genre->productions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Chapter Numer') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Qualification') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Demography Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($genre->productions as $productions): ?>
            <tr>
                <td><?= h($productions->id) ?></td>
                <td><?= h($productions->name) ?></td>
                <td><?= h($productions->chapter_numer) ?></td>
                <td><?= h($productions->year) ?></td>
                <td><?= h($productions->description) ?></td>
                <td><?= h($productions->qualification) ?></td>
                <td><?= h($productions->image) ?></td>
                <td><?= h($productions->demography_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Productions', 'action' => 'view', $productions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Productions', 'action' => 'edit', $productions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productions', 'action' => 'delete', $productions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
