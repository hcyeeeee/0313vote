
<table class="table table-hover">
<h2 class="text-center font-weight-bold">會員資料管理</h2>

<div class="col-md-9 m-auto ml-3 ">
<h3 class="text-center">會員列表</h3>
<table class="table ml-5 m-auto  " style="width: 600px;">
    <tr>
        <td>#</td>
        <td>姓名</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>信箱</td>
        <td>性別</td>
        <td>生日</td>
        <td>管理</td>
    </tr>

  

<?php 
$rows=all('users');
foreach($rows as $row){
echo "<tr>";
echo "<td>";
// echo "<a href='../api/reg.php?id={$row['id']}'>";
echo ($row['id']);
echo "</td>";
// echo "<td>";
// echo "<img src='../img/{$row['name']}' style='width:100px;height:100px'>";
// echo "</td>";
echo "<td>{$row['name']}</td>";
echo "<td>{$row['account']}</td>";
echo "<td>{$row['password']}</td>";
echo "<td>{$row['email']}</td>";
echo "<td>{$row['gender']}</td>";
echo "<td>{$row['birthday']}</td>";

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