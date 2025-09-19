<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 10: Nhập thông tin sinh viên</title>
    <link rel="stylesheet" href="style.css"> <!-- Link tới file CSS -->
</head>
<body>

<h2>Bài 10: Nhập thông tin sinh viên</h2>

<form method="post">
    Họ tên: <input type="text" name="hoTen" required>
    Ngày sinh: <input type="date" name="ngaySinh" required>
    Quê quán: <input type="text" name="queQuan" required>
    Lớp: <input type="text" name="lop" required>
    <input type="submit" value="In thông tin">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = $_POST['hoTen'];
    $ngaySinh = $_POST['ngaySinh'];
    $queQuan = $_POST['queQuan'];
    $lop = $_POST['lop'];

    class PERSON {
        public $hoTen;
        public $ngaySinh;
        public $queQuan;

        public function __construct($hoTen, $ngaySinh, $queQuan) {
            $this->hoTen = $hoTen;
            $this->ngaySinh = $ngaySinh;
            $this->queQuan = $queQuan;
        }

        public function inThongTin() {
            echo "<p>Họ tên: $this->hoTen</p>";
            echo "<p>Ngày sinh: $this->ngaySinh</p>";
            echo "<p>Quê quán: $this->queQuan</p>";
        }
    }

    class SINHVIEN extends PERSON {
        public $lop;

        public function __construct($hoTen, $ngaySinh, $queQuan, $lop) {
            parent::__construct($hoTen, $ngaySinh, $queQuan);
            $this->lop = $lop;
        }

        public function inThongTin() {
            parent::inThongTin();
            echo "<p>Lớp: $this->lop</p>";
        }
    }

    $sv = new SINHVIEN($hoTen, $ngaySinh, $queQuan, $lop);

    echo "<div class='result'><h3>Thông tin sinh viên:</h3>";
    $sv->inThongTin();
    echo "</div>";
}
?>
</body>
</html>
