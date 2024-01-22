<h2>動態影片牆</h2>
<div style="width:99%; height:80%; margin:auto; overflow:auto;">
    <form method="post" action="./api/edit.php">
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
                $div=3;
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$Animation->all(" limit $start,$div");
                foreach($rows as $row){
                ?>
                <tr>
                    <td width="40%" height="100px">
                        <img src="./imgs/<?=$row['img'];?>" style="width:210px;height:100px">
                    </td>
                    <td width="30%">
                        <input type="text" name="text[]" style="width:90%" value="<?=$row['text'];?>">
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                    <td width="7%">
                        <input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td width="7%">
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                    <input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更新圖片">
                    </td>
                </tr>
                <?php
                // dd($row['text']);
                }
                ?>
             </tbody>
        </table>
 
         <div class="cent">
            
           <?php
                if($now>1){
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> < </a>"; 
                }

                for($i=1;$i<=$pages;$i++){
                    $fontsize=($now==$i)?'24px':'16px';
                    echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
                }

                if($now<$pages){
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                }
            ?>
          </div>        
               

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增動畫選項"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>