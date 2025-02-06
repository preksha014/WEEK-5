<?php
if(isset($_POST)){
    echo "<br/>";
    echo "User name is ".$_POST['name'];echo "<br/>";
    echo "User email is ".$_POST['email'];echo "<br/>";
    echo "User password is ".$_POST['password'];echo "<br/>";
    echo "User gender is ".$_POST['gender'];echo "<br/>";
    echo "User city is ".$_POST['city'];echo "<br/>";
    echo "User skills are ".implode(',',$_POST['skills']);echo "<br/>";
    echo "User bio is ".$_POST['bio'];echo "<br/>";
    if(isset($_FILES['file'])){
        //print_r($_FILES);
        $filename=$_FILES['file']['name'];
        //echo $filename;
        $filepath="./files/".$filename;
        //echo $filepath;
        if(move_uploaded_file($_FILES['file']['tmp_name'],$filepath )){
            echo "File is uploaded succesfully";
        } else{
            echo 'unable to upload file';
        } 
    }
}

?>