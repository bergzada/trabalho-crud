<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Aluno cadastrado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    include("conexao.php");

    $sql = "SELECT * FROM aluno";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='table mt-5'>
            <thead><tr>
            <th scope='col'>CPF</th>
            <th scope='col'>Nome</th>
            <th scope='col'>email</th>
            <th scope='col'>senha</th>
            <th scope='col'>Endereço</th>
            <th scope='col'>Cidade</th>
            <th scope='col'>Estado</th>
            <th scope='col'>Telefone</th>
            <th scope='col'>Deletar</th>
            <th scope='col'>Editar</th></tr></thead>";


        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tbody><tr ><td scope='row'>" . $row['cpf'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['cidade'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td><a href='http://localhost/TRABALHO_CRUD/deletar_aluno.php?id=" . $row['id'] . "class='btn btn-primary mt-3 btn-danger'>Deletar</a></td>";
            echo "<td><a href='' class='btn btn-primary mt-3 btn-block'>Editar</a></td></tr></tbody>";


        }
        echo "</table>";
    } else {
        echo "Zero Resultado";
    }
    mysqli_close($conexao);
    ?>
</body>

</html>