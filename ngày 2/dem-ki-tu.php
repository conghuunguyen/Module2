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
    $str= "nguyenconghuu";
    $char = "n";
    $count = 0;
    for ($i=0;$i<strlen($str);$i++) {
        if($char===$str[$i]) {
            $count +=1;
        }
    }
    echo $count;
    
    ?>
</body>
</html>