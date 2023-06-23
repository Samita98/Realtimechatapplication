<?php 
    session_start();
    include_once "config.php";
    include "function.php";
    $hostname = "localhost";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!isset($_SESSION['userlist'])){
        $_SESSION['userlist']=array();
    }
   // $userdata=array();
    //if($_POST)
   // {
        //$email = $_POST['email'];
      //  $password = $_POST['password'];
      //  $ciphering = "AES-128-CTR"; 
            //$iv_length = openssl_cipher_iv_length($ciphering); 
            //$options = 0; 
           // $encryption_iv = '1234567891011121';
         //   $encryption_key = "a44afb0b6808d662";
    
       //     $encryptedpswd = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);
    
     //}
   // if(!empty($email) && !empty($password))
    //{
   //     header('location:http://'.$hostname.'/chatapp/Login.php');
 
 // }
 //elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) 
 // {
      // $sql =("SELECT * FROM tbl_users where email='$email' and password='$encryptedpswd'")  or die("failed to query database".mysqli_error());
         
            
           // $result=mysqli_query($conn,$sql);
            
          //  $row=mysqli_fetch_array($result);
 
           //if($row['email']==$email && $row['password']==$encryptedpswd)
            //{
             //$updateStatus="UPDATE tbl_users set status='1' where user_id =".$row['user_id'];
           //  mysqli_query($conn,$updateStatus);
             //  echo"<script>alert('Log In seccessfully!!!' );</script>";
                 
                 
                // $userdata=array("fullname"=>$row['f_name'],
               //"lastname"=>$row['l_name'],
               //  "email"=>$email,
             //  "user_id"=>$row['user_id'],
           //  "user_image"=>$row['user_image'],
           //"status"=>$row['status']);
 
               
               //if(!findUser($row['user_id']))
               //  {
             //      array_push($_SESSION['userlist'],$userdata);
           //      }
            
             //header('location:http://'.$hostname.'/chatapp/index.php?user_id='.$row['user_id']);
                            
 
           // }
           // else
            //{
             
             //echo "<script> alert('failed to login'); </script>";
             //header('location:http://'.$hostname.'/chatapp/Login.php');
           //  exit();
        //    }
    
  {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }//else{
        //echo "All input fields are required!";
    //}
?>