<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tìm phần tử lớn nhất trong mảng hai chiều</title>
</head>
<!-- copy rồi còn chưa hiểu huốn chi làm -->
<body>
    <form action="" method="get">
        <label for="row">Rows
            <br>
            <input id="row" type="text" name="row" value="<?= $_GET['row'] ??
                                                                0 ?>">
        </label>
        <br>
        <br>
        <label for="col">Colums
            <br>
            <input id="col" type="text" name="col" value="<?= $_GET['col'] ??
                                                                0 ?>">
        </label>
        <br>
        <br>
        <input type="submit" value="Generator array">
    </form>
    <?php
    $row = (int) $_GET['row'] ?? 0;
    $col = (int) $_GET['col'] ?? 0;
    function generatorArray(int $row, int $col): array
    {
        if ($row * $col === 0) {
            return [];
        }
        $arr = [];
        for ($i = 0; $i < $row; $i++) {
            $temp = [];
            for ($j = 0; $j < $col; $j++) {
                array_push($temp, mt_rand(0, 20));
            }
            $arr[] = $temp;
        }
        return $arr;
    }
    function searchMax(array $arr): int
    {
        $size = count($arr);
        $max = max($arr[0]);
        for ($i = 1; $i < $size; $i++) {
            $max = $max < max($arr[$i]) ? max($arr[$i]) : $max;
        }
        return $max;
    }
    ?>
    <?php $arr = generatorArray($row, $col); ?>
    <h2>Matrix</h2>
    <table border="1" width="40%">
        <?php for ($i = 0; $i < count($arr); $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < count($arr[$i]); $j++) : ?>
                    <td><?= $arr[$i][$j] ?></td>
                <?php endfor; ?>
            </tr>

        <?php endfor; ?>
    </table>
    <?php if ($arr !== []) : ?>
        <p>Max matrix = <?= searchMax($arr) ?></p>
    <?php endif; ?>
</body>

</html>