<!-- membuat perhitungan dalam perkuliahan
1.  nilai 0-44   = E TIDAK LULUS
2.  nilai 45-54  = D TIDAK LULUS
3.  nilai 55-64  = C TIDAK LULUS
4.  nilai 65-79  = B LULUS
5.  nilai 80-100 = A LULUS
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>tugas nilai mahasiswa</title>
</head>
<body>
    <h2>Total Nilai</h2>
    <form action="" method="post">
        <input type="text" name="nilai">
        <input type="submit" value="Cek">
    </form>
</body>
</html>

<?php 
    $nilai=$_POST["nilai"];
    if ($nilai >= 0 and $nilai <= 44) {
        echo "Nilai anda : $nilai<br>
        Grade anda : E <br>
        ANDA TIDAK LULUS!!!!";
    } elseif ($nilai >= 45 and $nilai <= 54) {
        echo "Nilai anda : $nilai<br>
        Grade anda : D <br>
        ANDA TIDAK LULUS!!!!";
    } elseif ($nilai >= 55 and $nilai <= 64) {
        echo "Nilai anda : $nilai<br>
        Grade anda : C <br>
        ANDA TIDAK LULUS!!!!";
    } elseif ($nilai >= 65 and $nilai <= 79) {
        echo "Nilai anda : $nilai<br>
        Grade anda : B <br>
        ANDA LULUS!!!!";
    } elseif ($nilai >= 80 and $nilai <= 100) {
        echo "Nilai anda : $nilai<br>
        Grade anda : A <br>
        ANDA LULUS!!!!";
    } else {
        echo "MASUKKAN NILAI YANG VALID!!!!!";
    }
?>