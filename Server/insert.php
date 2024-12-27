<?php
    include 'connect.php';
    $sql = "insert into tbl_form (username,email,password) 
            value('$username', '$email', '$password')";
            
    if (mysqli_query($conn,$sql)){
        echo"New record created sucessfully";

    }else{
        echo"Error: ".$sql."<br>".mysqli_error($conn);
    }
    
?>