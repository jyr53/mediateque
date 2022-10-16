<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gender $gender
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gender'), ['action' => 'edit', $gender->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gender'), ['action' => 'delete', $gender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gender->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gender'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gender'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gender view content">
            <h3><?= h($gender->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom De Genre') ?></th>
                    <td><?= h($gender->nom_de_genre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gender->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
