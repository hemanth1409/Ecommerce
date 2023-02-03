
<?php

include '../includes/mystore_database.php';


?>
<?php

   if($_SERVER['REQUEST_METHOD']=='POST'){



    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $category_id=$_POST['product_category'];
    $brand_id=$_POST['product_brand'];
    $product_price=$_POST['product_price'];


    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];


    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
   

    $insert_query='
    INSERT INTO `products`
    (`product_title`,`product_description`,`product_keyword`,`category_id`,`brand_id`,`product_image1`,`product_image2`,`product_image3`,`product_price`)
     VALUES("'.$product_title.'","'.$description.'","'.$product_keywords.'","'.$category_id.'","'.$brand_id.'","'.$product_image1.'","'.$product_image2.'","'.$product_image3.'","'.$product_price.'")';

    $result=mysqli_query($conn,$insert_query);
    if($result==false){
        echo mysqli_error($conn);

    }
    else{


        move_uploaded_file($temp_image1,"./product_image/$product_image1");
        move_uploaded_file($temp_image2,"./product_image/$product_image2");
        move_uploaded_file($temp_image3,"./product_image/$product_image3");
        
        echo  `<script>alert(" $product_title has been inserted successfully" )</script>`;
        
    }

   }
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

    <title>Insert Product</title>
</head>

<body>
  
<div class="bg-light">
        <div class="container">
            <h1 class="text-center mt-3">
                Insert Product
            </h1>
            <form  method='POST' enctype='multipart/form-data'>

                <!-- title --->
                <div class="form mb-4 w-50 m-auto">
                    <label for="product_title" class='form-label'>Product Title :</label>
                    <input type="text" name="product_title" id='product_title' placeholder='Enter Product Title'
                        autocomplete='off' class='form-control' required>
                </div>



                <!-- description -->

                <div class="form mb-4 w-50 m-auto">
                    <label for="description" class='form-label'>Product Description :</label>
                    <input type="text" name="description" id='description' placeholder='Enter Product Description'
                        autocomplete='off' class='form-control' required>
                </div>


                <!-- keywords -->

                <div class="form mb-4 w-50 m-auto">
                    <label for="product_keywords" class='form-label'>Product keyword :</label>
                    <input type="text" name="product_keywords" id='product_keywords' placeholder='Enter product   '
                        autocomplete='off' class='form-control' required>
                </div>

                <!-- categories  -->
                <div class="form mb-4 w-50 m-auto">

                    <label for="product_category" class='form-label'> Select a category :</label>

                    <select name="product_category" id="product_category" class='form-select'>
                        <option value=""> select Category</option>
                        <?php
                        $select_category='select * from categories ';
                        $result_category=mysqli_query($conn,$select_category);
                        while  ($row=mysqli_fetch_assoc($result_category)){
                            $category_id=$row['id'];
                            $category_title=$row['category_title'];

                         echo    "<option value='$category_id'> $category_title</option>";

                        }

?>



                    </select>

                </div>

                <!-- Brands  -->
                <div class="form mb-4 w-50 m-auto">

                    <label for="product_brand" class='form-label'> Select a Brand :</label>

                    <select name="product_brand" id="product_brand" class='form-select'>
                    <option value=""> Select Brand</option>

                    <?php
                        $select_brand='select * from brands ';
                        $result_brand=mysqli_query($conn,$select_brand);
                        while  ($row=mysqli_fetch_assoc($result_brand)){
                            $brand_id=$row['id'];
                            $brand_title=$row['brand_title'];

                         echo    "<option value='$brand_id'> $brand_title</option>";

                        }

?>


                    </select>

                </div>


                <!-- Image 1 -->
                <div class="form mb-4 w-50 m-auto">
                    <label for="product_image1" class='form-label'>Product Image 1 :</label>
                    <input type="file" name="product_image1" id='product_image1' class='form-control' required>
                </div>


                <!-- Image 2 -->
                <div class="form mb-4 w-50 m-auto">
                    <label for="product_image2" class='form-label'>Product Image 2 :</label>
                    <input type="file" name="product_image2" id='product_image2' class='form-control' required>
                </div>




                <!-- Image 3 -->
                <div class="form mb-4 w-50 m-auto">
                    <label for="product_image3" class='form-label'>Product Image 3 :</label>
                    <input type="file" name="product_image3" id='product_image3' class='form-control' required>
                </div>

                                  <!-- product price  -->
                                <div class="form mb-4 w-50 m-auto">
                    <label for="product_price" class='form-label'>Product price :</label>
                    <input type="text" name="product_price" id='product_price' class='form-control' autocomplete='off' required>
                </div>


                <!-- Submit -->

                <div class="form mb-4 w-50 m-auto">
                    <input type="submit" name="product_submit" id='product_submit' class='btn btn-info mx-3' value ='Insert Product'>
                </div>





            </form>
        </div>
    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>