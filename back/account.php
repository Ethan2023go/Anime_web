<form method="post" action="./api/edit.php">

   <table class="add">
   <input type="hidden" name="table" value="<?=$do;?>">
       <td class="add_btn">
        <input style="color:#7D6C46;" type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增管理者帳號">
        </td>
    </table>

        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="yel">
                    <td width="40%">帳號</td>
                    <td width="40%">密碼</td>
                    <td width="20%">刪除</td>
                </tr>
                <?php
                
                $total=$Account->count();
                $div=8;
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$Account->all(" limit $start,$div");
                foreach($rows as $row){
                ?>
                
                <tr>
                    <td>
                        <input class="form-control mt-2 m-auto" type="text" name="acc[]" style="width:80%" value="<?=$row['acc'];?>">
                         
                    </td>
                    <td>
                        <input class="form-control mt-2 m-auto" type="password" name="pw[]" style="width:70%" value="<?=$row['pw'];?>">
                    </td>
                    <td style="width:50px;">
                    <input class="form-check-input" type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                </tr>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
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
        <table style="margin-top:10px; width:100%;">
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