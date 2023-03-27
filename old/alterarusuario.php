<?php
include('conectadb.php');

if($_SERVER('Request_METHOD')=='POST'){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $sql = "UPDATE usuarios SET usu_senha ='$senha',usu_nome ='$nome' WHERE usu_id = $id";
    mysqli_query($link, $sql);
    header("Location: listausuario.php");
    echo"<script>alert('USUARIO ALTERADO COM SUCESSO!');</script>";
    exit();
}

#capturar id via get
$id = $_GET['id']
$sql = "SELECT * FROM usuarios WHERE usu_id= $id";
$resultado = mysqli_querry($link, $sql);
while($tbl = mysqli_fetch_array($resultado)){

}

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuario</title>
</head>
<body>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA USUARIOS</title>
    <link rel="stylesheet" href="estilo.css">

</head>

</body>
</html>