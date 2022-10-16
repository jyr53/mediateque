<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUser $productUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product User'), ['action' => 'edit', $productUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product User'), ['action' => 'delete', $productUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productUser view content">
            <h3><?= h($productUser->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $productUser->has('user') ? $this->Html->link($productUser->user->id, ['controller' => 'Users', 'action' => 'view', $productUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id 1') ?></th>
                    <td><?= $this->Number->format($productUser->id_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $productUser->product_id === null ? '' : $this->Number->format($productUser->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Dep') ?></th>
                    <td><?= h($productUser->date_dep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Ret') ?></th>
                    <td><?= h($productUser->date_ret) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
