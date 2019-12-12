<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
$arr1 = array(1,2,3,4,5);
echo "<pre>";
print_r($arr1);
echo "</pre>";
$arr2 = array("a","b","c","d","e");
echo "<pre>";
print_r($arr2);
echo "</pre>";

$arr3 = array_merge($arr1,$arr2);
echo "<pre>";
print_r($arr3);
echo "</pre>";

// function mang2($arr2) {
    
//     for ($i=0;$i<count($arr2); $i++) {
//         $value = $arr2[$i];
//         return $value;
//     }
//     function mang3($arr3) {
//         for($j=0;$j<count($arr3); $j++) {
//           return $arr3[$j];
//         }$arr3[$j] = $arr2[$i]
//     }
    

// }
?>


</body>
</html>