<?php

use App\Controller\EducationENUM;
?>

<header>
    <h2>Instrutores <small>listagem</small></h2>
    <?= $this->Html->link('Novo instrutor', ['controller' => 'Instructors', 'action' => 'add']); ?>
</header>

<main>
    <?php if (count($instructors) > 0) : ?>
        <table class="table_list">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th class="list_phone"><?= $this->Paginator->sort('phone', 'Telefone'); ?><i class="bi bi-arrow-down-up"></i></th>
                    <th class="list_table"><?= $this->Paginator->sort('education', 'Formação'); ?><i class="bi bi-arrow-down-up"></i></th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($instructors as $instructor) : ?>
                    <tr>
                        <td><?= h($instructor->person->first_name); ?></td>
                        <td class="list_phone"><?= h($instructor->phone); ?></td>
                        <td class="list_table"><?= EducationENUM::findConstants($instructor->education); ?></td>

                        <td class="actions">
                            <?= $this->Html->link('<i class="bi bi-eye"></i>', ['_name' => 'visualizar_instructors', 'id' => $instructor->id], ['escape' => false]); ?>

                            <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['_name' => 'editar_instructors', 'id' => $instructor->id], ['escape' => false]); ?>

                            <?= $this->Form->postLink(__('<i class="bi bi-trash"></i>'), ['action' => 'delete', $instructor->id], ['escape' => false, 'confirm' => __('Tem certeza que deseja apagar o instrutor {0}?', $instructor->person->first_name)]); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="list_empty">Nenhum instrutor cadastrado!</p>
    <?php endif; ?>

    <?php if (count($instructors) > 0) : ?>
        <?= $this->element('pagination'); ?>
    <?php endif; ?>
</main>
