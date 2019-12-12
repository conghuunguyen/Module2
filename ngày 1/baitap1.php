<!DOCTYPE html>
<html lang="en">
​
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đọc số thành chữ</title>
</head>
​
<body>
    <form method="post">
        <input type="text" name="search">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = $_POST['search'];
        $num = (int) $num;
        $onetonine = array(
            "0" => "zero",
            "1" => "one",
            "2" => "two",
            "3" => "three",
            "4" => "four",
            "5" => "five",
            "6" => "six",
            "7" => "seven",
            "8" => "eight",
            "9" => "nine",
        );
        $ones = array(
            "0" => "ten",
            "1" => "eleven",
            "2" => "twelve",
            "3" => "thirteen",
            "4" => "fourteen",
            "5" => "fifteen",
            "6" => "sixteen",
            "7" => "seventeen",
            "8" => "eighteen",
            "9" => "nineteen",
        );
        $tens = array(
            "2" => "twenty",
            "3" => "thirty",
            "4" => "fourty",
            "5" => "fifty",
            "6" => "sixty",
            "7" => "seventy",
            "8" => "eighty",
            "9" => "ninety",
        );
        $readword;
        function checknum($num)
        {
            if ($num === 0) {
                $readword = "zero";
            } else if ($num < 10) {
                foreach ($GLOBALS['onetonine'] as $key => $value) {
                    $readword =  $GLOBALS['onetonine'][$num];
                    break;
                };
            } else if ($num < 20) {
                $num = $num - 10;
                foreach ($GLOBALS['ones'] as $key => $value) {
                    $readword =  $GLOBALS['ones'][$num];
                    break;
                };
            } elseif ($num < 100) {
                $ones = $num % 10;
                $tens = (int) ($num / 10);
                foreach ($GLOBALS['tens'] as $key => $value) {
                    $tens =  $GLOBALS['tens'][$tens];
                    break;
                };
                $ones = checknum($ones);
                $readword = $tens . "-" . $ones;
            } elseif ($num < 1000) {
                $hundreds = $num;
                $num = (int) ($num / 100);
                $afterhundreds = $hundreds % 100;
                $hundreds = checknum($num);
                $afterhundreds = checknum($afterhundreds);
                if ($afterhundreds === "zero") {
                    $readword = $hundreds . " hundred";
                } else {
                    $readword = $hundreds . " hundred and " . $afterhundreds;
                }
            } elseif ($num < 1000000) {
                $thousands = $num;
                $num = (int) ($num / 1000);
                $hundreds = $thousands % 1000;
                $thousands = checknum($num);
                $hundreds = checknum($hundreds);
                if ($hundreds === "zero") {
                    $readword = $thousands . " thousand";
                } else {
                    $readword = $thousands . " thousand " . $hundreds;
                }
            } elseif ($num < 1000000000) {
                $million = $num;
                $num = (int) ($num / 1000000);
                $thousands = $million % 1000000;
                $million = checknum($num);
                $thousands = checknum($thousands);
                if ($thousands === "zero") {
                    $readword = $million . " million";
                } else {
                    $readword = $million . " million " . $thousands;
                }
            }
            return $readword;
        }
        $readword = checknum($num);
        echo $readword;
    }
    ?>
</body>
​
</html>