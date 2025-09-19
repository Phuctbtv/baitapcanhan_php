<h2>Bài 5: Kiểm tra số hoàn hảo</h2>
<form method="post">
    Nhập số: <input type="number" name="n">
    <button type="submit">Kiểm tra</button>
</form>

<?php
if (isset($_POST["n"])) {
    $n = $_POST["n"];
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) $sum += $i;
    }
    if ($sum == $n && $n > 0)
        echo "<p>$n là số hoàn hảo ✅</p>";
    else
        echo "<p>$n không phải số hoàn hảo ❌</p>";
}
?>
