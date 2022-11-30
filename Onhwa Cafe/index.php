<?php session_start();
if(!isset($_SESSION['username'])){
    (header('Location: login.php?error=firstLogin'));
}
?>
<?php include('templates/indexNav.php');?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="card mb-3">
                <img src="images/desserts.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><span class="fw-bold">Pro Tip!</span> Always offer to bundle a dessert with our drinks!</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    Refer a Friend
                </div>
                <div class="card-body">
                    <p class="card-text">Fill the form and we'll contact them as soon as possible. Work is always better with friends!</p>
                </div>
            </div>
        </div>
        <div class="col-8 mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/50off_refreshers.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/strawberry_season.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/come_drinks.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="col-2">
            <div class="card mb-3">
                <div class="card-header">
                    Season call out!
                </div>
                <div class="card-body">
                    <p class="card-text">Our seasonal rafle is here! Ask your manager for a registration form.</p>
                </div>
            </div>
            <div class="card my-2">
                <img src="images/onthego.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><span class="fw-bold">Remember!</span> Our on the go beverages are just as good as our freshly made ones. Feel free to offer them!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>