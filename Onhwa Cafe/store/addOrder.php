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
                    Add new order to queue
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-2 ml-2 mr-2">
                            <label>Coffee Brand</label>
                            <input type="text" class="form-control" placeholder="Introduce Brand" name="" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Coffee Type</label>
                            <input type="text" class="form-control" placeholder="Introduce Grain Type" name="" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Roast Type</label>
                            <input type="text" class="form-control" placeholder="Introduce Type of Roast" name="" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Quantity</label>
                            <input type="text" class="form-control" placeholder="Introduce Quantity" name="" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="Introduce Price" name="" aria-label="default input" value="">
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <button type="submit" href="#" class="btn btn-primary">Submit</button>
                            <a href="orders.php" class="btn btn-secondary">Return</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>