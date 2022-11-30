<?php include('../templates/nav.php') ?>
<?php

if(!isset($_GET['id'])){
    header('Location: employees.php?message=error');
    exit();
}

include '../models/connection.php';
$id = $_GET['id'];

$stmt = $db->prepare('SELECT * FROM employees WHERE id = ?;');
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
                    Add new employee to list
                </div>
                <div class="card-body">
                    <form action="../controllers/editEmployeesProcess.php" method="POST">
                        <div class="mb-2 ml-2 mr-2">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Type Employee's Name" name="inputEmployeeName" aria-label="default input" value="<?php echo $data->name;?>">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Store</label>
                            <input type="text" class="form-control" placeholder="Type Operations Store" name="inputEmployeeStore" aria-label="default input" value="<?php echo $data->store;?>">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Shift</label>
                            <input type="text" class="form-control" placeholder="Type Shift" name="inputEmployeeShift" aria-label="default input" value="<?php echo $data->shift;?>">
                        </div> 
                        <div class="div">
                            <input type="hidden" name="id" value="<?php echo $data->id;?>">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="employees.php" class="btn btn-secondary">Return</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>