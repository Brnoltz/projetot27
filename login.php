<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome=$_POST['nome'];
    $password = $_POST['password'];
    include("conectadb.php");

    #consulta sql para verificar usuario cadastrado
    $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = '$nome' AND usu_senha ='$password'";
    $resultado= mysqli_query($link,$sql);

    while($tbl = mysqli_fetch_array($resultado)){
        $cont=$tbl[0];
    }
    if($cont==1){
        header("Location: homesistema.html");
    }
    else {
        echo"<script>window.alert('USUARIOS OU SENHA INCORRETOS!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuario</title>
    <link rel="stylesheet" href="./stylecadastra.css">
</head>

<body>
    </div class="container">
    <!-- script para mostrar senha, nheeenha-->

    <script>
        function mostrarsenha(){
            var tipo = document.getElemenByid("senha");
            if(tipo.type =="password"){
                tipo.type ="text";
            }
            else{
                tipo.type = "password";
            }
        }
    </script>
    <!-- FIM DO SCRIPT PARA MOSTRA SENHA-->

    <form action="login.php"method="post">
        <h1>LOGIN DE USUARIO</h1>
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <p></p>
        <input id="password" name="password" placeholder="Senha">
        <img id="olinho" onclick="mostrarsenha()" src="assets/eye.svg">
        <p></p>
        <input type="submit" name="login" value="LOGIN">
    </form>
    </div>
    
</body>
</html>