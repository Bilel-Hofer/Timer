<?php
/*
 * Author: Bilel Hofer
 * Date: 01/06/2022
 */

require './inc/utils.php';

const URL = 'css/countDown.css';

// répupère les données du formulaire
$min = $_POST['min'];


// test les données du formulaire
if ($min != 10 && $min != 20 && $min != 30 && $min != 40 && $min != 50 && $min != 60) {
    header('Location: index.php');
}

// parse les minute pour obtenir que les dizaine
$minTen = $min / 10;
$minTen = number_format($minTen, 0);
$minTen--;

require VIEW_DIR . 'countDown_view.php';

?>
