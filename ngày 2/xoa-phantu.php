<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete arr[i]</title>
</head>

<body>
    <?php
    $arr = array(12, 123, 23, 21, 32, 13, 4, 13);
    $num_del = (21);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $num_del) {
            $index = $i;
        }
    }
    for ($i = $index; $i < count($arr); $i++) {
        $arr[$index] = $arr[$index + 1];
    }
    $arr[count($arr) - 1] = 0;
    print_r($arr);
    ?>
</body>

</html>