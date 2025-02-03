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
?>