<?php
class Model {
    
    //Chaine de connexion mysql
    public function connectMySQL() {
        $sql_dns ="mysql:host=mysql-allali.alwaysdata.net;dbname=allali_sitecr7";
        $sql_username ="allali";
        $sql_password="Admin12345@";

        try{
            $cnx = new PDO($sql_dns, $sql_username, $sql_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")  );
        }
        catch (Exception $e){
            echo ($e->getMessage());
        }
        return $cnx;
    }
    
}