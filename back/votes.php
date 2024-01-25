<style>
    .vote_table {
        width: 100%;
        margin-top: 12px;
        text-align: center;
    }
</style>


<form method="post" action="./api/edit.php">
    <table class="add">
        <tr>
            <input type="hidden" name="table" value="<?= $do; ?>">
            <td class="add_btn">
                <input style="color:#7D6C46" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增問卷">
            </td>
        </tr>
    </table>


    <table class="vote_table">
        <tr>
            <th width="15%">編號</th>
            <th width="40%">問卷題目</th>
            <th width="15%">投票總數</th>
            <th width="15%">刪除</th>
        </tr>
        <?php
        $ques = $Votes->all(['subject_id' => 0]);
        foreach ($ques as  $key => $que) {
            // dd($que);
        ?>
            <tr class="">
                <td class="td_push"><?= $key + 1; ?></td>
                <td class="td_push"><?= $que['text']; ?></td>
                <td class="td_push"><?= $que['vote']; ?></td>
                <td class="td_push">
                    <input class="form-check-input" type="checkbox" name="del[]" value="<?= $que['id']; ?>">
                    
                </td>
            </tr>

        <?php
        }
        ?>
    </table>


    <table style="margin-top:15px; width:100%;">
        <tbody>
            <tr class="btn_flex">

                <td class="bottom_btn">
                    <input class="modify" type="submit" value="修改確定">
                    <input class="reset_btn" type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
</form>