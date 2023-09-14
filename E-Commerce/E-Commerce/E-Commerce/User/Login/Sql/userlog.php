<?php   


if(isset($_POST['ulog'])){
    session_start();
    include('config.php');  
    $username = $_POST['uname'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from user where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['login_admin'] = $username; 
            echo "<script> alert('Login successful');
             window.location = '/E-Commerce/User/Index/index.php';
            </script>";
           	  
        }  
        else{  
            echo "<script> alert('Login failed. Invalid username or password.');
            window.location ='/E-Commerce/User/index.php';
            
            </script>";  
        } 
    }    
?>  