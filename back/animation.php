<div style="width:99%; height:80%; margin:auto;">
    <form method="post" action="./api/edit.php">

    <!-- add -->
    <table class="add">
    <input type="hidden" name="table" value="<?=$do;?>">
        <td class="add_btn">
            <input style="color:#7D6C46" type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增動畫選項">
        </td>
    </table>


        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="yel">
                    <td width="40%">動畫縮圖</td>
                    <td width="30%">網址替換</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total=$Animation->count();
                $div=4;
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$Animation->all(" limit $start,$div");
                foreach($rows as $row){
                ?>
                <tr>
                    <td width="40%" height="100px">
                        <img src="./imgs/<?=$row['img'];?>" style="width:210px;height:100px;margin-bottom:5px">
                    </td>
                    <td width="30%">
                        <input type="text" name="text[]" style="width:90%" value="<?=$row['text'];?>">
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                    <td width="7%">
                        <input class="form-check-input" type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td width="7%">
                    <input class="form-check-input" type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                    <input class="pic_res" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更新圖片">
                    </td>
                </tr>
                <?php
                // dd($row['text']);
                }
                ?>
             </tbody>
        </table>
 
         <div class="ani_one">
            
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
               

        <table style="width:100%;">
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