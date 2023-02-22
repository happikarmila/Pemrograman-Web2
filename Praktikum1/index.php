<?php 
// ini sebuah komentar
/* ini komentar
lebih dari satu baris
*/
# ini komentar juga

// echo "Hello World <br>"; 
// echo 'Hello World <br>';
// print_r("Karmila");
// var_dump("<br> STT Nurul Fikri");
// var_dump(123);

// Membuat variabael user
$nama = "Karmila";
$umur = 19;
$berat = 50.1;
$mahasiswa = true;

// echo "Hallo, Nama Saya $nama";
// echo " Umurku $umur th";
// echo " dan memiliki berat badan $berat kg";


// Membuat variabael sistem
// echo "Document root" . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo " Nama file" . $_SERVER['PHP_SELF'];


// Membuat variabel konstanta 
// define('PHI', 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "<br>Luas lingkaran dengan jari-jari  $jari = $luas";
// echo "<br>Keliling lingkaran dengan jari-jari $jari = $keliling";

// Membuat array 
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs[0]; 
echo "jumlah data sebanyak" . count($programs);

?>