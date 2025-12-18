<!DOCTYPE html>
<html lang="en">
<head>
  <!--  <meta charset="UTF-8">
    <title>Upload file in Gallery</title>
    
</head>
<body>

<div class="box">
    <h3>Upload file in Gallery</h3>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="upload">Upload</button>
    </form>
</div>

</body>
</html> -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" >
<link rel="stylesheet" href="css/style3.css">


</head>
<!-- <body style="background-color: #0e8ecfff; background-size: cover; background-attachment: fixed;">   
  <div class="main-block">-->
    <style>
        body {
            background:#1e88c8;
            font-family: Arial;
        }
        .box {
            width:350px;
            background:#fff;
            padding:20px;
            margin:100px auto;
            border-radius:4px;
        }
        input[type=file] {
            width:100%;
            margin-bottom:10px;
        }
        button {
            width:100%;
            padding:10px;
            background:#1e88c8;
            color:#fff;
            border:none;
            cursor:pointer;
        }
    </style>
    <div style=center; class="left-part">
      <i class="fas fa-regular fa-camera-retro"></i>
      <i class="fas fa-light fa-images"></i>
      <i class="fas fa-grin-wink"></i>
    </div>
     <!-- สร้างฟอร์มอัพโหลดที่นี่ -->
      <div class="box">
      <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="file">Filename:</label>
          <input type="file" name="fileToUpload" id="fileToUpload" />
          <br />
          <input type="submit" value="Submit">
      </form> 
    </div>

  </div>
</body>
</html>
