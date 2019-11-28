<?php
session_start();
$_SESSION['codigo']=$codigo;
$_SESSION['cont']=$cont;
$codigo = $_POST['teste'];

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
        <h1>Curso</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        
        <div class="conteudo">
            <?php 
     
             require_once('carlos.php'); ?>
            
        </div>
    </main>
    <footer class="rodape">
    Web Estudo © <?= date('Y'); ?>
    </footer>
</body>
</html>

