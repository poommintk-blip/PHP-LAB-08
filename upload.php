<style>
        body {
            background:#ffffff;
            font-family: Arial;
        }
</style>

<?php
$target_dir = "uploads/"; // โฟลเดอร์เก็บไฟล์
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (file_exists($target_file)) {
    echo "ไฟล์นี้มีอยู่แล้วในระบบ<br>";
    $uploadOk = 0;
}

if ($_FILES["file"]["size"] > 51200) {
    echo "ไฟล์มีขนาดเกิน 50 KB<br>";
    $uploadOk = 0;
}

if (
    $imageFileType != "gif" &&
    $imageFileType != "jpeg" &&
    $imageFileType != "txt" &&
    $imageFileType != "docx"
) {
    echo "อนุญาตเฉพาะไฟล์ GIF, JPEG, TXT, DOCX เท่านั้น<br>";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "ไม่สามารถอัปโหลดไฟล์ได้";
} else {

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

        echo "อัปโหลดไฟล์สำเร็จ<br><br>";


        echo "File Name : " . basename($_FILES["file"]["name"]) . "<br>";
        echo "File Type : " . $imageFileType . "<br>";
        echo "File Size : " . $_FILES["file"]["size"] . " bytes<br>";
        echo "File Path : " . $target_file . "<br><br>";


        if ($imageFileType == "gif" || $imageFileType == "jpeg") {
            echo "<img src='$target_file' width='300px'>";
        }

    } else {
        echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์";
    }
}
?>
