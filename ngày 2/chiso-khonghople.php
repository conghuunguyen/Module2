<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <form method="post">
            <td>
                <input type="number" name="songuyen" placeholder="nhập vào số lượng để random" />
            </td>
            <td>
                <input type="number" name="index" placeholder="nhập chỉ số index để tìm" />
            </td>
            <td>
                <input type="submit" value="Tìm" />
            </td>
        </form>
        <?php

        function checkIndex($arr, $index)
        {
            if ($index > count($arr)) {
                throw new Exception('Chỉ số vượt quá giới hạn của mảng');
            }
            return true;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $leng = $_POST["songuyen"];
            $index = (int) $_POST["index"];
            for ($i = 0; $i < $leng; $i++) {
                $arr[$i] = mt_rand(1, 100);
            }
            foreach ($arr as $value) {
                echo "<table><td>" . $value . "</td></table>";
            }
            for ($i = 0; $i < count($arr); $i++) {
                if ($index === $i) {
                    $result = $arr[$i];
                }
            }
            try {
                if (checkIndex($arr, $index)) {
                    echo "Tại vị trí: $index có giá trị là $result";
                }
            } catch (Exception $e) {

                $result = $e->getMessage();
                echo "ERROR : $result";
            }
        }


        ?>
    </table>
</body>

</html>