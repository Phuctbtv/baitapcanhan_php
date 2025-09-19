<h2>Bài 7: Liệt kê ước số</h2>
<form method="post">
    Nhập số: <input type="number" name="n">
    <button type="submit">Liệt kê</button>
</form>

<?php
if (isset($_POST["n"])) {
    $n = $_POST["n"];
    echo "<p>Các ước số của $n là: ";
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) echo $i . " ";
    }
    echo "</p>";
}
?>
