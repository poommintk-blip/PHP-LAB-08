<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// ตรวจสอบไฟล์ที่อัพโหลดไปแล้ว
if (file_exists($target_file)) {
    echo "<h3 style='color:brown;'>ขออภัยคุณได้อัพโหลดไฟล์ซ้ำ.</h3>";
    $uploadOk = 0;
}

// ตรวจสอบขนาดไฟล์ (ไม่เกิน 50 KB = 51200 bytes)
if ($_FILES["fileToUpload"]["size"] > 51200) {
    echo "<h3 style='color:brown;'>ไฟล์ Upload ต้องมีขนาดไม่เกิน 50 KB.</h3>";
    $uploadOk = 0;
}

// ตรวจสอบนามสกุลไฟล์
if($imageFileType != "gif" && $imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "txt" && $imageFileType != "docx") {
    echo "<h3 style='color:brown;'>ไฟล์ Upload ต้องเป็นนามสกุล .jpeg .jpg .gif .txt หรือ .docx</h3>";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
  // ไม่ทำอะไร ข้อความ error แสดงไปแล้วด้านบน
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
    echo "Your File Was Upload Successfully."."<br><br>";
    echo "File Name: " . $_FILES["fileToUpload"]["tmp_name"] . "<br>";
    echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br>";
    echo "Size: " . $_FILES["fileToUpload"]["size"]/1024 . " Kb<br>";
    echo "Stored in:" . $target_file . "<br><br>";
    
    // แสดงรูปภาพถ้าเป็นไฟล์รูป
    if($imageFileType == "gif" || $imageFileType == "jpeg" || $imageFileType == "jpg") {
        echo "<img src='" . $target_file . "' style='max-width:500px;' />";
    }

  } else {
    echo "Sorry, there was an error uploading your file."."<br />";
  }
}
?>