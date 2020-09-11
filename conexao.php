<?php

header ("charset=UTF-8");

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "formularios";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn){
    echo "<script>
        alert('Conexão falhou!');
        </script>";
}

?>
