<?php include 'includes/header.php'; ?>

<div class="container">
    <h2>Cadastro de Usuário</h2>
    <form action="actions/cadastrar_usuario.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>


