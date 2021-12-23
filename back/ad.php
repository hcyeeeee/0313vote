<h2 class="text-center font-weight-bold">題目圖片管理</h2>

<div class="col-md-9 m-auto ml-3 ">
<h3 class="text-center">圖片列表</h3>
<table class="table ml-5 m-auto  " style="width: 600px;">
    <tr>
        <td>圖片</td>
        <td>說明</td>
        <td>管理</td>
    </tr>
<?php 
$rows=all('ad');
foreach($rows as $row){
echo "<tr>";
echo "<td>";
echo "<img src='../img/{$row['name']}' style='width:100px;height:100px'>";
echo "</td>";
echo "<td>{$row['intro']}</td>";
// echo "<td>";
// echo "<a href='../api/change_status.php?id={$row['id']}'>";
// echo ($row['sh']==1)?"顯示中":"未上架";
// echo "</a>";
echo "</td>";
echo "<td>";
echo "<a class='btn btn-info' href='?do=edit_ad&id={$row['id']}'>修改</a>";
// echo "<button>重新上傳</button>";
echo "<a class='btn btn-danger' href='../api/del_ad.php?id={$row['id']}'>刪除</a>";
"</td>";
 echo "</tr>";
}



?>
</table>
</div>
</div>