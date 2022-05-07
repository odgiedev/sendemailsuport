<?php

class User
{
    static function Id($id) {
        try {
            $con = Connection::getConn();
    
            $sql = "SELECT * FROM users WHERE id = :id";
            $sql = $con->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
    
            $res = $sql->fetch(PDO::FETCH_ASSOC);
            
            return $res;
        } catch (Exception $e) {
            die($e);
        }
    }
    static function All() {
        try {
            $con = Connection::getConn();
    
            $sql = "SELECT * FROM users ORDER BY id DESC";
            $sql = $con->prepare($sql);
            $sql->execute();
    
            $res = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            return $res;
        } catch (Exception $e) {
            die($e);
        }
    }

    static function Store($Post) {
        try {
            $con = Connection::getConn();
    
            $sql = $con->prepare("INSERT INTO users (name, email, message) VALUES (:name, :email, :message)");
            $sql->bindValue(':name', $Post['name']);
            $sql->bindValue(':email', $Post['email']);
            $sql->bindValue(':message', $Post['message']);
            
            $sql->execute();    
        } catch (Exception $e) {
            die($e);
        }
    }
}