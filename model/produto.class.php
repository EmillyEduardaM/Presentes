<?php
class produto{

    public function recebeProdutos(){
        try{

            $sql = "Select *from produto";
            $stmt = Conexao::getConexao()->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_BOTH);
} 
        catch (Exception $ex) {
            return false;
}
}
}
