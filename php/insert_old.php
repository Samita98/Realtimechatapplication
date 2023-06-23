<!-- <php

    include_once "config.php";
if(!empty($_FILES)){
      
      $message=$_FILES['file']['name'];
      $from_id=$_POST['from_id'];
      $to_id=$_POST['to_id'];
      $resulting=appendUserId($from_id,$to_id);
     


      $ciphering = "AES-128-CTR"; 
      $options = 0; 
      $encryption_iv = '1234567891011121';
      $encryption_key = $resulting;
      $encryptedmsg = openssl_encrypt($message, $ciphering, $encryption_key, $options, $encryption_iv);
      $folder="image/".$encryptedmsg;
            
          $sql = "INSERT into tbl_msg (from_id,message,to_id) VALUES ('$from_id','$encryptedmsg','$to_id')";
      if(mysqli_query($conn,$sql))
      {
          echo"data is added";
              if(move_uploaded_file($_FILES["file"]["tmp_name"],$folder))
              {
                  echo"image is successfully uploaded!!!!";
              }
              else{
                  echo"image is not uploaded!!";
              }
      }
      else{
          echo"data is not added";
      }
  

  }
  else{
      
      $message = $_POST['message'];
      $from_id=$_POST['from_id'];
      $to_id=$_POST['to_id'];
      $resulting=appendUserId($from_id,$to_id);
     
     $ciphering = "AES-128-CTR"; 
      $options = 0; 
      $encryption_iv = '1234567891011121';
      $encryption_key = $resulting;
      $encryptedmsg = openssl_encrypt($message, $ciphering, $encryption_key, $options, $encryption_iv);
           
      
          $sql = "INSERT into tbl_msg (from_id,message,to_id) VALUES ('$from_id','$encryptedmsg','$to_id')";
      if(mysqli_query($conn,$sql))
      {
          echo"data is added";
      }
      else{
          echo"data is not added";
      }

  }

  
// }
  
  // if($_POST)
  // {
  //     $message = $_POST['message'];
      

  //     $ciphering = "AES-128-CTR"; 
      
  //     $options = 0; 
  //     $encryption_iv = '1234567891011121';
  //     $encryption_key = "a44afb0b6808d662";

  //     $encryptedmsg = openssl_encrypt($message, $ciphering, $encryption_key, $options, $encryption_iv);
  //     $sql = "INSERT into tbl_message (message) VALUES ('$encryptedmsg')";
  //          if(mysqli_query($conn, $sql))
  //          {
  //                echo"data has been successfully inserted!!";         
  //          } 
  //         else
  //         {
  //          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            
           
  //             }
              
          
  //             socket session in js
  //             how to create web socket end in php
  //             how to create web socket end in php
             
           

  //     }
       
  mysqli_close($conn);
?> -->
