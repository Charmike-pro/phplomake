<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Et tullut lomakkeelta!');
}

if (!isset($_POST['nimi']) || !isset($_POST['palaute'])) {
    die('Et tullut oikealta lomakkeelta!');
}

$nimi = $_POST['nimi'];
$palaute = $_POST['palaute'];
$pvm = date("d.m.Y");

$file = fopen('palautteet.txt', 'a');
$rivi = "<p>$nimi<br>$palaute<br>$pvm</p>" . PHP_EOL;
fwrite($file, $rivi);

?>