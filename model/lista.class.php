<?php
class lista{

public function addLista($email,$descricao){

try{

$sql = "insert into lista values (?,?,?";
$stmt = conexao::getConexao()->prepare($sql);
$stmt  ->bindValue (1,"0");
$stmt ->bindValue (2,"$descricao");
$stmt->bindValue (3,"$email");

$stmt  ->execute ();
return true;
}
catch (Exception $ex){
return false;

}
}

public function removeLista($email){

    try{
    
    $sql = "delete * from lista where usuario = ?";
    $stmt = conexao::getConexao()->prepare($sql);
    $stmt  ->bindValue (1,$email);

    $stmt  ->execute ();

    if($stmt ->rowCount ()>0){

        return "lista excluida";
    }

    else{


        return "nenhuma lista exclida ";
    }

    }
    catch (Exception $ex){
    return "erro ao excluir lista";
    
    }
    }
    public  function getLista($email) {
        try{

            $sql = "Select * from lista where usuario=?";
            
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt  ->bindValue (1,$email);

        $stmt  ->execute ();
    
        if($stmt ->rowCount ()>0){
            $result = $stmt->fetchAll(PDO::FETCH_BOTH);

            return $result;
        }
        return false;
        }
        catch (Exception $ex){
            return false;
    }
    }
    public function addItem($email,$produto){
        try{
            $lista = $this->getLista($email);
            if(!$lista) {
               return 'Lista nao encontrada';


            }
            $sql = "Insert into item Values (?,?)";
            $stmt = Conexao::getConexao()->prepare ($sql);

            $stmt->bindValue(1,$lista 'codigo');
            
            $stmt->bindValue(2,$produto);
            $stmt = 



}catch (Exception $ex) {

}
}
    public function removeItem($lista, $produto) {
        try{
            $sql = "Delete from item where lista_codigo = $lista"."and produto_codigo = $produto";

            $stmt->bindValue(1, $lista)
            
            $stmt->bindValue(1, $produto)
        }

    }
    }