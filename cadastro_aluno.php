<?php
include("conexao.php");

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];


$sql = "INSERT INTO aluno (cpf, nome, email, senha, endereco, cidade, estado, telefone)
        VALUES ('$cpf', '$nome', '$email', '$senha', '$endereco', '$cidade', '$estado', '$telefone' )";


if (mysqli_query($conexao, $sql)) {
    echo "<h1>Aluno cadastrado com sucesso</h1>";
    echo "<a href='cadastro_aluno.html'>Cadastrar novo aluno?</a><br>";
    echo "<a href='index.php'>Página inicial</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>