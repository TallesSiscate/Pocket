<!DOCTYPE html>
<!-- To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. -->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Title PhpGitHub Login </title>
    </head>
    <body>
        <?php
            $login = $_POST['login'];
            $entrar = $_POST['entrar'];
            $senha = md5($_POST['senha']);
            $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
            $db = mysql_select_db('nome_do_banco_de_dados');
            if( isset($entrar) ) {
                $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if( mysql_num_rows($verifica) <= 0 ) {
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }
                else {  
                    setcookie("login",$login);
                    header("Location:index.php");
                }
            }
        ?>
    </body>
</html>