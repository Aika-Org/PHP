<h2>Login</h2>
    <form method="post" action="login.php">
        <div class="mb-3">
            <label>Usuário:</label>
            <input type="text" name="usuario" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha:</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</body>
</html>


<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o usuário e a senha estão corretos
    if ($_POST["usuario"] == "usuario" && $_POST["senha"] == "senha") {
        // Redireciona para a página de boas-vindas
        header("Location: novo-contato.php");
        exit;
    } else {
        // Exibe mensagem de erro se as credenciais estiverem incorretas
        echo "Usuário ou senha incorretos. Tente novamente.";
    }
}
?>





