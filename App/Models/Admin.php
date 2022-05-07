<?php

class Admin
{
    static function Store($Post) {
        try {
            $con = Connection::getConn();

            $sql = $con->prepare("INSERT INTO responses (email, subject, message) VALUES (:email, :subject, :message)");
            $sql->bindValue(':email', $Post['email']);
            $sql->bindValue(':subject', $Post['subject']);
            $sql->bindValue(':message', $Post['message']);
            
            $sql->execute();
            
            $sql = $con->prepare("UPDATE users SET response = true WHERE id = :id;");
            $sql->bindValue(':id', $Post['id']);
            
            $sql->execute();
        } catch (Exception $e) {
            die($e);
        }
    }
}