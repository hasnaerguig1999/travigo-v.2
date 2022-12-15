<?php
    require_once '../database/db_connection.php';
    class admin{
        
        static public function get_admin($data){
            $email=$data;
            
                $db=Database::connect()->prepare("SELECT * FROM tb_user WHERE email = :email");
                $db->bindParam(':email',$email);
        $db->execute();
        $admin=$db->fetchAll();
                return $admin;

            

        }
    }


    