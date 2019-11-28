<?php 
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt_br" xml:lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Web Estudo</h1>
        <h2>Ambiente do aluno</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: Aluno<?= $_SESSION['usuario'] ?></span>
        <a href="nav.php" class="verde">Voltar</a>
       
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
        
            <?php require_once('teste.html'); ?>
        </div>
    </main>
    <footer class="rodape">
    Web Estudo © <?= date('Y'); ?>
    </footer>
</body>
</html>