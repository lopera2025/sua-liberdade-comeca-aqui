<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Verifica se o e-mail já está cadastrado
    $file = 'dados.txt';
    $emailsExistentes = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($emailsExistentes as $linha) {
        // Verifica se o e-mail já existe
        if (strpos($linha, $email) !== false) {
            echo "<script>alert('Este e-mail já está cadastrado.'); window.history.back();</script>";
            exit();
        }
    }

    // Salva os dados no arquivo
    file_put_contents($file, "Nome: $nome, E-mail: $email\n", FILE_APPEND);
    
    header('Location: confirmacao.php'); 
    exit();
} else {
    echo "Método de requisição não suportado.";
}
?>
