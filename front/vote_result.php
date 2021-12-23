<?php

$sql="select * 
      from `topics`,
           `options` 
      where `topics`.`id`=`options`.`topic_id` AND 
            `topics`.`id`='{$_GET['id']}'";

$rows=q($sql);
$id=$_GET['id'];
$subject=find('topics',$id);
?>


<div class="container col-8 ">
  <div class="row">
  
   <h1 class="col fs-1">
    <img class="card-img" src="./img/<?php echo $subject['img'];?>.jpeg" style="width: 50px; height:50px;" alt="Card image cap">
    <?php echo $rows[0]['topic'];?>
   </h1>
   </div>

   
   <div class="list-group mt-1 " style="font-size:1.2rem">
    <?php
    foreach($rows as $row){
        echo "<li class='list-group-item'>";
        echo "<span>{$row['opt']}</span>";
        echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
        echo "</li>";
    }
    ?>
    </div>

    
   
       <a href="index.php">
          <input class="btn btn-info mt-2 " type="submit"value="回首頁"></input>
        </a>
    

</div>

             

