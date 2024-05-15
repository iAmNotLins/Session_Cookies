<?php

        require_once 'cookie.php'; 
        require_once 'session.php';

        SessionManager::startSession();
        SessionManager::setSessionValue('logado', true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        $email = $_POST["email"];
        $password = $_POST["senha"];

        if ($email === "leovidal@gmail.com" && $password === "etec123") {
            
            
            header("Location: main.php?login=success");
            exit;
        } else {
            header("Location: index.php?login=failed");
            exit;
        }
    }
}

?>

