<?php      
    include('configM.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script>alert('User login successful');</script>";
            echo "<script>window.location.href = 'home.php';</script>";
        }  
        else{  
            echo "<script>alert('Invalid email or password');</script>";
            echo "<script>window.location.href = 'loginM.php';</script>";
        }     
?>