<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<style>
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 4px solid navy;
    }
    h1{
        color: navy;
    }
    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }
    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }
    #buttons input{
        float: left;
        margin-bottom: .5em;
    }
    br{
        clear: left;
    }
    .error{
        color: red;
    }
    </style>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <form  method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="<?= $_POST[ 'investment' ] ?? 0 ?>" required /><br/>
                <label>Yearly Interest Rate:</label> 
                <input type="text" name="rate" value="<?= $_POST[ 'rate' ] ?? 0 ?>" required /><br/>
                <label>Number of Years:</label>
                <input type="text" name="years" value="<?= $_POST['years'] ??  0 ?>" required /> </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"/><br/>
                    <br>
                    <?php
                    $investment = $_POST['investment'] ?? 0;
                    $rate = $_POST['rate'] ?? 0;
                    $years = $_POST['years'] ?? 0;
                    $result = $investment;
                    for($i = 1; $i <= $years; $i++) {
                        $result = $result + $result * ($rate / 100);
                    }
                    if ( empty($_POST['investment']) || empty($_POST['rate']) || empty($_POST['years'])) {
                        echo "<p>Error : Investment, rate, years require</p>";
                    } else {
                        echo "Result : $result";
                    }
                    ?>
                </div>
        </form>
    </div>
</body>
</html>