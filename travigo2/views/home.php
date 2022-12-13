<?php
require_once '';
 $data = new VoyagesController();
 $voyages = $data->getAllVoyages();
 

?>

<div  class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="col-md-8 mx-auto">
              <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-sm btn-primary mr-2 mb-2"></a>
              <i class="fas fa-plus"></i>
              <table class="table table-hover">
           
        <thead>
            <tr>
                   <th scope="col">name</th>
                   <th scope="col">price</th>
                   <th scope="col">image</th>
            </tr>  
        </thead>
            <tbody>
               <?php foreach($voyages as $voyage):?>
                  <tr>
                    <th scope="row"><?php echo $voyage['name'];?>
                  </th>
                  <td><?php echo $voyage['price'];?></td>
                  <td><?php echo $voyage['image'];?></td>
                  </tr>
                  <td class="d-flex flex-row"></td>
                   <form method="post" class="mr-1" action="update">
                     <input type="hidden" name="id" value="?php echo $voyage['id'];?>">
                     <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                    </form>
                    <form method="post" class="mr-1" action="delate">
                     <input type="hidden" name="id" value="?php echo $voyage['id'];?>">
                     <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  <?php endforeach;?>
            </tbody>
              </table>
             </div>
        </div>
    </div>
</div>