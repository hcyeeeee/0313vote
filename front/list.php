<!-- //

// echo"666";
// 裡面要用單引號
// $vote=all('topics');
// $topic=array($vote as $key => $value);
// dd($vote);
// find('topic')
// $key=find('topics','1');
// $value=print_r($key);
// dd($key);

// $key = find('topics', '1');
// $value = print_r($key['topic']);

$div= -->

<!-- $k = find('topics', '1'); -->
<!-- $title = print_r($key['topic']); -->

<div class="container">
  <div class="row">
<?php 

$subject= all('topics');
// echo"<ol>";
foreach($subject as $key => $value){
    // 有數量的資料才撈出
    // 1 or >1=true
    if(rows('options',['topic_id'=>$value['id']])>0){
//     echo "<il>";
//     echo "<a href='index.php?do=vote&id={$value['id']}'>";
//     echo $value['topic'];ㄋ
//     echo "</a>";
//     echo "</li>";  
// echo"<ol>";                             
?>

   
        <div class="card col ml-3" style="width: 18rem;">

            <img class="card-img-top" src="./img/<?php echo $value['img'];?>.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo "主題：". $value['topic'];?>
                </h5>
                <p class="card-text"> 
                     <?php echo  $value['subtitle'];?>
                    </p>

                <a href="index.php?do=vote&id=<?php echo$value['id'];?>"><input class="btn btn-info " type="button"
                        value="投票"></input></a>
                        
                <a href="index.php?do=vote_result&id=<?php echo $value['id'];?>"><input class="btn btn-info " type="button"
                        value="結果"></input></a>
                       
            </div>
        </div>




<?php
    }
}  
?>
  </div>
</div>