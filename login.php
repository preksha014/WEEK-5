<?php
    // if($_GET){
    //     echo "User name is ".$_GET['username'];
    //     echo "User password is ".$_GET['password'];
    // }

    // if($_POST){
    //     echo "User name is ".$_POST['username'];
    //     echo "User password is ".$_POST['password'];
    // }

    // if($_REQUEST){
    //     echo 'User name is '.$_REQUEST['username'];echo "<br/>";
    //     echo 'User password is '.$_REQUEST['password'];
    // }

    print_r($_FILES);

    if($_FILES['fileUpload']){
        $path='./uploads/'.$_FILES['fileUpload']['name'];
        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$path)){
            echo "file uploaded";
        } else{ echo "file is not uploaded";}
    }
?>