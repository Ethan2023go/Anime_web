<h3>新增圖片選項</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>讚圖</td>
        <td><input type="file" name="img" id=""></td>
    </tr>
    <tr>
        <td>文字介紹</td>
        <td><input type="text" name="text" id=""></td>
    </tr>
</table>
<div>
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>

</form>