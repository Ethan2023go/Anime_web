<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .login {
        width: 100%;
        height: 100%;
        background-color: rgba(220, 220, 220, 0.5);
        border-radius: 10px;
        border: 1px solid #fff;
        box-shadow: 0px 0px 60px #000;
        backdrop-filter: blur(5px);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn-group {
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <div class="login">
        <div class="form">
            <h2>管理系統</h2>
            <div class="group mt-2">
                <label class="form-control mt-2" for="acc">帳號</label>
                <input class="form-control mt-2" type="text" name="acc" id="acc">
            </div>
            <div class="group mt-2">
                <label class="form-control mt-2" for="pw">密碼</label>
                <input class="form-control mt-2" type="password" name="pw" id="pw">
            </div>
            <div class="btn-group">
                <!-- <input type="submit" value="登入" class="btn login1" > -->
                <button class="btn btn-info login1 mt-2 " onclick="login()">登入</button>
                <!-- <button class="btn cancel" onclick="back()">回前台</button> -->
                <!-- <input type="reset" value="清除" class="btn cancel"> -->
            </div>
        </div>
    </div>
</body>

</html>

<script>
    // 定義登入檢查函數 login()
    function login() {

        // 獲取帳號和密碼輸入框的值
        let acc = $("#acc").val();
        let pw = $("#pw").val();

        // 使用$.post() AJAX請求,檢查帳號
        $.post("api/login_check.php", {
            acc
        }, function(res) {

            // 如果返回1,表示帳號存在
            if (res == 1) {

                // 再次發送請求,檢查密碼
                $.post('api/lchkpw.php', {
                    acc,
                    pw
                }, function(resp) {

                    // 如果返回1,密碼正確
                    if (resp == 1) {

                        // 跳轉頁面
                        location.href = "ss/select.html";

                        // 否則密碼錯誤    
                    } else {
                        alert("密碼錯誤");

                        // 清空輸入框
                        $('#acc,#pw').val("");
                    }
                })

                // 如果返回非1,帳號不存在    
            } else {
                alert("查無帳號")

                // 清空輸入框
                $('#acc,#pw').val("");
            }
        })
    }

    // 定義返回頁面函數 back()
    function back() {
        location.href = "index.php"
    }
</script>