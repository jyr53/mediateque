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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productrent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productrent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productrent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productrent form content">
            <?= $this->Form->create($productrent) ?>
            <fieldset>
                <legend><?= __('Edit Productrent') ?></legend>
                <?php
                    echo $this->Form->control('barcode');
                    echo $this->Form->control('genderid');
                    echo $this->Form->control('typeid');
                    echo $this->Form->control('title');
                    echo $this->Form->control('author');
                    echo $this->Form->control('abstract');
                    echo $this->Form->control('id_1');
                    echo $this->Form->control('id_2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
