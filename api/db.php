<?php

    $dsn="mysql:host=localhost;charset=utf8;dbname=mypolling";
    // $dsn data source name
    // 連結資料庫
    $pdo=new PDO($dsn,'root','');

    session_start();

    //取得符合條件的一筆資料

    // $sql='0';
    // $id=array('1','333','555','tttt');


    function find($table,$id){
        // 把pdo變成全域變數
        global $pdo;
        $sql="SELECT *FROM `$table` WHERE ";
        // 語法SELECT * FROM `table` WHERE `id`='23' AND `name`='mack';

        // 如果id是陣列
        if(is_array($id)){
            // 用迴圈把$id為array的資料撈出
            foreach($id as $key=>$value){
                // 佔存在tmp中
                $tmp[]="`$key`='$value'";
            }
                // ( [0] => `0`='111' ) Array ( [0] => `0`='111' [1] => `1`='222' ) }
            // 將陣列變成字串
            $sql=$sql. implode(" AND ",$tmp);
            // echo $sql;
            // $sql="SELECT *FROM `$table` WHERE "=  "SELECT *FROM `$table` WHERE `0`='111' AND `1`='222' 
        }else{
           $sql=$sql . "`id`='$id'";
        }
        return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }



// // 計算符合條件的資料有幾筆。
    //計算符合條件的資料筆數
    function rows($table,$array){
        global $pdo;
        $sql="SELECT count(*) FROM `$table` WHERE ";
            foreach($array as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            
            $sql=$sql. implode(" AND ",$tmp);
        return $pdo->query($sql)->fetchColumn();
    }

// echo rows('options',['topic_id'=>5]);

    //取出指定資料表的所有資料
function all($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM `$table` ";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            $sql=$sql."where " . implode(" AND ",$tmp);
        }else{
            $sql=$sql.$arg[0];
        }
    }
    // echo $sql;
    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    
    //echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();

    // echo "<pre>";
    // print_r(all('options'));
    // echo "</pre>";
    


}


 function update($table,$column,$where){
    global $pdo;

    $sql_set='';
    foreach ($column as $key => $value) {
        $sql_set=$sql_set . "`$key`='$value',";
    }
    $sql_set=trim($sql_set,',');

    $sql_where='';
    foreach ($where as $key => $value) {
        $sql_where=$sql_where . "`$key`='$value' AND ";
    }
    $sql_where=mb_substr($sql_where,0,mb_strlen($sql_where)-5);;

    mb_substr($sql_where,0,mb_strlen($sql_where)-5);
    $sql="UPDATE `$table` SET $sql_set WHERE $sql_where ";
    // echo $sql . "<br>";
    $pdo->exec($sql);

 }


 


 function insert($table,$array){
     global $pdo;
     $sql="INSERT INTO $table(`" . implode('`,`',array_keys($array)) . "`) 
                        value('" . implode("','",$array) ."')";

    echo $sql."<br>";
    return $pdo->exec($sql);

 }



 function del($table,$id){
    global $pdo;
    $sql="DELETE FROM `$table` WHERE ";
    if(is_array($id)){
        foreach($id as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        
        $sql=$sql. implode(" AND ",$tmp);
    }else{
       $sql=$sql . "`id`='$id'";
    }
    return $pdo->exec($sql);
 }

function to($url){
    header("location:".$url);
}

//任意查詢函式
function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}

// dd全名direction dump 印出來
 function dd($array){
     echo "<pre>";
     print_r($array);
     echo "</pre>";
 }

 
//  function alert($msg) {
//      echo "<script type='text/javascript'>alert('$msg');</script>";
//  }



?>