<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php/Welcome/makaLogin" method="post">
        <h1>Login</h1>
        <input type="text" name="nom"><br>
        <input type="password" name="mdp"><br>
        <input type="submit" value="Se connecter"><br>
        <a href="index.php/Welcome/redirect?redirect=inscription">inscription</a>
    </form>
</body>
</html>