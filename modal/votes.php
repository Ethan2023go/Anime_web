<style>
    .que{
        width: 75px;
    }
    .que_modal{
        height:380px;
        overflow: auto;
    }
</style>

<div class="que_modal">
<legend>新增問卷</legend>
    <form action="./api/add_que.php" method="post">
    <div style="display: flex;">
        <div class="que">問卷名稱</div>
        <div>
            <input class=" reset_in form-control" type="text" name="subject">
        </div>
    </div>
    <div>
        <div id="opt">選項
            <input class=" reset_in form-control w-75 mb-2" type="text" name="option[]">
            <input class=" form-control w-25 mb-3" type="button" value="更多" onclick="more()">
        </div>

    </div>
<div class="ct">
    <input type="submit" value="送出">
    <input id="rebtn" type="reset" value="清空" >
</div>
</form>
</fieldset>
</div>



<script>
function more(){
    let opt=`<div id="opt">
                <input class="opt_rm form-control w-75 mb-1" placeholder="填入選項" type="text" name="option[]">
            </div>`
    $("#opt").after(opt);
} 

function reset(){
   $(".opt_rm").remove();
}
$("#rebtn").click(function(){
    reset();
})
</script>