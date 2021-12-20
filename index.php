<?php include_once "./api/db.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>



    </style>
</head>
<body>

<div class="jumbotron p-0" style= "overflow:hidden;height:200px">
<div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
  <div class="carousel-inner position-absolute" style="top:-300px;">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="./img/IMG_9232.JPG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/IMG_9232.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/IMG_9233.JPG" alt="Third slide">
    </div>
  </div>
</div>
</div>    
<?php

// 用do 什麼來做事情
// 如果有就用$do
// 如果沒有就用file
$do=(isset($_GET['do']))?$_GET['do']:'list';
// 加入檔案(不要打.ＰＨＰ)
$file="./front/".$do.".php";
// check檔案是否存在
if(file_exists($file)){
    include $file;
}else{
    include "./front/list.php";
}
?>
<div class="p-3 text-center text-light bg-info fixed-bottom">我好笨</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>