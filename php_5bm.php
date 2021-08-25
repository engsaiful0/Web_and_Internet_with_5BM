<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
session_start();
echo "Hello world";

$data = 100;//variable declaration
//loosely  typed PHP,python
//strictly typed
//c,c++,java,c#

echo '<br>The value fo data is=' . $data;

$firstNumber = 120;
$secondNumber = 100;
$result = $firstNumber + $secondNumber - $firstNumber;
echo $result;

echo '<pre>';
$array = array('karim', 'rahim', 123, 100);

print_r($array);//debugger

var_dump($array);

for ($index = 0; $index < count($array); $index++) {
    echo $array[$index] . '<br>';
}

foreach ($array as $valueOfArray)
    {
        echo $valueOfArray.'<br>';
    }//foreach

$associative_array = array(
    "Karim" => 'CSE',
    "Halim" => 'EEE',
    "Kabir" => "CE"
);
foreach ($associative_array as $key=>$value)

{
    echo 'Key is<b> '.$key.'</b> and value is<b> '.$value.'</b><br>';
}
function summation($numberOne,$numberTwo)
{
    return $numberOne+$numberTwo;
}

echo "The sum of two number".summation(10,15);

$_SESSION['myDepartmentName']='CSE';


?>
</body>
</html>