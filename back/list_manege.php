<div class="container">
  <div class="row">
<? 

$subject= all('topics');
// echo"<ol>";
foreach($subject as $key => $value){
    // 有數量的資料才撈出
    // 1 or >1=true

                           
?>

   
        <div class="card col" style="width: 18rem;">

        <!-- 如何用回圈放圖片。。。。 -->
            
        <img class="card-img-top" src="../img/<?echo $value['img'];?>.jpeg" alt="Card image cap">

            <div class="card-body">
                <h5 class="card-title">
                    <?echo $value['topic'];?>
                </h5>
                <p class="card-text"> 
                     <?echo $value['subtitle'];?>
                    </p>
               <div class="col ">
                <a href="../index.php?do=vote_result&id=<?echo $value['id'];?>"><input class="btn btn-info btn-sm col" type="button"
                        value="看結果"></input></a>
                       <br>
                       <br>
                      
                       <!-- 管理題目 -->
                <a href="?do=edit_subject&id=<?echo $value['id'];?>"><input class="btn btn-info btn-sm col" type="button"
                        value="管理題目"></input></a>
                        </div>

                      



</div>
</div>
<?php
}

?>
 
</div>

