<?php
//On récupère un tableau de checkbox si plusieur sont cochée
if (isset($_POST['inlineCheckbox'])) {
    $multiple = $_POST['inlineCheckbox'];
    //Une boucle foreach qui contient un for = pour chaque case cochée -> affiche les valeur de 1 à 10 des tables
    foreach ($multiple as $table){
        echo 'Table du : ' .$table;
        for ($i = 0; $i < 11; $i++) {
            echo '<ul>
                <li> ' . $i * $table . '</li>
             </ul>';
        }
    }
}
?>

<a href="test.php" class="btn btn-outline-danger">Retour</a>
