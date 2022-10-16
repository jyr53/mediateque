<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($user->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($user->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= h($user->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carte') ?></th>
                    <td><?= $user->carte === null ? '' : $this->Number->format($user->carte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= $user->tel === null ? '' : $this->Number->format($user->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Rule') ?></th>
                    <td><?= $user->id_rule === null ? '' : $this->Number->format($user->id_rule) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Product User') ?></h4>
                <?php if (!empty($user->product_user)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Id 1') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Date Dep') ?></th>
                            <th><?= __('Date Ret') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->product_user as $productUser) : ?>
                        <tr>
                            <td><?= h($productUser->id) ?></td>
                            <td><?= h($productUser->id_1) ?></td>
                            <td><?= h($productUser->user_id) ?></td>
                            <td><?= h($productUser->product_id) ?></td>
                            <td><?= h($productUser->date_dep) ?></td>
                            <td><?= h($productUser->date_ret) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductUser', 'action' => 'view', $productUser->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductUser', 'action' => 'edit', $productUser->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductUser', 'action' => 'delete', $productUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productUser->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
