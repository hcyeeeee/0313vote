
<?php

$subject=find('topics',$_GET['id']);
$options=all('options',['topic_id'=>$_GET['id']]);
$del=del('img',$_GET['id']);

?>
<div class="container">
    <div class="row ">
          <div class="col col-md-3 m-auto">

          <form action="../api/edit_subject.php" method='post' class=' m-auto'>
           <label>問卷主題: <input class="form-control" type="text" name="topic" value='<?=$subject['topic'];?>'></label>
           <input type="hidden" name="topic_id" value="<?=$subject['id'];?>" >
   
   
           <a href="../api/add_option.php?id=<?=$subject['id'];?>">
          <input class='btn btn-success  text-light rounded' type="button" value="新增選項">
          </a>
         
     
    <a href="../api/del_option.php?id=<?=$subject['id'];?>">
    <input class='btn btn-danger text-light rounded' type="button" value="重置">
        <div>
    
    
          
          <?php 
         foreach($options as $key => $opt){
        echo "<label >\n";
        echo   "選項" . ($key+1) ."\n";
        echo   "<input class='form-control' type='text' name='options[]' value='{$opt['opt']}'>\n";
        echo   "<input class='form-control' type='hidden' name='opt_id[]' value='{$opt['id']}'>\n";
        echo "</label>\n";
          }
        ?>
        
         </div>
     


    <input class="btn btn-info" type="submit" value="送出">
 



</a>
</form>
</div>

</div>
</div>