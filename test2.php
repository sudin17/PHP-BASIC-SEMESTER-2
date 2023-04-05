<?php   
// Diketahui
// $lampu = "hijau";
// $lampu = "kuning";
// $lampu = "merah";
$lampu = "pink";

// Ditanya
$output = "";

// Jawab
if ($lampu == "merah") {
    $output = "berhenti";
} elseif ($lampu == "kuning") {
    $output = "hati-hati";
} elseif ($lampu == "hijau") {
    $output = "jalannnn!!!!";
} else {
    $output = "lampu rusak!";
}

// menampilkan output
echo $output;
?>