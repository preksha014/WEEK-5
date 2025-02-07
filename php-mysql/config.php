<?php

// $host="localhost:3307";
// $username="root";
// $password= "";
// $dbname="college";

// $conn=new mysqli($host,$username,$password,$dbname);
// if($conn->connect_error){
//     die("database is not connected".$conn->$connect_error);
// }else{
//     echo "database is connected";
//     echo "<br/>";
//     $result=$conn->query("show tables")->fetch_all();
//     print_r($result);
// }

// $host="localhost:3307";
// $username="root";
// $password="";

// try{$conn=new PDO("mysql:host=$host;dbname=college",$username,$password);
// $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "connection done";
// } catch(PDOException $e) {
//     echo $e->getMessage();
// }
// $result=$conn->query("show tables");
// while($row=$result->fetch(PDO::FETCH_NUM)){
//     print_r($row);
// }

session_start(); // Start the session

$host = "localhost:3307"; 
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $_SESSION['error'] = $e->getMessage();
}

?>