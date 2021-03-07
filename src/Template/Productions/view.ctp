<li><?= $this->Html->link(__('New Demographic'), ['controller' => 'Demographics', 'action' => 'add']) ?></li>
<div class="container">
    <h3><?= h($production->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($production->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($production->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($production->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demographic') ?></th>
            <td><?= $production->has('demographic') ? $this->Html->link($production->demographic->name, ['controller' => 'Demographics', 'action' => 'view', $production->demographic->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($production->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chapter Numer') ?></th>
            <td><?= $this->Number->format($production->chapter_numer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qualification') ?></th>
            <td><?= $this->Number->format($production->qualification) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($production->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Genres') ?></h4>
        <?php if (!empty($production->genres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($production->genres as $genres): ?>
            <tr>
                <td><?= h($genres->id) ?></td>
                <td><?= h($genres->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Genres', 'action' => 'view', $genres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Genres', 'action' => 'edit', $genres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Genres', 'action' => 'delete', $genres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Titles') ?></h4>
        <?php if (!empty($production->titles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Production Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($production->titles as $titles): ?>
            <tr>
                <td><?= h($titles->id) ?></td>
                <td><?= h($titles->name) ?></td>
                <td><?= h($titles->production_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Titles', 'action' => 'view', $titles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Titles', 'action' => 'edit', $titles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Titles', 'action' => 'delete', $titles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $titles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
