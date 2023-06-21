<?php
include("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM administrador WHERE usuario = '$usuario' AND senha = '$senha'";

$resultado_admin = mysqli_query($conexao, $query);

if (mysqli_num_rows($resultado_admin) > 0) {
    header("Location: http://localhost/TRABALHO_CRUD/home.php");
    exit();
} else {
    header("Location: http://localhost/TRABALHO_CRUD/");
    exit();
}

?>