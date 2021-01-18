<h4 class="text-info">Votre résultat :</h4>

<?php
if(isset($_POST['chiffre'])){
$choix = $_POST['chiffre'];

for ($i = 0; $i < 11; $i++) {
    echo '<ul>
            <li> ' . $i * $choix . '</li>
        </ul>';
    }
}
?>

<a href="test.php" class="btn btn-outline-danger">Retour</a>