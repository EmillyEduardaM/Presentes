
        <?php
        
        include './model/conexao.class.php';
        include './model/produto.class.php';
        include './model/usuario.php';
        include './model/lista.class.php';
        
        //$u = new usuario();
        //echo $u->validaUsuario('a@a', 'a');
        //print_r($u->recebeUsuario('a@a'));
        //print_r($u->recebeUsuarioPorCampo('nome','a'));
        //print_r($u->recebeUsuarios());
        //print_r($u->addUsuario('a@a','r',1));
       
        
        //$p = new produto;
        //print_r($p->recebeProdutos());
        
        
        $l = new lista();
        //print_r($l->addLista('a@a.com','lista de presentes'));
        //echo $l->removeLista('a@a.com');
        
        //print_r($l->getItens(4));
       print_r($l->getItensUsuario('teste@gmail.com'));
        echo 'aqui';
        
        //var_dump(Conexao::getConexao());
        
        
        
        
        
?>