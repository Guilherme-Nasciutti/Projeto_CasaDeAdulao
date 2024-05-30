<header>
    <h2>Administradores <small>listagem</small></h2>
    <?= $this->Html->link('Novo administrador', ['controller' => 'Users', 'action' => 'add']); ?>
</header>


<?= $this->Html->link('Novo usuário', ['controller' => 'Users', 'action' => 'add']); ?>


<?= $this->Html->link('<i class="fa-solid fa-eye" style="color: #0069b3;"></i>', ['_name' => 'visualizar_users', 'id' => $user->id], ['escape' => false]); ?>

<?= $this->Html->link('<i class="fa-solid fa-pen-to-square" style="color: #ff6600;"></i>', ['_name' => 'editar_users', 'id' => $user->id], ['escape' => false]); ?>

<?= $this->Form->postLink(__('<i class="fa-solid fa-trash fa-rotate-by" style="color: #d6002f; --fa-rotate-angle: 0deg;""></i>'), ['action' => 'delete', $user->id], ['escape' => false, 'confirm' => __('Tem certeza que deseja apagar o perfil {0}?', $user->full_name)]); ?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password_reset_token') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->full_name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->password_reset_token) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
