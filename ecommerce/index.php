<?php

    include "includes/mystore_database.php";

?>


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
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>



    <!-- container-Fluid  which will helps you to occupy the entire screen width -->


    <div class="container-fluid p-0">


        <!-- Navbar ------>



        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="images/agumentik.png" class="logo" alt="Agumentik" />

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contact</a>
                        </li>

                        <li class="nav-item text-light">

                            <a class="nav-link disabled"><i class="fa-solid fa-cart-shopping text-light"></i><sup
                                    class=' text-light'>0</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">Total Price : 100/-</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Second Navbar   -->



        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login-in</a>
                </li>

            </ul>
        </nav>

        <!-- Third child -->



        <h3 class="text-center">
            Start Shopping
        </h3>
        <p class="text-center">Enjoy the sales of the day and get hugh discounts</p>
    </div>



    <!--Fourth Child -->

    <div class="row px-1">


        <div class="col-md-10">
        <div class='row'>
            <?php



if(isset($_GET['brannd'])){

    $brand_id=$_GET['brannd'];
    $select_product="
       select * from products where brand_id=$brand_id ";


$result_product=mysqli_query($conn,$select_product);
$num_of_rows=mysqli_num_rows($result_product);
if($num_of_rows==0){
echo "<h2 class=' mt-5 text-center' style='color:red; '> No  stock  found on this category";
}
else{


while(  $row=mysqli_fetch_assoc($result_product)){
$product_id=$row['product_id'];

$product_title=$row['product_title'];

$product_description=$row['product_description'];

$product_image1=$row['product_image1'];

$product_price=$row['product_price'];

$category_id=$row['category_id'];

$brand_id=$row['brand_id'];


echo       "  

<div class='col-md-4 mb-2'>

   <div class='card' style='width: 18rem;'>
       <img src='admin/product_image/$product_image1' class='card-img-top' alt='$product_title'>
       <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <p class='card-text'>$product_price /-</p>

           <a href='#' class='btn btn-info'>Add to cart</a>
       </div>
   </div>

</div>

";
}        
}
}




            elseif(!isset($_GET['category'])){
                if(!isset($_GET['brand'])){
                    
                $select_product="
                               select * from products order by rand()";


                $result_product=mysqli_query($conn,$select_product);


              while(  $row=mysqli_fetch_assoc($result_product)){
                $product_id=$row['product_id'];

                $product_title=$row['product_title'];

                $product_description=$row['product_description'];

                $product_image1=$row['product_image1'];

                $product_price=$row['product_price'];

                $category_id=$row['category_id'];
                
                $brand_id=$row['brand_id'];



         echo       "  

                <div class='col-md-4 mb-2'>

                    <div class='card' style='width: 18rem;'>
                        <img src='admin/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>$product_price /-</p>

                            <a href='#' class='btn btn-info'>Add to cart</a>
                        </div>
                    </div>

                </div>





";  
                 
              }


            }
        }

      
   
   



    elseif(isset($_GET['category'])){

         $category_id=$_GET['category'];
         $select_product="
            select * from products where category_id=$category_id order by rand()";


$result_product=mysqli_query($conn,$select_product);
$num_of_rows=mysqli_num_rows($result_product);
if($num_of_rows==0){
   echo "<h2 class=' mt-5 text-center' style='color:red; '> No  stock  found on this category";
}
else{


while(  $row=mysqli_fetch_assoc($result_product)){
    $product_id=$row['product_id'];

    $product_title=$row['product_title'];

    $product_description=$row['product_description'];

    $product_image1=$row['product_image1'];

    $product_price=$row['product_price'];

    $category_id=$row['category_id'];
    
    $brand_id=$row['brand_id'];


    echo       "  

    <div class='col-md-4 mb-2'>

        <div class='card' style='width: 18rem;'>
            <img src='admin/product_image/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>$product_price /-</p>

                <a href='#' class='btn btn-info'>Add to cart</a>
            </div>
        </div>

    </div>

";
}        
}
}




?>
        </div>
        </div>


            <!--   products   -->

        <div class="col-md-2 bg-secondary p-0">


            <!--   side Nav -->
            <!--    Delivery Brand  -->



            <ul class="navbar-nav me-auto">
                <li class="navbar-nav bg-info">

                    <a href="" class="nav-link text-light text-center">
                        <h4>Delivery Brands</h4>
                    </a>
                </li>

                <?php

        $select_category="select * from brands ";
        $result_category=mysqli_query($conn,$select_category);
while($row_data=mysqli_fetch_assoc($result_category)){
    $brand_id=$row_data['id'];
    $brand_title=$row_data['brand_title'];
    echo   "<li class='navbar-nav '>

    <a href='index.php?brannd=$brand_id' name='brand' class='nav-link text-light text-center'>$brand_title</a>
</li>";
}


?>



            </ul>


            <!-- category    -->


            <ul class="navbar-nav me-auto">
                <li class="navbar-nav bg-info">

                    <a href="" class="nav-link text-light text-center">
                        <h4> categories</h4>
                    </a>
                </li>

                <?php

                    $select_category="select * from categories ";
                    $result_category=mysqli_query($conn,$select_category);
                    while($row_data=mysqli_fetch_assoc($result_category)){
                        $category_id=$row_data['id'];
                        $cat_title=$row_data['category_title'];
                        echo   "<li class='navbar-nav '>

                        <a href='index.php?category=$category_id' class='nav-link text-light text-center'>$cat_title</a>
                    </li>";
                    }


                ?>

            </ul>



        </div>
    </div>
    </div>



    <div class="bg-info p-4 text-center">
        <p> All rights reserved © Designed by N Nikhil -2022</p>
    </div>




</body>

</html>