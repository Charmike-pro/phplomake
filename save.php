<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Et tullut lomakkeelta!');
}

if (!isset($_POST['nimi']) || !isset($_POST['palaute'])) {
    die('Et tullut oikealta lomakkeelta!');
}

$nimi = $_POST['nimi'];
$palaute = $_POST['palaute'];


$file = fopen('palautteet.txt', 'w');
$rivi = $nimi . $palaute;
fwrite($file, $rivi);

?>