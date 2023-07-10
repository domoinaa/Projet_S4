<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Welcome/get_inscription" method="post">
        <input type="text" name="nom" placeholder="Nom" ><br>
        <input type="number" name="age" placeholder="Age" ><br>
        <input type="number" name="poids"  placeholder="Poids" ><br>
        <select name="sexe">
            <option value="femme">femme</option>
            <option value="homme">homme</option>
        </select><br>
        <input type="number" name="taille" placeholder="taille" ><br>
        <input type="text" name="mdp" placeholder="mot de passe" ><br>
        <input type="submit" value="S'inscrire"><br>
        <a href="redirect?redirect=login">login</a>
    </form>
</body>
</html>