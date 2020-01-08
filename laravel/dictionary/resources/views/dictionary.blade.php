<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tu dien</title>
</head>
<body>
    <h1>Tu Dien Anh-Viet</h1>
    <form action="/dictionary" method="POST">
    @csrf 
    <p>
        <input type="text" name="name">
        <button type="submit">DICH</button>
    </p>

    </form>

</body>
</html>