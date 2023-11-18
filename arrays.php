<?php
//1
echo "1. Write a script which will display the following string.
color = array('white', 'green', 'red', 'blue', 'black');";

$color = array('white', 'green', 'red', 'blue', 'black');
echo "<pre>";
print_r($color);
echo "</pre>";

echo implode(" ", $color) . "<br>";

//2
echo "<br> 2.Write a PHP script that inserts a new item in an array in any position. Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5 <br>";

$arr = array(1, 2, 3, 4, 5);
array_splice($arr, 3, 0, "$");
foreach ($arr as $x) {
    echo "$x ";
}

//3
echo "<br> 3. Write a PHP script which decodes the following JSON string.
Sample JSON code :";
// {
//     ""Title"": ""The Cuckoos Calling"",
//     ""Author"": ""Robert Galbraith"",
//     ""Detail"": {
//         ""Publisher"": ""Little Brown""
//     }
// }
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown";

$data = array(
    "Title" => "The Cuckoos Calling",
    "Author" => "Robert Galbraith",
    "Detail" => array(
        "Publisher" => "Little Brown"
    )
);


$jsonString = json_encode($data);
echo "<pre>";
echo $jsonString;
echo "</pre>";

//4
echo "<br> 4. Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays :
Color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red')";

$colors2 = array("A" => "Blue", "B" => "Green", "C" => "Red");
$newArr1 = array();
$newArr2 = array();
foreach ($colors2 as $key => $val) {
    $a = strtoupper($val);
    $b = strtolower($val);
    array_push($newArr1, $a);
    array_push($newArr2, $b);
};

echo "<br> Values are in upper case.<br>";
    print_r($newArr1);
echo "<br>Values are in lower case. <br>";
    print_r($newArr2);

// 5
echo "<br> 5. Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.";
$arr1 = array("A", "B", "C");
$arr2 = array(15, 87, 54);

$result = array_combine($arr1, $arr2);
echo "<pre>";
print_r($result);
echo "</pre>";

//6
echo "<br> 6.  Write a PHP function to search a specified value within the values of an associative array.";
$empArr = array("Yashik" => 23, "Pawan" => 12, "Vaibhav" => 32);
echo "<br>" . array_search(32, $empArr) . "<br>";

//7
echo "<br> 7. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
Note : Do not use any PHP control statement. 
Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248 <br>";

function displayNumbers($num)
{
    if ($num <= 250) {
        echo "$num,";
        displayNumbers($num + 4);
    }
}

displayNumbers(200);

//8
echo "<br><br> 8. color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white";
$collors = array(4 => 'white', 6 => 'green', 11 => 'red');
echo "<br>" . array_shift($collors);

//9
echo "<br><br> 9. Merge array (by index)";
$a1 = array(array(77, 87), array(23, 45));
$a2 = array("w3resource", "com");
function merge($x, $y)
{
    $temp = array();
    array_push($temp, $x);
    if (is_scalar($y)) {
        array_push($temp, $y);
    } else {
        foreach ($y as $k => $v) {
            array_push($temp, $v);
        }
    }
    return $temp;
}
echo '<pre>';
print_r(array_map('merge', $a2, $a1));
echo '</pre>';

// 10
echo "<br><br> 10.  Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : (abcd,abc,de,hjjj,g,wer)
Expected Output : The shortest array length is 1. The longest array length is 4.";

$samplArr = array("abcd", "abc", "de", "hjjj", "g", "wer");
$newArr = array();
foreach ($samplArr as $val) {
    $len = strlen($val);
    array_push($newArr, $len);
}

echo "<br> The longest array length is " . max($newArr) . "<br>" .
    "The shortest array length is " . min($newArr);

// 11
echo "<br><br> 11. Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.";
$firstArray = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$secArray = array('c2', 'c4');
$new = array_flip($secArray);
echo "<pre>";
print_r(array_intersect_key($firstArray, $new));
echo "</pre>";

// 12
echo "<br> 12. x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. <br>";

$x = array(1, 2, 3, 4, 5);
echo var_dump($x) . "<br>";
unset($x[3]);
$b = array_values($x);
var_dump($b);

// 13
echo "<br> 13. Write a PHP program to create a range like the following array.
Array 
(
[20] => 2
[21] => 3
[22] => 4
[23] => 5
[24] => 6
[25] => 7
) <br>";

$range1 = range(20,25);
$range2 = range(2,7);
echo "<pre>";
print_r(array_combine($range1, $range2));
echo "</pre>";

// 14
echo "<br> 14. Create a PHP script which displays the capital and country name from the above array ceu. Sort the list by the capital of the country. <br>";
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
              "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
              "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
              "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
              "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
              "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", 
              "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
              "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", 
              "Poland"=>"Warsaw");

asort($ceu);

foreach($ceu as $key => $value) {
    echo "The capital of $key is $value" . "<br>";
}

// 15
echo "<br> 15. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. <br>
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 <br>";

$recordedTemp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$totalTemp = 0;
$tempArr = explode(",", $recordedTemp);
$tempArrLength = sizeof($tempArr);

foreach($tempArr as $val) {
    $totalTemp += $val;
}

$avgTemp = $totalTemp / $tempArrLength;
echo "Average Temperature is ". $avgTemp . "<br>";
sort($tempArr);
echo "List of seven lowest temperatures : ";
for($i = 0; $i<5; $i++) {
    echo $tempArr[$i] . ",";
}

echo "<br> List of seven highest temperatures : ";
for($i = $tempArrLength-5; $i < $tempArrLength; $i++) {
    echo $tempArr[$i] . ",";
}
?>