
<form action="suggestion" method="post">
    <p><?php echo $nom ?></p>
    <p><?php echo $idObjectif ?></p>
    <input type="hidden" name="idObjectif" value=<?php echo $idObjectif ?>>
    <input type="number" name="poids" placeholder="Poids"><br>
    <input type="submit" value="Valider">
</form>