<style>
    .pic_title {
        width: 100%;
        height: 60px;
        font-size: 20px;
        background-color: lightsalmon;
    }

    .sumbit {
        width: 100%;
        height: 80px;
        background-color: limegreen;
    }
</style>


<div style="width:98%; height:80%; margin:auto;">

    <form method="post" action="./api/edit.php">

        <table class="add">
            <tr>
                <input type="hidden" name="table" value="<?= $do; ?>">
                <td class="add_btn">
                    <input style="color:#7D6C46" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增圖片">
                </td>
            </tr>
        </table>


        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="pic">
                    <td width="58%">圖片系列</td>
                    <td width="12%">顯示</td>
                    <td width="12%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total = $Picture->count();
                $div = 3;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $rows = $Picture->all(" limit $start,$div");
                foreach ($rows as $row) {
                ?>
                    <tr>
                    <td>
                        <img src="./imgs/<?=$row['img'];?>" style="width:220px;height:120px">
                    </td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        <td>
                            <input class="form-check-input" type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td>
                            <input class="pic_res" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新此圖片">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <div class="one">
            
            <?php
                 if($now>1){
                     $prev=$now-1;
                     echo "<a href='?do=$do&p=$prev' style='color:#0089A7;text-decoration:none;'> < &nbsp;</a>"; 
                 }
 
                 for($i=1;$i<=$pages;$i++){
                     $fontsize=($now==$i)?'25px':'18px';
                     echo "<a href='?do=$do&p=$i' style='font-size:$fontsize;text-decoration:none;color:#0089A7;'>  $i &nbsp; </a>";
                 }
 
                 if($now<$pages){
                     $next=$now+1;
                     echo "<a href='?do=$do&p=$next' style='color:#0089A7;text-decoration:none;'> > </a>";
                 }
             ?>
           </div>        

           <table style="margin-top:5px; width:100%;">
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
</div>