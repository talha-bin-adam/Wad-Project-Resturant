<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

</head>
<!--navbar-expand-lg  navbar-expand-sm-->
<body>
<div class="menu-bar">
<!--    <div class="container">-->
<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md">
    <a class="navbar-brand" href="index.php"><img src="media/logo.png" style="width: 200px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<!--        <span class="navbar-toggler-icon"></span>-->
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-right">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="table.php">Book a Table</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<!--    </div>-->
</div>
<div class="slide-show col-xl-12 col-lg-12 col-md-12 col-sm-12">
<!--    <div style="height: 200px"></div>-->
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-1"></div>
        <div class="ss-row-1 col-xl-9 col-lg-10 col-md-11 col-sm-12">
        <h1>Feeling Hungry?</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-1"></div>
        <div class="row col-xl-9 col-lg-10 col-md-11 col-sm-12">
        <div style="margin-left: 20px">
        <button class="button-1" onclick="window.location.href = 'table.html';"> Book a Table </button>
        </div>
        <div style="margin-left: 20px">
        <button class="button-2" onclick="window.location.href = 'order.html';"> Order Now</button>
        </div>
        </div>

    </div>
    <div style="height: 250px"></div>
</div>

<div class="special-content">
    <h3 class="sc-row-1"> Our Special Dishes </h3>
    <div class="row container-fluid">
        <div class="sc-dish-1 col-xl-6 col-lg-6">
            <img src="media/lasagna.jpg">
            <div style="padding-left: 20px;">
                <h4> Lasagna </h4>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6"> dish 2 </div>
    </div>
</div>

<div class="row container-fluid footer">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
        <h1> About Us </h1>
        <a href="index.php"><img src="media/logo.png" style="width: 200px"></a>
        <p> © 2019 developed by <b>Talha Bin Adam</b> and <b>Zeeshan Sabir</b>. All Rights Reserved.</p>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <h1> Links </h1>
        <div>
            <ul style="list-style-type: none">
                <li>
                    <a class="nav-link active" href="index.php">Home </a>
                </li>
                <li>
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li>
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li>
                    <a class="nav-link" href="table.php">Book a Table</a>
                </li>
                <li>
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li>
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
        <h1> Follow Us </h1>
        <a href="https://www.facebook.com/">
        <i class="fab fa-facebook-f"></i>
        </a>facebook
        <br><br>
        <a href="https://www.twitter.com">
            <i class="fab fa-twitter"></i>
        </a>twitter
        <br><br>
        <a href="https://www.instagram.com">
            <i class="fab fa-instagram"></i>
        </a>instagram
    </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6">
        <h1> Contact Us </h1>
        <i class="far fa-envelope"></i> Email:
        <p> foodfactory@ff.com.pk</p>
        <i class="fas fa-phone"></i> phone:
        <p> 0333-0478220 <br> 0316-4664268 </p>
        <i class="fas fa-map-marker-alt"></i> Address:
        <p> <b>FOOD FACTORY</b>, liberty market, main gulbarg, lahore</p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>