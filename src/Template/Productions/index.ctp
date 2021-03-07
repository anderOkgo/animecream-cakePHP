<li><?= $this->Html->link(__('Agregar'), ['controller' => 'Productions', 'action' => 'add']) ?></li>
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Producciones</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chapter_numer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qualification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demography_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
                        <?php foreach ($productions as $production): ?>
            <tr>
                <td><?= $this->Number->format($production->id) ?></td>
                <td><?= h($production->name) ?></td>
                <td><?= $this->Number->format($production->chapter_numer) ?></td>
                <td><?= h($production->year) ?></td>
                <td><?= $this->Number->format($production->qualification) ?></td>
                <td><?= h($production->image) ?></td>
                <td><?= $production->has('demographic') ? $this->Html->link($production->demographic->name, ['controller' => 'Demographics', 'action' => 'view', $production->demographic->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $production->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $production->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $production->id], ['confirm' => __('Are you sure you want to delete # {0}?', $production->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
</div>

