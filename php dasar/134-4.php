<?php
$a = 5;
echo ++$a; // 6 (increment sebelum echo, maka nilai $a menjadi 6)
echo $a;   // 6 (nilai $a tetap 6)
echo "<br>";

$b = 5;
echo $b++; // 5 (echo terlebih dahulu, kemudian increment, nilai yang ditampilkan tetap 5)
echo $b;   // 6 (setelah echo, nilai $b menjadi 6)
echo "<br>";

$a = 5;
echo --$a; // 4 (decrement sebelum echo, maka nilai $a menjadi 4)
echo $a;   // 4 (nilai $a tetap 4)
echo "<br>";

$b = 5;
echo $b--; // 5 (echo terlebih dahulu, kemudian decrement, nilai yang ditampilkan tetap 5)
echo $b;   // 4 (setelah echo, nilai $b menjadi 4)
?>
