<style>
    .reset {
        width: 100%;
        height: 30px;
        display: flex;
        justify-content: center;
        margin-top: 20px;
        /* background-color: lightcoral; */
    }

    .reset_con {

        width: 150px;
        height: 30px;
        display: flex;
        justify-content: space-evenly;
        /* background-color: lightblue; */
    }

    .resbtn {
        border-radius: 0% 0% 0% 10% / 0% 0% 0% 10%;
        color: black;
        box-shadow: 2px 2px rgba(0, 0, 0, 0.5);
        transition: all .4s ease;
    }

    .resbtn:hover {
        border: #E2EAEB;
        border-radius: 0% 0% 0% 15% / 20% 20% 5% 5%;
        box-shadow: 4px 4px rgba(0, 0, 0, 1.5);
    }
    .form_con{
        width: 100%;
        display: flex;
        justify-content: center;      
    }
</style>
<legend>新增動畫選項</legend>
<hr>
<div class="form_con">
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>縮圖</td>
                <td><input class="form-control mt-3" type="file" name="img" id=""></td>
            </tr>
            <tr>
                <td>網址</td>
                <td><input class="form-control mt-3 mb-3" type="text" name="text" id=""></td>
            </tr>
        </table>
</div>

<div class="reset">
    <div class="reset_con">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input class="resbtn" type="submit" value="新增">
        <input class="resbtn" type="reset" value="重置">
    </div>
</div>

</form>