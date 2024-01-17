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
 </style>
<h2>最新消息</h2>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"></p>
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="yel">
                    <td width="35%">圖片</td>
                    <td width="40%">介紹文</td>
                    <td width="12%">顯示</td>
                    <td width="12%">刪除</td>
                    <td></td>
                </tr>
                <?php
            
                $rows=$News->all();
                foreach($rows as $row){
                ?>
                <tr>
                    <td width="45%">
                        <img src="./imgs/<?=$row['img'];?>" style="width:300px;height:30px">
                    </td>
                    <td width="23%">
                        <input type="text" name="text[]" style="width:90%" value="<?=$row['text'];?>">
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                    <td width="7%">
                       <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td width="7%">
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                    <input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更新">
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增新聞圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>