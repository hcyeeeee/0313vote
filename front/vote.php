<?php
$id=$_GET['id'];
$subject=find('topics',$id);
$options=all('options',['topic_id'=>$id]);
?>






<div class="container">
  <div class="row d-flex flex-column">

     <form action="./api/save_vote.php" method="post">
     <!-- 標題 -->
     <h1 class="col fs-1">
        <!-- 圖片 -->
       <img class="card-img-top" src="./img/<?php echo $subject['img'];?>.jpeg" style="width: 50px; height:50px;" alt="Card image cap">
       <!-- 題目 -->
       <?php echo $subject['topic'];?>
      </h1>


        <?php
        // 如果沒按顯示error  
        foreach($options as $key => $opt){
        echo '<li class=" col list-group-item list-group-item-action" >';
        // value 要知在資料表這個選縣id多少
        echo "<input type='radio' name='opt' value='{$opt['id']}'>";
        echo $opt['opt'];
        echo "</li>";}
         ?>
 
        <input type="submit" value="投票"></input>          
        <input class="btn btn-info " type="button"
                        value="投票"></input>
    </form>
 </div>
</div>
