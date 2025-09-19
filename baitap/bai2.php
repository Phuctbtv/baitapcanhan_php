<h2>Bài 2: Tính tổng chuỗi số</h2>

<form method="post">
    Nhập n: <input type="number" name="n" required>
    <input type="submit" value="Tính toán">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = (int)$_POST["n"];

    // a. Tính T = 1/2 + 2/3 + ... + n/(n+1)
    $sum1 = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum1 += $i / ($i + 1);
    }
    echo "<p>a. Tổng chuỗi T = 1/2 + ... + n/(n+1) với n=$n là: <b>$sum1</b></p>";

    // b. Tính T = 1/2 + 1/4 + ... + 1/(n+2), điều kiện e = 1/(n+2) > 0.0001
    $sum2 = 0;
    $i = 0;
    while (1 / ($i + 2) > 0.0001 && $i <= $n) {
        $sum2 += 1 / ($i + 2);
        $i += 2;
    }
    echo "<p>b. Tổng chuỗi T = 1/2 + 1/4 + ... + 1/(n+2) là: <b>$sum2</b></p>";
}
?>
