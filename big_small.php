<!-- Case Jumat:
Buatlah sebuah fungsi yang akan menampilkan angka terbesar dan terkecil dalam sebuah array berisi deretan angka.
Contoh
input: [5,4,9,10,60]
output: terbesar 60, terkecil 5 -->

<title>Mini Quiz Jumat - Angka Terbesar dan Terkecil</title>

<?php 
    $bil = array(5,4,9,10,60);
    $min = $bil[0];
    $max = $bil[0];

    echo "Daftar bilangan";
    echo "<br>";

    for ($i=0; $i <= count($bil)-1; $i++) { 
        echo "$bil[$i]\t";
        if ($bil[$i] < $min) {
            $min = $bil[$i];
        }elseif($bil[$i] > $max){
            $max = $bil[$i];
        }
    }

    echo "<br><br>";
    echo "Bilangan terkecil \t: $min";
    echo "<br>";
    echo "Bilangan terbesar \t: $max";
?>