<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <h1>Tìm giá trị nhỏ nhất</h1>
        <td>
            <label>Mảng số nguyên :</label>
        </td>
        <td>
            <input type="text" name="arrInt" placeholder="nhập số nguyên" />
        </td>
        <td>
            <input type="submit" value="Tìm" />
        </td>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arr = $_POST["arrInt"];
        $arr = explode(",",$arr);
    
    function arrayInt($arr)
    {
        // $index=0;
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
        echo $min;
    }
    arrayInt($arr);
    }
    ?>



</body>

</html>