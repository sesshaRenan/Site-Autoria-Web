<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os valores do formulário e os sanitiza
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'Não informado';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Não informado';
    $senha = isset($_POST['senha']) ? htmlspecialchars($_POST['senha']) : 'Não informado';
    $data_nascimento = isset($_POST['data_nascimento']) ? htmlspecialchars($_POST['data_nascimento']) : 'Não informado';
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : 'Não informado';
    $redes_sociais = isset($_POST['redes_sociais']) ? htmlspecialchars($_POST['redes_sociais']) : 'Não informado';
    $matricula = isset($_POST['matricula']) ? htmlspecialchars($_POST['matricula']) : 'Não informado';
    $campus = isset($_POST['campus']) ? htmlspecialchars($_POST['campus']) : 'Não informado';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : 'Telefone não informado';

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="estilo-dados.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Informações Recebidas</h1>
    </header>

    <!-- Navegação -->
    <nav>
        <ul>
            <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
            <li><a href="dados.php">Dados</a></li>
            <li><a href="index.html">Cadastro</a></li>
        </ul>
    </nav>
    <h1>Detalhes do Cadastro</h2>
    <!-- Conteúdo Principal -->
    <main class="container">
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>E-mail:</strong> <?php echo $email; ?></p>
        <p><strong>Senha:</strong> <?php echo $senha; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $data_nascimento; ?></p>
        <p><strong>Gênero:</strong> <?php echo $genero; ?></p>
        <p><strong>Redes Sociais:</strong> <?php echo $redes_sociais; ?></p>
        <p><strong>Matrícula:</strong> <?php echo $matricula; ?></p>
        <p><strong>Campus:</strong> <?php echo $campus; ?></p>
        <p><strong>Temas de Interesse:</strong> <?php echo $telefone; ?></p>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>IFRN Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Componentes do grupo: Ariel Franklen, Renan Mendonça, Ryan Joseph</p>
    </footer>
</body>
</html>
