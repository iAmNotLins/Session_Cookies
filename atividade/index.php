<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
    <body>
        <?php

            require_once 'cookie.php'; 
            require_once 'session.php';

            SessionManager::startSession();
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
                if ($email === "leovidal@gmail.com" && $password === "etec123") {
                    $_SESSION['logado'] = true;
                    header("Location: main.php?login=success");
                    exit;
                } else {
                    header("Location: index.php?login=failed");
                    exit;
                }
            }
            if (isset($_GET["login"])) {
                if ($_GET["login"] === "failed") {
                    echo "<script>alert('E-mail ou senha incorretos');</script>";
                }
            }
        ?>

        <h1>Efetue seu login</h1>
        <form action="login.php" method="POST">
            <p>
                <label>Email</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <input type="submit" value="Login">
            </p>
        </form>
    </body>
</html>