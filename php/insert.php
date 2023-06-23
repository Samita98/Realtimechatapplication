<?php
include_once "config.php";
if (!empty($_FILES)) {

    $message = $_FILES['file']['name'];
    $from_id = $_POST['from_id'];
    $to_id = $_POST['to_id'];
    $resulting = appendUserId($from_id, $to_id);


    $ciphering = "AES-128-CTR";
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = $resulting;
    $encryptedmsg = openssl_encrypt($message, $ciphering, $encryption_key, $options, $encryption_iv);
    $folder = "image/" . $encryptedmsg;

    $sql = "INSERT into tbl_msg (from_id,message,to_id) VALUES ('$from_id','$encryptedmsg','$to_id')";
    if (mysqli_query($conn, $sql)) {
        echo "Data is added";
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $folder)) {
            echo "Image is successfully uploaded!!!!";
        } else {
            echo "Image is not uploaded!!";
        }
    } else {
        echo "Data is not added";
    }

} else {

    $message = $_POST['message'];
    $from_id = $_POST['from_id'];
    $to_id = $_POST['to_id'];
    $resulting = appendUserId($from_id, $to_id);

    $ciphering = "AES-128-CTR";
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = $resulting;
    $encryptedmsg = openssl_encrypt($message, $ciphering, $encryption_key, $options, $encryption_iv);

    $sql = "INSERT into tbl_msg (from_id,message,to_id) VALUES ('$from_id','$encryptedmsg','$to_id')";
    if (mysqli_query($conn, $sql)) {
        echo "Data is added";
    } else {
        echo "Data is not added";
    }
}

mysqli_close($conn);
?>
