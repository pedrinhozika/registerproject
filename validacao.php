<?php

header ('Content-type: text/html; charset=UTF-8');
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['RG'];
$cpf = $_POST['CPF'];

    $validanome = mysqli_query($conn, "SELECT nome FROM cadastro where nome = '$nome' LIMIT 1");
    $validanome1 = mysqli_num_rows($validanome);
    $validaemail =  mysqli_query($conn, "SELECT email FROM cadastro where email = '$email' LIMIT 1");
    $validaemail1 = mysqli_num_rows($validaemail);
    if($validanome1 > 0){
        echo "<script>
                alert('Já existe um cadastro com esse nome');
                window.location.href='index.html';
                </script>";
    }elseif ($validaemail1 > 0){
        echo "<script>
                alert('Já existe um cadastro com esse email');
                window.location.href='index.html';
                </script>";
    }else {
        $sql = mysqli_query($conn, "INSERT INTO cadastros(nome, email, CPF, RG, criada) VALUES ('$nome', '$email', '$cpf', '$rg', NOW())");
    }

if (!mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Cadastrado com Sucesso!');
            window.location.href='index.html';
            </script>";
      } else {
            echo "<script>
            alert('Erro no Cadastro!');
            window.location.href=index.html;
            </script>";
      }

mysqli_close($conn);

?>