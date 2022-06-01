<?php
/*
 * Author: Bilel Hofer
 * Date: 01/06/2022
 */

// répupère les données du formulaire
$min = $_POST['min'];

// test les données du formulaire
if ($min != 10 && $min != 20 && $min != 30 && $min != 40 && $min != 50 && $min != 60) {
    header('Location: ../index.php');
}

// parse les minute pour obtenir que les dizaine
$minTen = $min / 10;
$minTen = number_format($minTen, 0);
$minTen--;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timer</title>
    <link rel="stylesheet" href="../css/countDown.css">
</head>
<body>
<div class='wrapper'>
    <div class='time-part-wrapper'>
        <div class='time-part minutes tens'>
            <div class='digit-wrapper' id="min-ten">
                <?php
                echo "<span class='digit'>0</span>";
                // affiche les dizaine
                for ($i = $minTen; $i > 0; $i--) {
                    echo "<span class='digit'>$i</span>";
                }
                ?>
            </div>
        </div>
        <div class='time-part minutes ones'>
            <div class='digit-wrapper' id="min-one">
                <span class='digit'>0</span>
                <span class='digit'>9</span>
                <span class='digit'>8</span>
                <span class='digit'>7</span>
                <span class='digit'>6</span>
                <span class='digit'>5</span>
                <span class='digit'>4</span>
                <span class='digit'>3</span>
                <span class='digit'>2</span>
                <span class='digit'>1</span>
                <span class='digit'>0</span>
            </div>
        </div>
    </div>
    <div class='time-part-wrapper'>
        <div class='time-part seconds tens'>
            <div class='digit-wrapper' id="sec-ten">
                <span class='digit'>0</span>
                <span class='digit'>5</span>
                <span class='digit'>4</span>
                <span class='digit'>3</span>
                <span class='digit'>2</span>
                <span class='digit'>1</span>
                <span class='digit'>0</span>
            </div>
        </div>
        <div class='time-part seconds ones'>
            <div class='digit-wrapper' id="sec-one">
                <span class='digit'>0</span>
                <span class='digit'>9</span>
                <span class='digit'>8</span>
                <span class='digit'>7</span>
                <span class='digit'>6</span>
                <span class='digit'>5</span>
                <span class='digit'>4</span>
                <span class='digit'>3</span>
                <span class='digit'>2</span>
                <span class='digit'>1</span>
                <span class='digit'>0</span>
            </div>
        </div>
    </div>
    <div class='time-part-wrapper'>
        <div class='time-part hundredths tens'>
            <div class='digit-wrapper' id="hun-ten">
                <span class='digit'>0</span>
                <span class='digit'>9</span>
                <span class='digit'>8</span>
                <span class='digit'>7</span>
                <span class='digit'>6</span>
                <span class='digit'>5</span>
                <span class='digit'>4</span>
                <span class='digit'>3</span>
                <span class='digit'>2</span>
                <span class='digit'>1</span>
                <span class='digit'>0</span>
            </div>
        </div>
        <div class='time-part hundredths ones'>
            <div class='digit-wrapper' id="hun-one">
                <span class='digit'>0</span>
                <span class='digit'>9</span>
                <span class='digit'>8</span>
                <span class='digit'>7</span>
                <span class='digit'>6</span>
                <span class='digit'>5</span>
                <span class='digit'>4</span>
                <span class='digit'>3</span>
                <span class='digit'>2</span>
                <span class='digit'>1</span>
                <span class='digit'>0</span>
            </div>
        </div>
    </div>
</div>
<p id="min" style="display:none;"><?= $min ?></p>
<script type="text/javascript" src="../js/countDown.js"></script>
</body>
</html>