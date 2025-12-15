<?php
$target_dir = "?????"; //กำหนดที่อยู่ในการเก็บรูป
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



//เพิ่มโค้ดตรวจสอบไฟล์ที่อัพโหลดไปแล้ว



//เพิ่มโค้ดตรวจสอบขนาดไฟล์



//เพิ่มโค้ดตรวจสอบนามสกุลไฟล์



if ($uploadOk == 0) {
  
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    

  //เพิ่มโค้ดแสดงรายละเอียดของไฟล์ที่อัพโหลด
    echo "Your File Was Upload Successfully."."<br><br><br>";


    echo " ";              //แสดงชื่อไฟล์
    echo " ";                   //แสดงนามสกุลไฟล์
    echo " ";          //แสดงขนาดไฟล์
    echo " ";      //แสดงที่อยู่ของไฟล์
    echo " ";      //แสดงรูปภาพ

  } else {
    echo "Sorry, there was an error uploading your file."."<br />";
  }
}
?>