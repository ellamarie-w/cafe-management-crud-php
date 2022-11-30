<?php include('../templates/nav.php') ?>

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
                    <form action="../controllers/registerColdDrinks.php" method="POST">
                        <div class="mb-2 ml-2 mr-2">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Type Drink's Name" name="inputColdDrinksName" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Ingredients</label>
                            <input type="text" class="form-control" placeholder="Type Ingredients" name="inputColdDrinksIngredients" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="Type Price" name="inputColdDrinksPrice" aria-label="default input" value="">
                        </div>                    
                        <div class="mb-2 ml-2 mr-2">
                            <input type="hidden" name="hide" value="1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="coldDrinks.php" class="btn btn-secondary">Return</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>