<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" >
<link rel="stylesheet" href="css/style3.css">
</head>
<body>
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-regular fa-camera-retro"></i>
      <i class="fas fa-light fa-images"></i>
      <i class="fas fa-grin-wink"></i>
    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="title">
        <h2 style="color: #4169E1;">Upload file in Gallery</h2>
      </div>
      <div class="info">
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <button type="submit" name="submit">Upload</button>
    </form>
  </div>
</body>
</html>