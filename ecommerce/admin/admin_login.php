


<?php



require  "../includes/mystore_database.php";
if(($_SERVER['REQUEST_METHOD']=="POST")){
$email_id=$_POST['email_id'];
$select_query=" select * from `login_credentials` where email_id='$email_id'";
$select_result=mysqli_query($conn,$select_query);
$number=mysqli_num_rows($select_result);
if($number>0){
    echo "<script>alert('The category is already present in the table')</script>";
}
else{
        $sql="
        INSERT INTO login_credentials(email_id,password) VALUES(?,?)
         ";
         $stmt=mysqli_prepare($conn,$sql);
         if($stmt==false){
            echo mysqli_error($conn);
         }
         else{

            mysqli_stmt_bind_param($stmt,'ss',$_POST['email_id'],$_POST['password']);
            if(mysqli_stmt_execute($stmt)){

                
                echo '<script>alert("You  have been created account  successfully")</script>';

            }
         }
}
}





?>


<!DOCTYPE html>
<html>
<head>
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


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>



<form method='POST'   action="">
  <div class="container">
    <h1>Login</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" autocomplete='off' placeholder="Enter Email" name="email_id" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" autocomplete='off' placeholder="Enter Password" name="password" id="psw" required>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button class='bg-info p-2 border-0 m-3' style="border-radius:5px;" name='insert_brand' >Login</button><br>

</div>
  
  <div class="container signin">
    <p>Don't have an account? <a href="admin_login.php">Register</a>.</p>
  </div>
</form>

</body>
</html>
