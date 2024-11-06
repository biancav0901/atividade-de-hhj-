<?php include 'includes/db.php'; ?>

<div class="container">
    <h2>Gerenciar Tarefas</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Data de Criação</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Exibe as tarefas cadastradas
            include 'includes/db.php';
            $stmt = $pdo->query("SELECT tarefas.*, usuarios.nome AS usuario_nome FROM tarefas JOIN usuarios ON tarefas.id_usuario = usuarios.id");
            while ($tarefa = $stmt->fetch()) {
                echo "<tr>
                        <td>{$tarefa['nome']}</td>
                        <td>{$tarefa['descricao']}</td>
                        <td>{$tarefa['status']}</td>
                        <td>{$tarefa['data_criacao']}</td>
                        <td>{$tarefa['usuario_nome']}</td>
                        <td><a href='#'>Editar</a> | <a href='#'>Excluir</a></td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>


