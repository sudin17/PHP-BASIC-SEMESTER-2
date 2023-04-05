<?php 
// diketahui
$bil1 = 8;
$bil2 = 12;
$bil3 = 100;
$bil4 = 1222;
$bil5 = 1;

// ditanya
$terkecil = 0;

// jawab 
if ($bil1 < $bil2 && $bil1 < $bil3 && $bil1 < $bil4 && $bil1 < $bil5) {
    $terkecil = $bil1;
} elseif ($bil2 < $bil1 && $bil2 < $bil3 && $bil2 < $bil4 && $bil2 < $bil5) {
    $terkecil = $bil2;
} elseif ($bil3 < $bil1 && $bil3 < $bil2 && $bil3 < $bil4 && $bil3 < $bil5) {
    $terkecil = $bil3;
} elseif ($bil4 < $bil1 && $bil4 < $bil2 && $bil4 < $bil3 && $bil4 < $bil5) {
    $terkecil = $bil4;
} elseif ($bil5 < $bil1 && $bil5 < $bil2 && $bil5 < $bil3 && $bil5 < $bil4) {
    $terkecil = $bil5;
}
else {
    $terkecil = "bilangan sama besar";
}
//  tampilkan bilangan terbesar
echo $terkecil;
?>