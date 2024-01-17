
    <?php 
    switch($_GET['table']){
        case "animation":
            echo "<h3>更新動畫縮圖</h3>";
        break;
        case 'picture':
            echo "<h3>更新此圖片</h3>";
        break;
        case 'news':
            echo "<h3>更新新聞圖片</h3>";
        break;
    }
?>

<hr>

<form action="./api/update.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
    <?php 
        switch($_GET['table']){
            case "animation":
                echo "<td>更新動畫縮圖</td>";
            break;
            case 'picture':
                echo "<td>更新此圖片</td>";
            break;
            case 'news':
                echo "<td>更新新聞圖片</td>";
            break;
        }
    ?>
       <br> 
        <td><input type="file" name="img" id=""></td>
    </tr>
</table>

<div>
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
</div>

</form>