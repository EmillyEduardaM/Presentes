<?php

class lista
{

    public function addLista($email, $descricao)
    {
        try {

            $sql = "Insert into lista Values(?,?,?)";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, 0);
            $stmt->bindValue(2, $descricao);
            $stmt->bindValue(3, $email);
            $stmt->execute();

            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
    public function removeLista($email)
    {
        try {

            $sql = "delete from lista where usuario=?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Lista Excluída';
            } else {
                return 'Nenhuma lista excluída';
            }
        } catch (Exception $ex) {
            return 'Erro ao excluir lista';
        }
    }
    public function getLista($email)
    {
        try {

            $sql = "Select * from lista where usuario=?";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_BOTH);
                return $result;
            }
            return false;
        } catch (Exception $ex) {
        }
    }

    public function addItem($email, $produto)
    {
        try {

            $lista = $this->getLista($email);
            if (!$lista) {
                return 'Lista não encontrada';
            }
            $sql = "Insert into item Values (?, ?)";
            $stmt = Conexao::getConexao()->prepare($sql);

            $stmt->bindValue(1, $lista['codigo']);
            $stmt->bindValue(2, $produto);

            $stmt->execute();

            return 'Produto adicionado com sucesso';
        } catch (PDOException $ex) {
            if ($ex->errorInfo[1] == 1062) {
                return 'Produto adicionado a lista';
            } else {
                return 'Produto não adiocinado a lista';
            }
        }
    }

    public function removeItem($lista, $produto)
    {
        try {
            $sql = "Delete from item where lista_codigo = $lista " . "and produto_codigo = $produto";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $lista);
            $stmt->bindValue(2, $produto);

            $stmt->execute();

            if ($stmt->rowCount > 0) {
                return 'Item excluído';
            } else {
                return 'Nenhum item removido';
            }
        } catch (Exception $ex) {
            return 'Erro ao excluir';
        }
    }
    public function getItens($lista)
    {
        try {

            $sql = "select produto.codigo, produto.nome from produto
                inner join item on item.produto_codigo = produto.codigo
                inner join lista on lista.codigo=item.lista_codigo
                where lista.codigo = ?";

            $stmt = conexao::getConexao()->prepare($sql);
            $stmt -> bindValue(1, $lista);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(PDO::FETCH_BOTH);

                return $result;
            }
            return false;
        } catch (PDOException $ex) {
            return false;
        }
    }
    public function getItensUsuario($email){

        try{
    
            $sql = "select produto.codigo produto.nome,lista.descricao from produto                inner join item on item.produto_codigo = produto_codigo
                inner join lista on lista.codigo = item.lista_codigo
                WHERE USUARIO.EMAIL=?";

                $stmt = conexao::getConexao()->prepare($sql);
                $stmt -> bindValue(1, $email);
                $stmt->execute();
    
                if ($stmt->rowCount() > 0) {
                    $result = $stmt->fetchAll(PDO::FETCH_BOTH);
    
                    return $result;
                }
                return false;
             } catch (PDOException $ex) {
                    return false;
                }
        }

    }

