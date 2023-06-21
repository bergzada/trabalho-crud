<?php
    include("conexao.php");

    $id = $_GET['id'];

    $sql="DELETE FROM aluno WHERE id='$id'";

    if(mysqli_query($conexao, $sql)){
        echo "Cadastro excluído";
    }
    else{
        echo "Não foi realizada a operação".mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>