<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './model/Conexao.php';
        include './model/usuario.php';
       
        $u = new usuario();
        print_r($u->recebeUsuario($email));
       
       
        //var_dump(Conexao::getConexao());
       
        ?>
    </body>
</html>
