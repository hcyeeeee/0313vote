<?php
include_once "db.php";

//連接資料庫，可以從後台改資料



$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

update('topics',['topic'=>$topic],['id'=>$topic_id]);

$options=$_POST['options'];
$opt_id=$_POST['opt_id'];
foreach ($options as $key => $opt) {
    if(array_key_exists($key,$opt_id)){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        insert('options',['opt'=>$opt,'topic_id'=>$topic_id]);
    }

}


?>