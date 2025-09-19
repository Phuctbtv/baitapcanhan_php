<h2>Bài 4: Nhập số cho đến khi nhập 0 thì dừng</h2>
<form method="post">
    Nhập số: <input type="number" name="num">
    <button type="submit">Nhập</button>
</form>

<?php
session_start();
if (!isset($_SESSION["sum"])) $_SESSION["sum"] = 0;

if (isset($_POST["num"])) {
    $num = $_POST["num"];
    if ($num != 0) {
        $_SESSION["sum"] += $num;
        echo "<p>Bạn vừa nhập: $num</p>";
    } else {
        echo "<p>Dừng chương trình. Tổng các số đã nhập là: <b>{$_SESSION["sum"]}</b></p>";
        session_destroy();
    }
}
?>
