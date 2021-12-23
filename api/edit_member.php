<?php include_once "db.php";

//依照表單POST傳來的id欄位，使用find自訂函式來取得廣告圖片的紀錄
$member=find("users",$_POST['id']);


//取得表單傳來的intro欄位資料
$intro=$_POST['intro'];

//根據是否有上傳檔片來決定要執行那一項更新指令
if(isset($filename)){
    update('ad',['name'=>$filename,'intro'=>$intro],['id'=>$_POST['id']]);
}else{
    update('ad',['intro'=>$intro],['id'=>$_POST['id']]);
}

//更新完成，導向回廣告頁
to("../back/?do=member");

?>