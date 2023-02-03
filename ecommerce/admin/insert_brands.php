<?php
include 'header.php';
?>

<?php
    require  "../includes/mystore_database.php";
    if(($_SERVER['REQUEST_METHOD']=="POST")){
    $brand=$_POST['brand_title'];
    $select_query=" select * from `brands` where brand_title='$brand'";
    $select_result=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($select_result);
    if($number>0){
        echo "<script>alert('The category is already present in the table')</script>";
    }
else{
            $sql="
            INSERT INTO brands(brand_title) VALUES(?)
             ";
             $stmt=mysqli_prepare($conn,$sql);
             if($stmt==false){
                echo mysqli_error($conn);
             }
             else{

                mysqli_stmt_bind_param($stmt,'s',$_POST['brand_title']);
                if(mysqli_stmt_execute($stmt)){

                    $category=$_POST['brand_title'];
                    echo '<script>alert("$brand has been inserted successfully")</script>';

                }
             }
    }
    }
?>


<div class="container">
<form action="" method="POST">

    <div class="input-group mb-3 text-center">
        <span class="input-group-text" id="basic-addon1"><i class="fa-duotone fa-input-text"></i>
        </span>
        <input type="text" class="form-control" required name='brand_title' placeholder="Insert Brands" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
   <button class='bg-info p-2 border-0 m-3' style="border-radius:5px;" name='insert_brand' >Insert Brands</button><br>
    <!--<div class="input-group mb-3">
        <input type="submit" class="form-control bg-info" name='insert_cat' value="insert categories"
            placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
-->


</form>
</div>  
<?php
include  'footer.php';

?>