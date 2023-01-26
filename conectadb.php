<?php
#Localiza pc com banco
Servidor ="localhost";
#Nome do banco
$banco ="projetot27";
#Usuario de acesso
$usuario = "admin";
#Senha do usuario;
$senha = "123"
#Link de acesso
$link = mysqli_connect($servidor, $usuario, $senha, $banco);