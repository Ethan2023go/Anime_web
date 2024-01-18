<h2>喜好投票</h2>

<fieldset>
<table>
    <tr>
        <th width="10%">編號</th>
        <th width="60%">問卷題目</th>
        <th width="10%">投票總數</th>
        <th width="10%">結果</th>
    </tr>
    <?php
    $ques=$Votes->all(['subject_id'=>0]);
    foreach($ques as  $key => $que){
    // dd($que);
    ?>
    <tr>
        <td><?=$key+1;?></td>
        <td><?=$que['text'];?></td>
        <td><?=$que['vote'];?></td>
        <td>
            <a href='?do=result&id=<?=$que['id'];?>'>結果</a>
        </td>
        <td>

    <?php
        }
    ?> 
</table>


    <legend>新增問卷</legend>
    <form action="./api/add_que.php" method="post">
    <div style="display: flex;">
        <div>問卷名稱</div>
        <div>
            <input type="text" name="subject">
        </div>
    </div>
    <div>
        <div id="opt">選項
            <input type="text" name="option[]">
            <input type="button" value="更多" onclick="more()">
        </div>

    </div>
<div class="ct">
    <input type="submit" value="送出"><input type="reset" value="清空">
</div>
</form>
</fieldset>
<script>
function more(){
    let opt=`<div id="opt">選項
                <input type="text" name="option[]">
            </div>`
    $("#opt").before(opt);
}    
</script>