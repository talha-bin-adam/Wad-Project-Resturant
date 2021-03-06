<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Table</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
<div class="menu-bar">
    <!--    <div class="container">-->
    <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-expand-sm">
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

<div class="table-select">
    <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 sc-row-1">
        <h3> Available Tables: </h3>
    </div>
    <div>
        <table class="table" style="margin-top: 30px">
            <tr class="table-heading">
                <th> No of People </th>
                <th> Date </th>
                <th> Time </th>
                <th> Type </th>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 04/20/2019</td>
                <td> 04:00PM</td>
                <td> Family Dining table </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 04/20/2019</td>
                <td> 04:00PM</td>
                <td> Booth </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 04/20/2019</td>
                <td> 04:00PM</td>
                <td> Outdoor Table</td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 04/20/2019</td>
                <td> 04:00PM</td>
                <td> Bar Height Table </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 04/20/2019</td>
                <td> 04:00PM</td>
                <td> family Dining Table</td>
            </tr>

        </table>
    </div>
    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 table-content">
            <select class="width-set">
                <option> 1 People </option>
                <option> 2 People </option>
                <option> 3 People </option>
                <option> 4 People </option>
                <option> 5 People </option>
                <option> 6 People </option>

            </select>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-7 table-content">
            <input type="date" class="width-set">
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 table-content">
            <input type="time" min="12:00:00" max="12:00:00" class="width-set">
        </div>
        <div class="col-xl-3 col-lg-3 col-md-7 col-sm-7 table-content">
            <select class="width-set">
                <option> Family Dining Table </option>
                <option> Booth </option>
                <option> Outdoor Table </option>
                <option> Bar Height Table </option>
            </select>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-5 col-sm-12 table-content">
            <button class="width-set button-table"> Select Table </button>
        </div>
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
        <p> 03330478220 <br> 03164664268 </p>
        <i class="fas fa-map-marker-alt"></i> Address:
        <p> <b>FOOD FACTORY</b>, liberty market, main gulbarg, lahore</p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>