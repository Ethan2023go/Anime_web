<style>
    .que{
        width: 75px;
    }
    .que_modal{
        height:380px;
        overflow: auto;
    }
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

    <div class="reset">
    <div class="reset_con">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input class="resbtn" type="submit" value="新增">
        <input class="resbtn" type="reset" value="重置">
    </div>
</div>

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