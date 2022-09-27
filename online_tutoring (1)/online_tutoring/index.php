<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    include 'navbar.php'; 
    
    ?>
    <div class="container-fluid bg-body mt-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block car-text">
                <h1 style="font-size:4em;">Begin your jounery with MJ Tutorials!</h1>
                <p>MJ Tutorials is one of the popular site to learn with experts of 40+ years experience in their fields..</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="img/bg.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block car-text">
            <h1 style="font-size:4em;">Begin your jounery with MJ Tutorials!</h1>
                <p>MJ Tutorials is one of the popular site to learn with experts of 40+ years experience in their fields..</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/bg1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block car-text">
                <h1 style="font-size:4em;">Begin your jounery with MJ Tutorials!</h1>
                <p>MJ Tutorials is one of the popular site to learn with experts of 40+ years experience in their fields..</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <div class="container-fluid my-5 ml-5 ">
        <h1 class="ml-5 my-5">See Registered Courses</h1>
        <div class="row subjects">
           
            <div class="col-md-3 my-2">
                <div class="card d-block mx-auto" style="width: 18rem;">
                <img src="img/math.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MATHS</h5>
                        <p class="card-text">Class 11</p>
                        <a href="student_login.php" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
            <div class="card d-block mx-auto" style="width: 18rem;">
                <img src="img/optics.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PHYSICS</h5>
                    <p class="card-text">Class 11</p>
                    <a href="student_login.php" class="btn btn-primary">View details</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card d-block mx-auto" style="width: 18rem;">
                    <img src="img/waves.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PHYSICS</h5>
                        <p class="card-text">Class 12</p>
                        <a href="student_login.php" class="btn btn-primary">View details</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-3 my-2">
                <div class="card d-block mx-auto" style="width: 18rem;">
                    <img src="img/waves.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Waves</h5>
                        <p class="card-text">Class 12</p>
                        <a href="student_login.php" class="btn btn-primary">View details</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
</body>
</html>