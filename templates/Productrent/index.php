<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Productrent> $productrent
 */
?>
<div class="productrent index content">
    <?= $this->Html->link(__('New Productrent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productrent') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('barcode') ?></th>
                    <th><?= $this->Paginator->sort('genderid') ?></th>
                    <th><?= $this->Paginator->sort('typeid') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('author') ?></th>
                    <th><?= $this->Paginator->sort('abstract') ?></th>
                    <th><?= $this->Paginator->sort('id_1') ?></th>
                    <th><?= $this->Paginator->sort('id_2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productrent as $productrent): ?>
                <tr>
                    <td><?= $this->Number->format($productrent->id) ?></td>
                    <td><?= $productrent->barcode === null ? '' : $this->Number->format($productrent->barcode) ?></td>
                    <td><?= $productrent->genderid === null ? '' : $this->Number->format($productrent->genderid) ?></td>
                    <td><?= $productrent->typeid === null ? '' : $this->Number->format($productrent->typeid) ?></td>
                    <td><?= h($productrent->title) ?></td>
                    <td><?= h($productrent->author) ?></td>
                    <td><?= h($productrent->abstract) ?></td>
                    <td><?= $productrent->id_1 === null ? '' : $this->Number->format($productrent->id_1) ?></td>
                    <td><?= $productrent->id_2 === null ? '' : $this->Number->format($productrent->id_2) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productrent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productrent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productrent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productrent->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
