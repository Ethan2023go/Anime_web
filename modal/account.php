<style>
    .reset{
    width: 75%;
    height: 30px;
    display: flex;
    justify-content: space-evenly;
    margin-top: 20px;
    }
    .resbtn{
     border-radius: 0% 0% 0% 10% / 0% 0% 0% 10% ;
     color: black;
     box-shadow: 2px 2px rgba(0,0,0,0.5);
     transition: all .4s ease;
    }
    .resbtn:hover{
        border:#E2EAEB;
        border-radius: 0% 0% 0% 15% / 20% 20% 5% 5% ;
        box-shadow: 4px 4px rgba(0,0,0,1.5);
    }

</style>
<h3>新增管理者帳號</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>帳號:</td>
        <td><input class="form-control mt-2" type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td>密碼:</td>
        <td><input class="form-control mt-2" type="password" name="pw" id=""></td>
    </tr>
    <tr>
        <td>確認密碼:</td>
        <td><input class="form-control mt-2" type="password" name="pw2" id=""></td>
    </tr>
</table>
<div class="reset">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input class="resbtn" type="submit" value="新增">
    <input class="resbtn" type="reset" value="重置">
</div>

</form>