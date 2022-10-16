<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productrent $productrent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Productrent'), ['action' => 'edit', $productrent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Productrent'), ['action' => 'delete', $productrent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productrent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productrent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Productrent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productrent view content">
            <h3><?= h($productrent->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($productrent->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Author') ?></th>
                    <td><?= h($productrent->author) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abstract') ?></th>
                    <td><?= h($productrent->abstract) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productrent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Barcode') ?></th>
                    <td><?= $productrent->barcode === null ? '' : $this->Number->format($productrent->barcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genderid') ?></th>
                    <td><?= $productrent->genderid === null ? '' : $this->Number->format($productrent->genderid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeid') ?></th>
                    <td><?= $productrent->typeid === null ? '' : $this->Number->format($productrent->typeid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id 1') ?></th>
                    <td><?= $productrent->id_1 === null ? '' : $this->Number->format($productrent->id_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id 2') ?></th>
                    <td><?= $productrent->id_2 === null ? '' : $this->Number->format($productrent->id_2) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
