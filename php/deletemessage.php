<?php
 include "confign.php";
 include "function.php";

 $hostname="localhost";
if(isset($_POST['msg_id']))
{
 $sql="UPDATE tbl_message SET delete_status='2' WHERE msg_id=".$_POST['msg_id'];
 // $sql="DELETE from tbl_message WHERE msg_id=".$_POST['msg_id'];
 mysqli_query($conn,$sql);
}
 // if($_GET){
 //     $msg_id = $_GET['msg_id'];
 //     $fromuser_id=$_GET['fromuser_id'];
 //     $touser_id=$_GET['touser_id'];
 //     $output="";
 //     $message="This message has been deleted.";
 //     $error="error";
 //     $sql = "DELETE FROM tbl_message WHERE msg_id = '$msg_id'";
 //     mysqli_query($conn,$sql);
 // }

 //     if(mysqli_query($conn, $sql))
 //     {
 //         $output.='<p>'.$message.'</p>';
 //         // $sql1="Select * from tbl_message WHERE msg_id=$msg_id";
 //         // echo $sql1;
 //         // $result1=mysqli_query($conn,$sql1);
     
 //         // if(mysqli_num_rows($result1)>0)
 //         // {
 //         //     while($row=mysqli_fetch_array($result1))
 //         //     { 
 //         //        if($row['fromuser_id']==$fromuser_id)
 //         //        {
 //         //            $output .= '<div class="message my_msg">
 //         //                             <p>'.$message.'</p>
 //         //                         </div>';
                
 //         //        }
 //         //       else{
 //         //           $output .= '<div class="message friend_msg">
 //         //                             <p>'.$message.'</p>
 //         //                         </div>';
                 
 //         //          }         
 //         //     }    
 //         // }
        
              
     
 //     }
 //     else{
     
 //        $sql1="Select * from tbl_message WHERE msg_id=$msg_id ORDER BY msg_id ASC";
 //        echo $sql1;
 //         $result1=mysqli_query($conn,$sql1);
     
 //         if(mysqli_num_rows($result1)>0)
 //         {
 //             while($row=mysqli_fetch_array($result1))
 //             { 
 //                if($row['fromuser_id']==$fromuser_id)
 //                {
 //                    $output .= '<div class="message my_msg">
 //                                     <p>'.$error.'</p>
 //                                 </div>';
                
 //                }
 //               else{
 //                   $output .= '<div class="message friend_msg">
 //                                     <p>'.$error.'</p>
 //                                 </div>';
                 
 //                  }         
 //             }    
 //         }
 // }
 //     echo $output;
 // }
 mysqli_close($conn);
?>