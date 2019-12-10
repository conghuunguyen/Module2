<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login {
            height: 200px;
            width: 250px;
            margin: 0;
            padding: 10px;
            border: 5px #CCC solid;
        }

        .login input {
            padding: 5px;
            margin: 5px
        }
    </style>
</head>

<body>

    <body>
        <form method="get">
            <div class="login">
                <h2>Login</h2>
                <input type="text" name="username" size="30" placeholder="username" />
                <input type="password" name="password" size="30" placeholder="password" />
                <input type="submit" value="Đăng Nhập" />
            </div>
            <!-- method = "post" -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $username = $_GET["username"];
                $password = $_GET["password"];

                if ($username === "admin" && $password === "admin") {
                    echo "<h2>Welcome <span style='color:red'>" . $username . "</span> to website</h2>";
                } else {
                    echo "<h2><span style='color:red'>Login Error</span></h2>";
                }
            }
            ?>
        </form>
    </body>
</body>

</html>