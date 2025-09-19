<h2>Bài 9: Chuyển đổi giây sang giờ:phút:giây</h2>

<form method="post">
    Nhập số giây: <input type="number" name="seconds" required>
    <input type="submit" value="Chuyển đổi">
</form>

<?php
if (isset($_POST['seconds'])) {
    $totalSeconds = (int)$_POST['seconds'];

    // Tính giờ, phút, giây
    $hours = floor($totalSeconds / 3600);
    $minutes = floor(($totalSeconds % 3600) / 60);
    $seconds = $totalSeconds % 60;

    // Hiển thị dạng hh:mm:ss
    echo "<p>Thời gian: " . 
         str_pad($hours, 2, "0", STR_PAD_LEFT) . ":" .
         str_pad($minutes, 2, "0", STR_PAD_LEFT) . ":" .
         str_pad($seconds, 2, "0", STR_PAD_LEFT) . "</p>";
}
?>
