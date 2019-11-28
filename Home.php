<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno",
            "email" => "aluno@gmail.com.br",
            "senha" => "123",
        ],
        [
            "nome" => "Professor",
            "email" => "professdsor@gmail.com.br",
            "senha" => "123",
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: nav.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">

    <title>Curso</title>
</head>
<body class="login">
    <header class="cabecalho">
    <h1>Web Estudo</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <nav class="navegacao">
        <a href="login.php" class="vermelho">Aluno</a>
        <a href="professor.php" class="verde">Professor</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <div id= "page">
        <img src="recursos/negocio.png" alt="Descrição da imagem"
     
       >

        </div>
    </main>
    <footer class="rodape">
        Web Estudo © <?= date('Y'); ?>
    </footer>
</body>
</html>