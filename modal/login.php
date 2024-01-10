<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入系統</title>
</head>
<style>
    .login {
    width: 600px;
    height: 500px;
    background-color: rgba(0, 0, 0, .5);
    border-radius: 10px;
    border: 1px solid #fff;
    box-shadow: 0px 0px 60px #000;
    backdrop-filter: blur(5px);
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<body>
<div class="login">
    <div class="form">
        <h2>管理系統</h2>
        <div class="group">
            <label for="acc">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class="group">
            <label for="pw">密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div class="btn-group">
            <!-- <input type="submit" value="登入" class="btn login1" > -->
            <button class="btn login1" onclick="login()">登入</button>
            <!-- <button class="btn cancel" onclick="back()">回前台</button> -->
            <!-- <input type="reset" value="清除" class="btn cancel"> -->
        </div>
    </div>
</div>
</body>
</html>

<script>
        function login() {
            let acc = $("#acc").val()
            let pw = $("#pw").val()
            $.post("api/logincheck.php", {
                acc
            }, function(res) {
                if (res == 1) {
                    $.post('api/lchkpw.php', {
                        acc,
                        pw
                    }, function(resp) {
                        if (resp == 1) {
                            // alert('123');
                            location.href = "ss/select.html";
                        } else {
                            alert("密碼錯誤");
                            $('#acc,#pw').val("");
                        }
                    })
                } else {
                    alert("查無帳號")
                    $('#acc,#pw').val("");
                }
            })
        }

    function back() {
        location.href = "index.php"
    }
</script>
</script>