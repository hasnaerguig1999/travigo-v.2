<?php
require_once '../controllers/VoyagesController.php';
 $data = new VoyagesController();
 $voyages = $data->getAllVoyages();
 

?>

<div  class="container">
    <a href="../controllers/VoyagesController.php"></a>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    

                </div>
              <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-sm btn-secondary mr-2 mb-2">
              <i class="fas fa-home"></i>
              </a>
              <form method="post">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                <label for="price">price</label>
                    <input type="text" name="price" class="form-control" placeholder="price">
                </div>
                <div class="form-group">
                <label for="image">image</label>
                    <input type="text" name="image" class="form-control" >
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">valider</button >
      
                </div>
                </div>
              </form>
             
             </div>
        </div>
    </div>
</div>   