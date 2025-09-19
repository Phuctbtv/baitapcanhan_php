<h2>Bài 1: Tính và in tổng các số nguyên tố từ 1 đến 100</h2>
<?php
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) $sum += $i;
}
echo "<p>Tổng các số nguyên tố từ 1 đến 100 là: <b>$sum</b></p>";
?>
