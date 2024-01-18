<style>
    .modal_acc{
        position: relative;
        width: 100%;
        z-index: 100;
        background-color: lightgreen;
    }
    #cover{
        width: 33%;
        height:300px;
        top:200px;
        left:33.3%;
        background-color: lightblue;
        border-radius: 10px;
        position: absolute;    
    }
    
    #coverr{
        width: 100px;
        height: 200px;
        background-color: lightcoral;
    }
    .cent{
        width: 100%;
        background-color: lightgoldenrodyellow;
        
    }
    .pic_title{
     width:100%;
     height: 60px;
     font-size: 20px;
     background-color: lightsalmon;
    }
    .sumbit{
     width: 100%;
     height: 80px;
     background-color: limegreen;
    }

    </style>


<div style="width:98%; height:70%; margin:auto; border:#666 1px solid;">
    <p class="pic_title">圖片管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="pic">
                    <td width="70%">圖片系列</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total=$Picture->count();
                $div=3;
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$Picture->all(" limit $start,$div");
                foreach($rows as $row){
                ?>
                <tr>
                    <td>
                        <img src="./imgs/<?=$row['img'];?>" style="width:130px;height:120px">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    <td>
                        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td>
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                    <input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更新此圖片">
                    </td>
                </tr>
                <?php
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增圖片"></td>
                    <td class="sumbit"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>