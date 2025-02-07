<?php
// include("./form.html");
// if(isset($_POST["name"])){
// $name = $_POST['name'];
// $email = $_POST['email'];
// $password1 = $_POST['password'];
// $gender = $_POST['gender'];
// $city = $_POST['city'];
// $skills = implode(',',$_POST['skills']);
// $bio = $_POST['bio'];
// if (isset($_FILES['file'])) {
//     $filename = $_FILES['file']['name'];
//     $filepath = "./files/" . $filename;
//     if (move_uploaded_file($_FILES['file']['tmp_name'], $filepath)) {
//         echo "File is uploaded succesfully";echo"<br/>";
//     } else {
//         die( 'unable to upload file');
//     }
// }
// }
// if (isset($_POST['name'])) {
//     include("./config.php");
//     // $getData = $conn->prepare("SELECT * FROM `students`");
//     // $getData->execute();
//     // $getData = $getData->fetchAll();
//     // echo "<pre>";
//     // print_r($getData);
//     // echo "</pre>";

//     $student = $conn->prepare("INSERT INTO `students`(`id`, `name`, `email`, `password`, `gender`, `city`, `skills`, `bio`, `resume`) VALUES (NULL,'$name','$email','$password1','$gender','$city','$skills','$bio','$filepath')");
//     $student->execute();
//     if ($student) {
//         echo "data is inserted";echo"<br/>";
//         header("Location: ./data.php ");

        
//     } else {
//         die( "operation is failed");
//     }
//     exit();
// }

session_start();
include("./form.html");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $skills = implode(',', $_POST['skills']);
    $bio = $_POST['bio'];
    $filepath = "";

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $filename = $_FILES['file']['name'];
        $filepath = "./files/" . $filename;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $filepath)) {
            $_SESSION['file_message'] = "File is uploaded successfully.";
        } else {
            $_SESSION['error'] = "Unable to upload file.";
            header("Location: data.php");
            exit();
        }
    }

    include("./config.php");

    $student = $conn->prepare("INSERT INTO `students`(`id`, `name`, `email`, `password`, `gender`, `city`, `skills`, `bio`, `resume`) 
                               VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
    $isInserted = $student->execute([$name, $email, $password1, $gender, $city, $skills, $bio, $filepath]);

    if ($isInserted) {
        $_SESSION['success'] = "Database connected successfully.<br/>";
        if (isset($_SESSION['file_message'])) {
            $_SESSION['success'] .= $_SESSION['file_message'] . "<br/>";
        }
        $_SESSION['success'] .= "Data is inserted successfully.";
    } else {
        $_SESSION['error'] = "Operation failed.";
    }

    header("Location: data.php");
    exit();
}

// Display session messages
if (isset($_SESSION['success'])) {
    echo '<p style="color:green;">' . $_SESSION['success'] . '</p>';
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']);
}

?>