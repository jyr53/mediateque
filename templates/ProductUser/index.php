<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProductUser> $productUser
 */
?>
<div class="productUser index content">
    <?= $this->Html->link(__('New Product User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_1') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('date_dep') ?></th>
                    <th><?= $this->Paginator->sort('date_ret') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productUser as $productUser): ?>
                <tr>
                    <td><?= $this->Number->format($productUser->id) ?></td>
                    <td><?= $this->Number->format($productUser->id_1) ?></td>
                    <td><?= $productUser->has('user') ? $this->Html->link($productUser->user->id, ['controller' => 'Users', 'action' => 'view', $productUser->user->id]) : '' ?></td>
                    <td><?= $productUser->product_id === null ? '' : $this->Number->format($productUser->product_id) ?></td>
                    <td><?= h($productUser->date_dep) ?></td>
                    <td><?= h($productUser->date_ret) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productUser->id)]) ?>
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
