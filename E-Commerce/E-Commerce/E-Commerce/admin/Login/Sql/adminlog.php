<?php    

if(isset($_POST['alog'])){  
    session_start();
    include('config.php');  
    $username = $_POST['uname'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['login_user'] = $username;
            echo "<script> alert('Login successful');
             window.location ='/E-Commerce/Admin/Index/index.php';	
            </script>";
            
        }  
        else{  
            echo "<script> alert('Login failed. Invalid username or password.');
            window.location ='/E-Commerce/Admin/index.php';
            
            </script>";  
        }   
    }  
?>  