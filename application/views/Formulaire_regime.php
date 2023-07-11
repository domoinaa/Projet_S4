
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create_regime" method="post">

        <h1>Create Regime</h1>
        <input type="text" name="nom" placeholder="nom"><br><br>
        <input type="number" name="valeur" placeholder="valeur (en g)"><br><br>
        <input type="number" name="prix" placeholder="prix"><br><br>
        
        Objectif : <br>
        <input type="checkbox" name="objectif[]" value=2> Perde de poids<br>
        <input type="checkbox" name="objectif[]" value=1> gain de poids<br><br>

        Genre adapté : <br>
        <input type="checkbox" name="sexe[]" value="Homme"> Homme<br>
        <input type="checkbox" name="sexe[]" value="Femme"> Femme<br><br>

        <input type="submit" value="Créer">
    </form>
</body>
</html>