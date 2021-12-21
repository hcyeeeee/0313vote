<?php

$sql="select * 
      from `topics`,
           `options` 
      where `topics`.`id`=`options`.`topic_id` AND 
            `topics`.`id`='{$_GET['id']}'";

$rows=q($sql);
?>

<div class="container ">
<div class="row d-flex flex-column ml-5 mr-5">
<h1>
    <?=$rows[0]['topic'];?>
</h1>

<div class="list-group  " style="font-size:1.2rem">
    <?php
    foreach($rows as $row){
        echo "<li class='list-group-item'>";
        echo "<span>{$row['opt']}</span>";
        echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
        echo "</li>";
        
    }

?>

</div>
<a href="index.php"><input type="button" value="回首頁"></a>
</div>
</div>
</div>


