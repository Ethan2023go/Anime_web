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

        width: 180px;
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

    .form_con {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>
<legend>新增管理者帳號</legend>
<hr>
<div class="form_con">
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
            <div class="reset_con">
                <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
                <input class="resbtn" type="submit" value="新增">
                <input class="resbtn" type="reset" value="重置">
            </div>
        </div>
        
        </form>
</div>

