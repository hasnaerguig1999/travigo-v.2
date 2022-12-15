<?php

require_once '../models/admin.model.php';
    class login{
       
        public function login(){
            
            
                $data = $_POST['email'];
        
            $result=admin::get_admin($data);
            foreach($result as $admin)
            if($admin['email']===$_POST['email'] && $admin['password'] === $_POST['password']){
                session_start();
                $_SESSION['email']=$admin['email']; 
                    
            }
        }
    }
    // if(!isset($_SESSION)){
    //     session_start();
    // }
    // if($_SESSION["username"] ?? false){
    //     header('location:trips.php');
    // }
    
    if(isset($_POST['login'])){
        $admin= new login();
        $admin->login();
        header('location:Dashbord.php');
    }