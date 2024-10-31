<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include './model/conexao.class.php';
        include './model/produto.class.php';
        //include './model/usuario.php';
        
        //$u = new usuario();
        //echo $u->validaUsuario('a@a', 'a');
        //print_r($u->recebeUsuario('a@a'));
        //print_r($u->recebeUsuarioPorCampo('nome','a'));
        //print_r($u->recebeUsuarios());
        
       
        
        //$p = new produto;
        //print_r($p->recebeProdutos());
        
    
        $l = new lista ();
        print_r($l->addLista('a@a.com','lista de presentes'));
        echo $l ->removeLista('a@a.com');
        print_r($l->getLista('teste@teste.com'))
        //var_dump(Conexao::getConexao());
        
        echo $l->addItem('teste@teste.com', 2);
        echo $l->removeItem("1","1");
        echo 'aqui';

        

        
        ?>
    </body>
</html>