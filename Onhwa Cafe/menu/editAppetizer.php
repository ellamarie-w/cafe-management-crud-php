<?php include('../templates/nav.php') ?>
<?php

if(!isset($_GET['id'])){
    header('Location: appetizers.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('SELECT * FROM appetizers WHERE id = ?;');
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
                    Add new item to menu
                </div>
                <div class="card-body">
                    <form action="../controllers/editAppetizersProcess.php" method="POST">
                        <div class="mb-2 ml-2 mr-2">
                        <label>Name</label>
                            <input type="text" class="form-control" placeholder="Type Appetizer's Name" name="inputAppetizersName" aria-label="default input" value="<?php echo $data->name;?>">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Ingredients</label>
                            <input type="text" class="form-control" placeholder="Type Ingredients" name="inputAppetizersIngredients" aria-label="default input" value="<?php echo $data->ingredients;?>">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="Type Price" name="inputAppetizersPrice" aria-label="default input" value="<?php echo $data->price;?>">
                        </div> 
                        <div class="div">
                            <input type="hidden" name="id" value="<?php echo $data->id;?>">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="appetizers.php" class="btn btn-secondary">Return</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>