<?php
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
echo "<h1 style='color:blue'>Hello world</h1>"

    ?>

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
function test($age){
    echo "age is less<br/>";
    if($age>18){
        function display($age){
            echo "age is $age<br/>";
        }
       display($age);
    }
}
test(78);

//variable function

function child(){
    echo "child function is called<br/>";
}

$a="child";
$a();

function parent($x){
    echo "parent function is called<br/>";
    $x();
}
parent($a);

//In-built functions
$str="Preksha rana here";
echo strlen($str);
echo substr($str,8);
echo "<br/>";

echo date("d");
echo date("M");
echo date("d.m.y");
echo "<br/>";

echo is_string($str);
echo "<br/>";

$num=0;
echo is_int($num);
echo "<br/>";

echo rand();echo "<br/>";

// die;
// exit();

//Arrays-->indexed array, associative array,multi-dimensional array
$products=["laptop","television","mobile"];

foreach($products as $i){
    echo $i;
    echo "<br>";
}

$productDetails=[
    "name"=>"laptop",
    "price"=>"200000",
    "quality"=>"good"
];

foreach($productDetails as $key=> $i){
    echo $key ." is ".$i;
    echo "<br>";
}

$productss=[
    [1,"laptop","200000","good"],
    [2,"television","80000","avearge"]
];

// echo "<pre>";
// print_r($productss);
// echo "</pre>";

for($i=0;$i<count($productss);$i++){
    for($j=0;$j<count($productss[$i]);$j++){
        echo $productss[$i][$j];
        echo "<br>";
    }
} 

//Add and Remove array elements
array_push($products,"washing machine");
print_r($products);echo "<br/>";
array_pop($products);
print_r($products);echo "<br/>";
array_splice($products,-1);
print_r($products);

?>