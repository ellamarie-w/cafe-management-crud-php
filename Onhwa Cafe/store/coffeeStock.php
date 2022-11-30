<?php include('../templates/nav.php') ?>
<?php
include '../models/connection.php';

$consult = $db->query('SELECT * FROM coffee_stock;');
$coffeeStock = $consult->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col px-5">
            <h3>COFFEE IN STOCK</h3>
            <a type="button" class="btn btn-outline-primary mb-2" href="addCoffeeStock.php">Add Item</a>
            <!-- START ALERTS -->
            <?php
            if(isset($_GET['message']) and $_GET['message'] == 'success'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> New item has been added to the list.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>

            <?php
                if(isset($_GET['message']) and $_GET['message'] == 'updated'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Great!</strong> The item has been updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>

            <?php
                if(isset($_GET['message']) and $_GET['message'] == 'deleted'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Item was successfully deleted from the list.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>

            <?php
                if(isset($_GET['message']) and $_GET['message'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>
            <!-- END ALERTS -->
        </div>
    </div>
    <div class="row">
        <div class="col px-5">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Type</th> 
                                    <th scope="col">Roast</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php foreach($coffeeStock as $data){ ?>
                            <tr>
                                <th scope="row"><?php echo $data->id;?></th>
                                <td><?php echo $data->brand;?></td>
                                <td><?php echo $data->type;?></td>
                                <td><?php echo $data->roast;?></td>
                                <td><?php echo $data->quantity;?></td>
                                <td>$<?php echo $data->price;?></td>
                                <td>
                                    <a href="editCoffeeStock.php?id=<?php echo $data->id; ?>"><button class="btn btn-info my-1 text-white"><span style="color: white;"><i class="far fa-edit"></i></span></button></a>
                                    <a href="../controllers/deleteCoffeeStock.php?id=<?php echo $data->id; ?>" class="btn btn-danger my-1" onclick="return confirm('You are about to delete this item. Would you like to proceed?');" ><i class="fa-solid fa-trash-can"></i></a>
                                </td> 
                             </tr>
                             <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>