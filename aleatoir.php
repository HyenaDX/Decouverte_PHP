<?php

if(isset($_POST['joueur'])){
    $joueur = $_POST['joueur'];
}
if(isset($_POST['bonnereponse'])){
    $bonnereponse = $_POST['bonnereponse'];
}
if($joueur == $bonnereponse){
    echo "<p class='alert-success'>Bonne réponse !</p>";
}else{
    echo "<p class='alert-danger'>Mauvaise réponse !</p>";
}
?>

<a href="test.php" class="btn btn-outline-danger">Retour</a>