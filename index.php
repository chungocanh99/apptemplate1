<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once  "partial/head.php"; ?>

</head>
<body>

<!-- Header -->
<?php include_once  "partial/header.php"; ?>

<!-- /Header -->
<!--trim cắt các chuỗi rỗng ở đầu 2 bên
filepath = đường dẫn của thư mục, hàm dirname lấy thư mục mẹ-->
<?php
if(isset($_GET["page"]) && ($_GET["page"])){
    $filepath= dirname(__FILE__)."/pages/".trim($_GET["page"]).".php";
    echo "<br> FILE path: ".$filepath;
    if (file_exists($filepath)){
        include_once "pages/".trim($_GET["page"]).".php";

    }
}else {
    include_once "pages/home.php";
}
?>

}


<!-- Footer -->
<?php include_once  "partial/footer.php"; ?>

<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
