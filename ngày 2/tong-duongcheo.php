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
        <h1>Ma Trận</h1>
        <td>
            <input type="text" name="matran" placeholder="nhập vào" />
        </td>
        <td>
            <input type="submit" value="Tạo" />
        </td>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $length = $_POST["matran"];
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length; $j++) {
                $arr[$i][$j] = mt_rand(1, 10);
            }
        }
    
    foreach ($arr as $item) {
        echo "<table><tr>";
        foreach ($item as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr></table>";
    }
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($i === $j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    echo "<br>";
    echo "sum: " . $sum;
}
    ?>
</table>
</body>

</html>