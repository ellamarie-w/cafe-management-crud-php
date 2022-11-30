<?php include('../templates/nav.php') ?>
<?php

if(!isset($_GET['id'])){
    header('Location: ingredients.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('SELECT * FROM ingredients WHERE id = ?;');
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_OBJ);

?>

<div class="container-sm mb-5">
    <div class="row justify-content-center">
        <div class="col-6 md-4 mb-4">
                        
            <!-- ALERTS -->
            
            <?php
                if(isset($_GET['message']) and $_GET['message'] == 'needInfo'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fill all the fields available to add a new item.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>

            <!-- END ALERTS -->
            <div class="card">
                <div class="card-header">
                    Add new item to inventory
                </div>
                <div class="card-body">
                    <form action="../controllers/editIngredientProcess.php" method="POST">
                        <div class="mb-2 ml-2 mr-2">
                            <label>Product Name</label>
                            <input type="text" class="form-control" placeholder="Introduce Brand" name="inputIngredientName" aria-label="default input" value='<?php echo $data->name;?>'>
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Brand</label>
                            <input type="text" class="form-control" placeholder="Introduce Grain Type" name="inputIngredientBrand" aria-label="default input" value='<?php echo $data->brand;?>'>
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Quantity</label>
                            <input type="text" class="form-control" placeholder="Introduce Type of Roast" name="inputIngredientQuantity" aria-label="default input" value='<?php echo $data->quantity;?>'>
                        </div>
                        <div class="div">
                            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                        </div>       
                        <div class="mb-2 ml-2 mr-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="ingredients.php" class="btn btn-secondary">Return</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>