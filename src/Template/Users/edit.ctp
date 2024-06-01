<header>
    <h2>Administradores <small>editar</small></h2>
    <?= $this->Html->link('Voltar', ['controller' => 'Users', 'action' => 'index']); ?>
</header>

<main>
    <?= $this->Form->create($user); ?>

    <?= $this->Form->control('full_name', ['label' => 'Nome completo']); ?>
    <?= $this->Form->control('email', ['label' => 'E-mail', 'placeholder' => 'exemplo@email.com']); ?>

    <div class="container_fields">
        <?= $this->Form->control('password', ['label' => 'Senha', 'placeholder' => 'No mínimo 06 caracteres', 'value' => '']); ?>
        <?= $this->Form->control('confirm_password', ['label' => 'Confimar senha', 'placeholder' => 'Repita a senha']); ?>
    </div>

    <?= $this->Form->button('Editar', ['class' => 'btn_sumit btn_edit']); ?>
    <?= $this->Form->end(); ?>
</main>
