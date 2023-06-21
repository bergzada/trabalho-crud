<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM aluno WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_aluno=mysqli_query($conexao, $resultado);

    while($rows_aluno=mysqli_fetch_array($resultado_aluno)){
        echo "Nome: ".$rows_aluno['nome']."<br>";
        echo "CPF: ".$rows_aluno['cpf']."<br>";
        echo "Email: ".$rows_aluno['email']."<br>";
        echo "Endereço: ".$rows_aluno['endereco']."<br>";
        echo "Cidade: ".$rows_aluno['cidade']."<br>";
        echo "Estado: ".$rows_aluno['estado']."<br>"; 
       
        echo "<br>";
    }
?>