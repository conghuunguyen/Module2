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
    function mang($arr) {
    $index = 0;
    $min = $arr[0];
    for ($i=0; $i<count($arr); $i++) {
        if($arr[$i]<$min) {
            $min = $arr[$i];
            $index = $i;
        }
    } return $index;
    }
    $arr = [123,12312,1231,23,123,123,12,123,123,31];
    echo mang($arr);
    ?>
</body>
</html>
