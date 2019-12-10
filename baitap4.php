<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcultor</title>
</head>
<body>
    <form method="post">
        <h1> Simple Calculator </h1>
        <fieldset style="width: 30%;">
        <legend>Calcultor</legend>
        <table>
            <tr>
                <td>
                    <label>Frist Operand </label>
                </td>
                <td>
                    <input type="number" name="firstoperand" require> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Operator</label>
                </td>
                <td>
                    <select name="opp">
                        <option value="plus">Adition</option>
                        <option value="minus">Subtraction</option>
                        <option value="multiply">multiplication</option>
                        <option value="distribute">division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Second Operand</label>
                </td>
                <td>
                    <input type="number" name= "secondoperand" require>
                </td>
            </tr>   
            <tr>                       
                <td>
                    <input type="submit" value="Tinh"><br>
                </td>               
            </tr>
        </table>
    </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firtsOperand = $_POST["firstoperand"];
        $secondOperand = $_POST["secondoperand"];
        $opp= $_POST["opp"];
        $result;
        switch($opp) {
            case "plus":
                $result =  $firtsOperand + $secondOperand;
            break;
            case "minus":
                $result = $firtsOperand - $secondOperand;
            break;
            case "multiply":
                $result = $firtsOperand * $secondOperand;
            break;
            case "distribute":
                if($secondOperand===0) {
                    $result = "wrong input";
                } 
                else {
                     $result = $firtsOperand / $secondOperand;
                break;
                }
               
            break;
        }
        echo $firtsOperand . $opp . $secondOperand . "=" . $result;

    }
    ?>
</body>
</html>