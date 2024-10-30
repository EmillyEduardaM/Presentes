<?php

class usuario {

    public function addUsuario($email, $nome, $senha) {
        try {
            $sql = "Insert into usuario Values (?, ?, ?, ?, ?, ?)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$email);
            $stmt->bindValue(2, md5($email));
            $stmt->bindValue(3,$nome);
            $stmt->bindValue(4,$senha);
            $stmt->bindValue(5, date('Y-m-d'));
            $stmt->bindValue(6,'padrao.jpg');
            $stmt->execute();
           
            return 'Usuário cadastraddo com sucesso';
       
        }  catch (Exception $ex){
            if($ex->errorInfo[1] == 1062){
                return 'Usuário já cadastrado';
            }
            else{
                return 'Erro ao  cadastrar usuário';
            }
        }
       
    }
   
    public function validaUsuario($email, $senha) {
        try{
            $sql = 'Select * from usuario where email=? and senha=?';
           
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$email);
            $stmt->bindValue(2,$senha);
            $stmt->execute();
           
            $result = $stmt->rowCount();
           
            return $result;
           
           
    } catch (Exception $ex){
        return false;
    }
   
  }
   
    public function recebeUsuario($email){
        try{
            $sql = "select * from usuario where email = '$email'";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt -> bindValue(1,$email);
           
            $stmt-> execute();
           
            if($stmt->rowCount()>0){
                $result = $stmt->fetch(PDO::FETCH_BOTH);
               
                return $result;
            }
           
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }
}
