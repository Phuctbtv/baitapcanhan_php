<h2>Bài 6: Tính giai thừa n!</h2>

<form method="post">
    Nhập n: <input type="number" name="n" min="0" required>
    <br><br>
    <input type="submit" name="submit" value="Tính toán">
</form>

<?php
// Hàm tính giai thừa
function giaiThua($n) {
    if ($n == 0 || $n == 1) return 1;
    $gt = 1;
    for ($i = 2; $i <= $n; $i++) {
        $gt *= $i;
    }
    return $gt;
}

if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    $kq = giaiThua($n);

    echo "<h3>Kết quả:</h3>";
    echo "$n! = " . $kq;
}
?>
