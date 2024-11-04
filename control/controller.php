<?php

class Controller{
    
        public $cadastroIndex = false;
        public $loginIndex = false;
    
        public function index(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['cadastrar'])){
              
                $email=$_POST['email'];
                $nome=$_POST['nome'];
                $senha=$_POST['senha'];
              
                $usuario = new usuario();
              
                    $this->cadastroIndex = $usuario->addUsuario($email, $nome, $senha);
}
            if(isset($_POST['login'])){
              
                $email=$_POST['email'];
                $senha=$_POST['senha'];
                $login= new usuario();
             
                if($login->validaUsuario($email, $senha)>0){
                    header('Location:home.php');
                        exit;
}
            else{
            $this->loginIndex = "Dados Invalidos";
}         
}
}
}
}

?>

        