<?php

// use post as GlobalPost;

require_once '../models/voyages.model.php';
     class ADD_voyage{
        
        
        public function add_voyage(){
             $data = array(
               
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'image'=>$_POST['image'],
            );
            
            $result=voyage::addvoyage($data);
        }
        public function getvoyages(){
            return voyage::getAllvoyages();
            header('location:tours.php');
        }
        public function getvoyage($id){
            
            
            
            $voyages = voyage::getOnevoyage($id);
            return $voyages;
            header('location:updatevoyage.php');
            
        }
        
        public function delete_voyage(){
            $id = array(
                'id' => $_POST['id']
            );
            voyage::delete_voyage($id);
            header('location:dashboard.php');
        }
        public function update_voyage(){
            $data_update = array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'image'=>$_POST['image'],
            );
            $result=voyage::update_voyage($data_update);
            
            header('location:dashboard.php');
        }
    }
    $data = new ADD_voyage();
$new_voyages = $data->getvoyages();





if (isset($_POST['add'])) {
    $voyage = new ADD_voyage();
    $voyage->add_voyage();
    header('location:dashboard.php');

    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_voyage();
    $delete->delete_voyage();
    header('location:dashboard.php');

}

if (isset($_POST['update_voyage'])) {
    $update = new ADD_voyage();
    $update->update_voyage();
}
