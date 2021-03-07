<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Usuarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('production_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titles as $title): ?>
            <tr>
                <td><?= $this->Number->format($title->id) ?></td>
                <td><?= h($title->name) ?></td>
                <td><?= $title->has('production') ? $this->Html->link($title->production->name, ['controller' => 'Productions', 'action' => 'view', $title->production->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $title->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $title->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $title->id], ['confirm' => __('Are you sure you want to delete # {0}?', $title->id)]) ?>
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
