<?php

    $conn=mysqli_connect("localhost","root","","mystore");
    if($conn){
    }
    else{

        echo mysqli_error($conn);

    }


?>