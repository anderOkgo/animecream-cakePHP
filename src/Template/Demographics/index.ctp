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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demographics as $demographic): ?>
            <tr>
                <td><?= $this->Number->format($demographic->id) ?></td>
                <td><?= h($demographic->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demographic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demographic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demographic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demographic->id)]) ?>
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
