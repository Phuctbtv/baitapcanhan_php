<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Website cá nhân</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Lời chào -->
    <div class="welcome-box">
        <h3>Chào mừng bạn đến với website tìm hiểu về lập trình</h3>
    </div>

    <!-- Menu -->
    <?php include 'menu.php'; ?>

    <!-- Bố cục chính -->
    <div class="container">
        <!-- Sidebar -->
        <?php include 'left.php'; ?>

        <!-- Nội dung -->
        <div class="content" id="main-content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                        echo '<iframe src="https://freetuts.net/" style="width:100%; height:600px; border:none;"></iframe>' ;
                        break;
                    case 'html':
                        echo '<iframe src="https://freetuts.net/hoc-html-css" style="width:100%; height:600px; border:none;"></iframe>';
                        break;
                    case 'css':
                         echo '<iframe src="https://freetuts.net/hoc-html-css" style="width:100%; height:600px; border:none;"></iframe>';
                        break;
                    case 'php':
                         echo '<iframe src="https://freetuts.net/hoc-php" style="width:100%; height:600px; border:none;"></iframe>';
                        break;
                    case 'javascript':
                         echo '<iframe src="https://freetuts.net/hoc-javascript" style="width:100%; height:600px; border:none;"></iframe>';
                        break;
                    case 'w3schools':
                        echo '<iframe src="https://www.w3schools.com/" style="width:100%; height:600px; border:none;"></iframe>';
                        break;
                    case 'hocwebchuan':
                        echo '<iframe src="https://hocwebchuan.com/" style="width:100%; height:600px; border:none;"></iframe>';
                        break;

                    // Các bài tập
                    case 'bai1': include 'baitap/bai1.php'; break;
                    case 'bai2': include 'baitap/bai2.php'; break;
                    case 'bai3': include 'baitap/bai3.php'; break;
                    case 'bai4': include 'baitap/bai4.php'; break;
                    case 'bai5': include 'baitap/bai5.php'; break;
                    case 'bai6': include 'baitap/bai6.php'; break;
                    case 'bai7': include 'baitap/bai7.php'; break;
                    case 'bai8': include 'baitap/bai8.php'; break;
                    case 'bai9': include 'baitap/bai9.php'; break;
                    case 'bai10': include 'baitap/bai10.php'; break;
                    case 'bai11': include 'baitap/bai11.php'; break;
                    default:
                        echo "<h2>Giới thiệu</h2>
                              <p>Chào mừng bạn đến với website học lập trình web.</p>";
                        break;
                }
            } else {
                echo "<h2>Giới thiệu</h2>
                      <p>Chào mừng bạn đến với website học lập trình web.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
