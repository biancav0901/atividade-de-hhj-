<?php include 'includes/header.php'; ?>

<div class="container">
    <h2>Cadastro de Tarefa</h2>
    <form action="actions/cadastrar_tarefa.php" method="POST">
        <label for="nome">Nome da Tarefa:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>

        <label for="id_usuario">Usuário:</label>
        <select id="id_usuario" name="id_usuario" required>
            <?php
            // Exibe os usuários cadastrados
            include 'includes/db.php';
            $stmt = $pdo->query("SELECT * FROM usuarios");
            while ($usuario = $stmt->fetch()) {
                echo "<option value='{$usuario['id']}'>{$usuario['nome']}</option>";
            }
            ?>
        </select>

        <button type="submit">Cadastrar Tarefa</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>


