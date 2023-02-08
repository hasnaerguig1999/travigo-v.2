<?php
    require_once '../database/db_connection.php';
  
class voyage{
    static public function addvoyage($data){
        $db=Database::connect()->prepare("INSERT INTO voyage( name, price , image )
                                        VALUES( :name, :price , :image )");
                                       
       
    //    
       $db->bindParam(':name',$data['name']);
       $db->bindParam(':price',$data['price']);
       $db->bindParam(':image',$data['image']);
       $db->execute();
}
    static public function getAllvoyages(){
        $db=Database::connect()->prepare("SELECT * FROM voyage");
        $db->execute();
        $voyages=$db->fetchAll();
        $db=NULL;
        
        
        
        return $voyages;
    }
    static public function getOnevoyage($id){
        $db=Database::connect()->prepare("SELECT * FROM voyage WHERE id = :id");
        
        $db->bindParam(':id',$id['id']);
        $db->execute();
        $voyages=$db->fetchAll();
        $db=NULL;
        
        
        
        return $voyages;
    }
    static public function update_voyage($data_update){
        $db=Database::connect()->prepare("UPDATE voyage SET name = :name, price = :price , image = :image
                                            WHERE id = :id");

        $db->bindParam(':id',$data_update['id']);
        $db->bindParam(':name',$data_update['name']);
        $db->bindParam(':price',$data_update['price']);
        $db->bindParam(':image',$data_update['image']);
        

        $db->execute();
    }

    static public function delete_voyage($data){
        $db=Database::connect()->prepare("DELETE FROM voyage WHERE id = :id ");
        $db->bindParam(':id',$data['id']);
        $db->execute();
    }
}

// $a =trip ::getOnetrip();

// print_r(trip::getOnetrip());