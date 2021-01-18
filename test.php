<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title><?= $title ?></title>
</head>
<body>

<?php
$title = "Travaux PHP";
?>

<div>
    <hr>
    <h3 class="text-danger">Afficher le table de 3</h3>
    <a href="table3.php" class="btn btn-outline-info">Afficher la table de 3</a>
    <hr>

        <h3 class="text-warning">Selection de table</h3>
        <form method="post" action="choix.php">

            <div class="form-group">
                <label for="chiffre">Choix du chiffre</label>
                <select class="form-control" id="chiffre" name="chiffre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Résultat</button>
        </form>
        <hr>
</div>

<div>
    <h3 class="text-warning">checkboxes</h3>
    <form action="box.php" method="post">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="3">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="5">
            <label class="form-check-label" for="inlineRadio2">5</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="6">
            <label class="form-check-label" for="inlineRadio3">6</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="7">
            <label class="form-check-label" for="inlineRadio1">7</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="8">
            <label class="form-check-label" for="inlineRadio2">8</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="9">
            <label class="form-check-label" for="inlineRadio3">9</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="10">
            <label class="form-check-label" for="inlineRadio3">10</label>
        </div>
        <button type="submit" class="btn btn-outline-success">Voir les résultats</button>
        <button type="reset" class="btn btn-outline-danger">Reset</button>
    </form>
</div>

<h3 class="text-danger">Question hasard</h3>
<form action="aleatoir.php" method="post">
    <div class="form-group">
        <div class="form-group">
            <label for="reponse">Votre question :
                <?php
                $nombre = array(1,2,3,4,5,6,7,8,9,10);
                $multiple = array(1,2,3,4,5,6,7,8,9,10);
                $rand_nbr = array_rand($nombre);
                $rand_multi = array_rand($multiple);
                $question = $rand_nbr * $rand_multi;

                echo $rand_nbr . ' X ' . $rand_multi. ' = ';
                ?>
            </label>

        <input type="hidden" name="bonnereponse" id="bonnereponse" value="<?= $question ?>">
        <br>
        </div>
            <div class="form-group">
                <label for="answerInput">Votre réponse</label>
                <input type="text" class="form-control" name="joueur" id="joueur"/>
            </div>
        <hr>

        <button type="submit" name="btn-result" class="btn btn-outline-success">Valider</button>
        <hr>
    </div>
</form>

<div>
        <h3 class="text-info">Calculatrice</h3>
        <form action="calcu.php" method="post">
        <div>
            <input type="text" name="answerInput" id="answerInput"/>

            <select id="operation" name="operation">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>

            <input type="text" name="answerInputTwo" id="answerInputTwo"/>
        </div>

        <button type="submit" class="btn btn-outline-success">Résultat</button>
        <button type="reset" class="btn btn-outline-danger">Reset</button>
</div>
<?php

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>