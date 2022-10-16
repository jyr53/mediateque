<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUser $productUser
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Product User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productUser form content">
            <?= $this->Form->create($productUser) ?>
            <fieldset>
                <legend><?= __('Edit Product User') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('product_id');
                    echo $this->Form->control('date_dep', ['empty' => true]);
                    echo $this->Form->control('date_ret', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
