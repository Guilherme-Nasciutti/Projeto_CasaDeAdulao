<header>
    <h2>Administradores <small>listagem</small></h2>
    <?= $this->Html->link('Novo administrador', ['controller' => 'Users', 'action' => 'add']); ?>
</header>

<main>
    <?php if (count($users) > 0) : ?>
        <table class="table_list">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= $this->Paginator->sort('full_name', 'Nome completo'); ?><i class="bi bi-arrow-down-up"></i></th>
                    <th><?= $this->Paginator->sort('email', 'E-mail'); ?><i class="bi bi-arrow-down-up"></i></th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->id); ?></td>
                        <td><?= h($user->full_name); ?></td>
                        <td><?= h($user->email); ?></td>

                        <td class="actions">
                            <?= $this->Html->link('<i class="bi bi-eye"></i>', ['_name' => 'visualizar_users', 'id' => $user->id], ['escape' => false]); ?>

                            <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['_name' => 'editar_users', 'id' => $user->id], ['escape' => false]); ?>

                            <?= $this->Form->postLink(__('<i class="bi bi-trash"></i>'), ['action' => 'delete', $user->id], ['escape' => false, 'confirm' => __('Tem certeza que deseja apagar o administrador {0}?', $user->full_name)]); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="list_empty">Nenhum administrador cadastrado!</p>
    <?php endif; ?>

    <?php if (count($users) > 0) : ?>
        <?= $this->element('pagination'); ?>
    <?php endif; ?>
</main>
