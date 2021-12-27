<?php include_once "../api/db.php";

// if(!isset($_SESSION['user'])){
//   to("../index.php");
//   exit();
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
   <style>
    .navbar{
background: darkgoldenrod;
}
.p-3{
background: darkgoldenrod;}


.btn-info{
  background:#855600;
  background:#d2b38c;
  border:none;
}

.ss{
  background: wheat;
}
.display-4{
  color:wheat;
}
.px-2{
  font-size:16px;
 
}

</style>
</head>

<body>


  <nav class="navbar navbar-light ">
    <p class="display-4 ml-2">投票系統</p>
  </nav>



  </div>
  <nav class='ss  py-3 px-2 d-flex justify-content-between mb-4'>
    <div>
      <a class='px-2 btn btn-info' href="?do=index2">問卷管理</a>
      <a class='px-2 btn btn-info' href="?do=member">會員管理</a>
      <a class='px-2 btn btn-info' href="?do=ad">圖片管理</a>


    </div>
    <?php 

     if(isset($_SESSION['user'])){
  echo "<span class='pr-5 text-dark' style='font-size:26px '>welcome！{$_SESSION['user']}</span>";
    ?>

    <div>
      <a class="btn btn-info mx-1" href="../logout.php">登出</a>
    </div>
    
    <?php
    }
    ?>

  </nav>


  <div class="container ">
    <?php

    $do=(isset($_GET['do']))?$_GET['do']:'list_manege';
    $file=$do.".php";
    if(file_exists($file)){
    include $file;
    }else{
    include "list_manege.php";
}
?>
<br><br><br>
 <!-- footer -->
 <div class="p-3 text-center text-light fixed-bottom  ">我好笨</div>

 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>