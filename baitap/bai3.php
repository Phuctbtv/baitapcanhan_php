<h2>Bài 3: Tính giá trị biểu thức S(x, n)</h2>

<form method="post">
    Nhập x: <input type="number" name="x" step="any" required>
    <br><br>
    Nhập n: <input type="number" name="n" min="1" required>
    <br><br>
    <button type="submit">Tính toán</button>
</form>

<?php
function giaiThua($num) {
    if ($num == 0 || $num == 1) return 1;
    $gt = 1;
    for ($i = 2; $i <= $num; $i++) {
        $gt *= $i;
    }
    return $gt;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $x = $_POST['x'];
    $n = $_POST['n'];
    $S = 0;

    for ($i = 1; $i <= $n; $i++) {
        $S += pow($x, $i) / giaiThua($i);
    }

    echo "<div style='margin-top:20px;padding:10px;border:1px solid #ccc;background:#f0f8ff'>";
    echo "<h3>Kết quả:</h3>";
    echo "<p>S($x, $n) = <b>$S</b></p>";
    echo "</div>";
}
?>
