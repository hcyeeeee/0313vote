<div class="container">
    <div class="row">
        <?php
       
$subject= all('topics');
// echo"<ol>";
foreach($subject as $key => $value){
    // 有數量的資料才撈出
    // 1 or >1=true        
?>


        <div class="card col-2" style="width: 18rem;">
            <div class="row mr-1 ml-1 mt-2">
          
                <a href="?do=ad&id=<?php echo $value['id'];?>"><img class="card-img-top" src="../img/<?php echo $value['img'];?>.jpeg" alt="Card image cap">
                </a>
                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $value['topic'];?>
                    </h5>
                    <p class="card-text">
                        <?php echo $value['subtitle'];?>
                    </p>
                    <!-- <div class="col "> -->
                        <a href="../index.php?do=vote_result&id=<?php echo $value['id'];?>"><input
                                class="btn btn-info btn-md  " type="button" value="觀看結果"></input></a>
                        <br>
                       

                        <!-- 管理題目 -->
                        <a href="?do=edit_subject&id=<?php echo $value['id'];?>"><input class="btn btn-info btn-md mt-2"
                                type="button" value="新增選項"></input></a>
                                <!-- <br>
                                <br>
                                <a href="?do=del_subject&id=<?php echo $value['id'];?>"><input class="btn btn-info "
                                type="button" value="刪除主題"></input></a> -->
                    <!-- </div> -->

                    
                  

                </div>



            </div>
        </div>
        <?php
}
?>
     <div class="card col-2" style="width: 18rem;">
            <div class="row mr-1 ml-1 mt-2">
                <img class="card-img-top" src="../img/set.jpeg" alt="Card image cap">
                <div class="card-body">
                  
                   
                        <a href="./index.php?do=add_subject_form"><input
                                class="btn btn-info btn-sm col" type="button" value="新增問卷"></input></a>
                       
                    </div>

                </div>



            </div>
        </div>
    </div>