<h2>Bài 8: Đếm số âm và số dương trong mảng</h2>
<?php
$arr = [10, -3, 5, -8, 0, 12, -7, 4, -2, 6];
$pos = $neg = 0;
foreach ($arr as $x) {
    if ($x > 0) $pos++;
    elseif ($x < 0) $neg++;
}
echo "<p>Mảng: [" . implode(", ", $arr) . "]</p>";
echo "<p>Số phần tử dương: <b>$pos</b></p>";
echo "<p>Số phần tử âm: <b>$neg</b></p>";
?>
