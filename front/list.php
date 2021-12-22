<!-- //

// echo"666";
// 裡面要用單引號
// $vote=all('topics');
// $topic=array($vote as $key => $value);
// dd($vote);
// find('topic')
// $key=find('topics','1');
// $value=print_r($key);
// $key = find('topics', '1');
// $value = print_r($key['topic']);-->
<!-- $k = find('topics', '1'); -->
<!-- $title = print_r($key['topic']); -->

<div class="container">
    <div class="row">
        <?php

$subject = all('topics');
foreach ($subject as $key => $value) {
    // 有數量的資料才撈出
    // 1 or >1=true
    if (rows('options', ['topic_id' => $value['id']]) > 0) {
    
        if(isset($_SESSION['user'])){
           ?>
            <div class="col-3">
                <div class="card col ml-3 mb-4 mt-0" style="width: 18rem;">
                    <div class="row mr-1 ml-1">
                        <!-- 圖片 -->
                        <img class="card-img-top mt-3 " src="./img/<?php echo $value['img']; ?>.jpeg" alt="Card image cap">
                    </div>
                    <!-- 主題 -->
                    <div class="row">
                        <div class="card-body ">
                            <h5 class="card-title">
                                <?php echo "主題：" . $value['topic']; ?>
                            </h5>
                            <!-- 副標題 -->
                            <p class="card-text">
                                <?php echo $value['subtitle']; ?>
                            </p>
                            <!-- 按鈕 -->
                            <a href="index.php?do=vote&id=<?php echo $value['id']; ?>"><input class="btn btn-info "
                                    type="button" value="投票"></input></a>
    
                            <a href="index.php?do=vote_result&id=<?php echo $value['id']; ?>"><input class="btn btn-info "
                                    type="button" value="結果"></input></a>
                        </div>
                    </div>
                </div>
            </div>

           <?php
        }else{
            ?>

              <div class="col-3">
                <div class="card col ml-3 mb-4 mt-0" style="width: 18rem;">
                    <div class="row mr-1 ml-1">
                        <!-- 圖片 -->
                        <img class="card-img-top mt-3 " src="./img/<?php echo $value['img']; ?>.jpeg" alt="Card image cap">
                    </div>
                    <!-- 主題 -->
                    <div class="row">
                        <div class="card-body ">
                            <h5 class="card-title">
                                <?php echo "主題：" . $value['topic']; ?>
                            </h5>
                            <!-- 副標題 -->
                            <p class="card-text">
                                <?php echo $value['subtitle']; ?>
                            </p>
                            <!-- 按鈕 -->
                                <a href="index.php?do=login"><input class="btn btn-info "
                                    type="button" value="投票"></input></a>
    
                            <a href="index.php?do=vote_result&id=<?php echo $value['id']; ?>"><input class="btn btn-info "
                                    type="button" value="結果"></input></a>
                        </div>
                    </div>
                </div>
          

        </div>




        <?php
        }
}
}
?>

    </div>
</div>