<?php
$arr=[1,2,2,4];
echo count($arr);echo "<br/>";
// array_push($arr,16,19);
// print_r($arr);echo "<br/>";

// array_pop($arr);
// print_r($arr);echo "<br/>";

// echo array_shift($arr);echo "<br/>";
// print_r($arr);echo "<br/>";

// array_unshift($arr,12,14);
// print_r($arr);echo "<br/>";

$arr2=["hello","how","are","you"];
// $result= array_merge($arr,$arr2);
// print_r($result);echo "<br>";

$result=array_combine($arr2, $arr);
print_r($result);echo "<br/>";

print_r(array_keys($result));echo "<br/>";
print_r(array_values($result));echo "<br/>";

echo array_search(1,$result);echo "<br/>";
echo in_array(1,$result);echo "<br/>";

print_r(array_reverse($result));echo "<br/>";

// print_r(array_slice($result,1,2));echo "<br/>";
print_r(array_splice($result,1,1));echo "<br/>";

print_r(array_unique($result));echo "<br/>";



print_r(implode(",",$result));echo "<br/>";

$str="hello how are you";
print_r(explode(" ",$str));echo "<br/>";
echo ucfirst($str);echo "<br/>";
echo ucwords($str);echo "<br/>";

$number=12345.98;
//number_format(float $number, int $decimals = 0, string $decimal_separator = ".", string $thousands_separator = ",")
echo number_format($number,3, ".", ",");echo "<br/>";

echo md5($str);echo "<br/>";
echo sha1($str);echo "<br/>";
?>