<?php
$id=$_GET['id'];
$subject=find('topics',$id);
$options=all('options',['topic_id'=>$id]);
?>


<div class="container col-8">
   <div class="row ">

      <form action="./api/save_vote.php" method="post">
         <!-- 標題 -->
         <h1 class="col fs-1">
            <!-- 圖片 -->
            <img class="card-img-top" src="./img/<?php echo $subject['img'];?>.jpeg" style="width: 50px; height:50px;"
               alt="Card image cap">
            <!-- 題目 -->
            <?php echo $subject['topic'];?>
         </h1>
</div>
         <div class="list-group mt-1 " style="font-size:1.2rem">
            <?php
        // 如果沒按顯示error  
        foreach($options as $key => $opt){
           echo '<li class="list-group-item" >';
           // value 要知在資料表這個選縣id多少
           echo "<input type='radio' name='opt' value='{$opt['id']}'>";
           echo "&nbsp";
           echo "&nbsp";
           echo $opt['opt'];
           echo "</li>";}
           ?>
          
   </div>


   <input class="btn btn-info mt-2" type="submit" value="投票"></input>
   

</div>
</div>
</div>