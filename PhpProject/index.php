<!DOCTYPE html>
<!-- To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. -->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Hello PhpGitHub! </title>
    </head>
    <body>
        <?php
        // put your code here
            $login_cookie = $_COOKIE['login'];
            if( isset($login_cookie) ) {
                echo"Bem-Vindo, $login_cookie <br>";
                echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
            }
            else {
                echo"Bem-Vindo, convidado <br>";
                echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
                echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
            }
        ?>
    </body>
</html>