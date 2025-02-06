<?php
//echo
echo "hello world";
echo 10 + 90;
echo "<br/>";
echo "hello coding <br/>";
echo ("function");
echo "<br/>";

//variable
$name = "preksha";
echo $name;
$a = $b = 90;
echo $a + $b;

//php with html,css
echo "<h1 style='color:blue'>Hello world</h1>" ?>

<h1>Hello my name is
    <?php
    echo $name;
    ?>
</h1>

<?php
$h3_color = "red";
//echo phpinfo();
const data = 10;
// const data=9;

// define('data',20);
echo var_dump(data);
?>

<h3 style="color:<?php echo $h3_color; ?>">Hello</h3>
<h3 style="color:<?php echo $h3_color; ?>">My name is</h3>
<h3 style="color:<?php echo $h3_color; ?>"><?php echo $name; ?></h3>

<?php
//operators
$a = 34;
$b = 10;
echo $a % $b;
echo '<br/>';
echo $a ** $b;
echo '<br/>';

$a = 10;
$b = 90;
echo var_dump($a <=> $b);
echo '<br/>';
echo $a++;
echo '<br/>';
echo $b++;
echo '<br/>';
echo $a;
echo '<br/>';
echo $b;
echo '<br/>';
echo ++$a;
echo '<br/>';
echo ++$b;
echo '<br/>';

//string
$str1 = "Hello how are you";
$str2 = ' Preksha';
echo "<h1 style='color:blue'>My name is" . $str2 . "</h1>";
echo '<br/>';
echo "My name is " . $str1 . $str2;
echo '<br/>';
echo $str1 . $str2;
echo '<br/>';
$str1 .= $str2;
echo '<br/>';
echo $str1;
echo '<br/>';

//functions
//nested function
$age;
function test($age)
{
    echo "age is less<br/>";
    if ($age > 18) {
        function display($age)
        {
            echo "age is $age<br/>";
        }
        display($age);
    }
}
test(78);

//variable function
function child()
{
    echo "child function is called<br/>";
}

$a = "child";
$a();

function parent($x)
{
    echo "parent function is called<br/>";
    $x();
}
parent($a);


//In-built functions
$str = "Preksha rana here";
echo strlen($str);
echo substr($str, 8);
echo "<br/>";

echo date("d");
echo date("M");
echo date("d.m.y");
echo "<br/>";

echo is_string($str);
echo "<br/>";

$num = 0;
echo is_int($num);
echo "<br/>";

echo rand();
echo "<br/>";

// die;
// exit();

//Arrays-->indexed array, associative array,multi-dimensional array
$products = ["laptop", "television", "mobile"];

foreach ($products as $i) {
    echo $i;
    echo "<br>";
}

$productDetails = [
    "name" => "laptop",
    "price" => "200000",
    "quality" => "good"
];

foreach ($productDetails as $key => $i) {
    echo $key . " is " . $i;
    echo "<br>";
}

$productss = [
    [1, "laptop", "200000", "good"],
    [2, "television", "80000", "avearge"]
];

// echo "<pre>";
// print_r($productss);
// echo "</pre>";

for ($i = 0; $i < count($productss); $i++) {
    for ($j = 0; $j < count($productss[$i]); $j++) {
        echo $productss[$i][$j];
        echo "<br>";
    }
}

//Add and Remove array elements
array_push($products, "washing machine");
print_r($products);
echo "<br/>";
array_pop($products);
print_r($products);
echo "<br/>";
array_splice($products, -1);
print_r($products);

//Array functions
$users = ["damon", "stefan", "elena"];
echo "<br/>";
// $users=10;
// print_r($users); echo "<br/>";
if (is_array($users)) {
    foreach ($users as $x) {
        echo $x;
        echo "<br>";
    }
} else {
    echo "Not an array";
}

// unset($users[1]);
// print_r($users);

array_push($users, "klaus");
print_r($users);
echo "<br>";
print_r(array_keys($productDetails));


//global and local variables
$number = 10;
function getNumber()
{
    global $number;
    $number = 90;
    echo $number;
}
echo "<br/>";
getNumber();
echo "<br/>";
echo $number;

//Super global variables
// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
?>

<!-- Cookies -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Enter your username">
        <br>
        <br>
        <button name="button" value="set">Set Cookies</button>
        <br>
        <br>
        <button name="button" value="display">Display Cookies</button>
        <br>
        <br>
        <button name="button" value="delete">Delete Cookies</button>
        <br>
        <br>
        <button name="button" value="setSession">Set Session</button>
        <br>
        <br>
        <button name="button" value="getSession">Get Session</button>
        <br>
        <br>
        <button name="button" value="deleteSession">Delete Session</button><br><br>
        <input type="text" name="filename" placeholder="Enter file name"><br><br>
        <textarea name="content" placeholder="Enter content of file"></textarea><br><br>
        <button>Create File</button><br><br>
        <input type="file" name="readfile"><br><br>
        <button>Read File</button>
    </form>
</body>

</html>

<?php
//Cookies
//setcookie(name,value,expires,path,domain,secure, httponly)
// echo "<br/>";
// setcookie("fruit", "apple", time() + 86400);
// if (isset($_COOKIE['fruit'])) {
//     echo $_COOKIE['fruit'];
//     echo "<br/>";
//     echo "<br/>";
//     echo "<br/>";
// } else {
//     echo "cookie is not set";
// }

// if (isset($_POST['button'])) {
//     if ($_POST['button'] == "set") {
//         $val = $_POST['username'];
//         //echo $val;
//         setcookie("username", $val);
//         echo "cookie is set";
//     }
//     if ($_POST['button'] == "display") {
//         if (isset($_COOKIE['username'])) {
//             echo $_COOKIE['username'];
//         }
//     }
//     if ($_POST['button'] == "delete") {
//         if (isset($_COOKIE['username'])) {
//             setcookie("username", null, -1);
//         }
//     }
// }

//Session
// session_start();

// $_SESSION["name"] = "preksha";
// echo "<br/>";
// $_SESSION["email"] = "preksha@gmail.com";
// echo "<br/>";
// session_unset();
// session_destroy();
// print_r($_SESSION);

// if(isset($_POST["button"])){
//     if($_POST['button']=="setSession"){
//         $val = $_POST["username"];
//         $_SESSION["username"]=$val;
//     }

// }

//File operations
// if (isset($_POST['filename'])) {
//     $fileName = "files/" . $_POST['filename'];
//     $content = $_POST['content'];
//     $file = fopen($fileName, "w") or die("unable to create file");
//     fwrite($file, $content);
//     fclose($file);
//     echo "file is created";
// }

// if(isset($_FILES['readfile'])) {
//     $filename=$_FILES['readfile']['tmp_name'];
//     $myFile=fopen($filename,"r");
//     echo fread($myFile,filesize($filename)) or die("file name is not valid");
//     fclose($myFile);
// }

$path = "files";
$items = scandir($path);
$items = array_diff($items, array(".", ".."));
foreach ($items as $item) {
    echo "<a href=./files/$item>$item</a>";
    echo "<br/>";
}

//JSON data
// $arr=["name"=>"preksha","age"=>21];
// $jsonData=json_encode($arr);
// echo $jsonData;

// $jsonData='{"name":"preksha","age":21}';
// $arr=json_decode($jsonData,true);
// print_r($arr);
// $arr=json_decode($jsonData);
// print_r($arr);

//Date and time
echo date_default_timezone_get();
date_default_timezone_set("Asia/Kolkata");
echo date('d M Y');echo '<br/>';
echo date("h:i:s A");echo '<br/>';

//oops concepts
//Parent class
class Animal{
    public $name;
    //Constants
    const animalPlace="Forest";
    //static property
    static public $animalCount="1000";
    //Constructor
    function __construct(){
        $this->name="rabbit";
    }
    function getName(){
        //Access Constant variable
        echo self::animalPlace;echo " ->";
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    //static method
    static function animalPlace(){
        echo self::animalPlace;
    }
    static public function animalCount(){
        echo static::$animalCount;
    }
}
//Child class
class AnimalDetails extends Animal{
    //Property overriding
    public $name;
    public $type;
    static public $animalCount="30";
    
    function __construct(){
        $this->name="horse";
        $this->type="pet";
    }
    //Method overriding
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    function getType(){
        return $this->type;
    }
    function setType($type){
        $this->type=$type;
    }
}

echo Animal ::animalPlace;echo "<br>";
$obj1=new Animal();
echo $obj1->getName();echo "<br/>";
$obj1->setName("cat");
echo $obj1->getName();echo "<br/>";

$obj2=new AnimalDetails();
$obj2->setName("dog");
echo $obj2->getName();echo "<br/>";
echo $obj2->getType();echo "<br/>";

$obj3=new AnimalDetails();
echo $obj3->getName();
$obj3->setName("donkey");echo "<br/>";
echo $obj3->getName();echo "<br/>";

//static method calling
echo Animal::animalPlace();echo "<br/>";
//late static binding
$obj4=new AnimalDetails();
echo $obj4->animalCount();

?>