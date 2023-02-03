<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>Ecommerce Website</title>
    <link href="styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='../styles.css'>
    <title>Admin Dashboard</title>

    <style>
    .profile {

        width: 100px;
        object-fit: contain;
    }
    </style>
</head>

<body>
    <?php
    $image='../images/agumentik.png';
    $profile="..images/passport.jpeg";
?>
    <!--    NAVBAR    -->
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img class='logo' src="<?php echo $image  ?>" alt="">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-light">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </nav>
    </div>
    <div class="container-fluid">
        <div class="bg-light ">

            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <div class="row">
            <div class="col-md-12 p-1  bg-secondary d-flex align-items-center">
                <div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Shri_Virat_Kohli_for_Cricket%2C_in_a_glittering_ceremony%2C_at_Rashtrapati_Bhavan%2C_in_New_Delhi_on_September_25%2C_2018_%28cropped%29.JPG"
                        alt="" class="profile">
                    <p class="text-center text-light">Admin_Name</p>

                </div>

                <div class="button text-center">
                    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1"> INSERT PRODUCT</a>
                    </button><button><a href="" class="nav-link text-light bg-info my-1"> VIEW PRODUCT</a></button>
                    <button><a href="insert_categories.php" class="nav-link text-light bg-info my-1">INSERT
                            CATEGORIES</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">VIEW CATEGORIES</a></button>
                    <button><a href="insert_brands.php" class="nav-link text-light bg-info my-1">INSERT BRANDS</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">VIEW BRANDS</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">ALL ORDERS</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">ALL PAYMENTS</a></button>

                    <button><a href="" class="nav-link text-light bg-info my-1">LIST USERS</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">LOGOUT</a></button>
                </div>
            </div>
        </div>
