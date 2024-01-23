<style>
    #img{
        background-color: #C1D2DD;
        border: 1px black solid;
        margin-bottom: 20px;
        border-radius: 0% 0% 0% 0% / 0% 0% 0% 0% ;
        color: white;
        font-family: Times New Roman;
        box-shadow: 10px 10px rgba(0,0,0,.15);
        transition: all .4s ease;
    }
    #img:hover {
        border:#E2EAEB;
        border-radius: 0% 0% 50% 50% / 0% 0% 5% 5% ;
        box-shadow: 10px 10px rgba(0,0,0,.25);
    }
    #text{
        background-color: #DFE7E8;
        border: 1px black solid;
        border-radius: 0% 0% 0% 0% / 0% 0% 0% 0% ;
        color: black;
        box-shadow: 10px 10px rgba(0,0,0,.15);
        transition: all .4s ease;
    }
    #text:hover {
        border:#E2EAEB;
        border-radius: 0% 0% 0% 15% / 20% 20% 5% 5% ;
        box-shadow: 10px 10px rgba(0,0,0,.35);
    }
    .flex{
        margin-top: -40px;
        display: flex;
        flex-wrap: wrap;
    }
    p{
        margin: 0;
        font-size: 35px;
        font-family: system-ui;
        font-weight: 600;
        color:#2F3F46;
        /* color:#E9F2EE; */
    }
    .form{
        width: 400px;
        height: 300px;
;
    }
    .reset{
        width: 40%;
        height: 30px;
        /* background-color: lightcoral; */
        display: flex;
        justify-content: space-evenly;
    }
    .resbtn{
        border-radius: 0% 0% 0% 10% / 0% 0% 0% 10% ;
        color: black;
        box-shadow: 2px 2px rgba(0,0,0,0.5);
        transition: all .4s ease;
    }
    .resbtn:hover{
        border:#E2EAEB;
        border-radius: 0% 0% 0% 15% / 20% 20% 5% 5% ;
        box-shadow: 4px 4px rgba(0,0,0,1.5);
    }


</style>
    <?php 
    switch($_GET['table']){
        case "animation":
            echo "<p>更新動畫縮圖</p>";
        break;
        case 'picture':
            echo "<p>更新此圖片</p>";
        break;
        case 'news':
            echo "<p>更新新聞圖片</p>";
        break;
    }
?>


<form class="form" action="./api/update.php" method="post" enctype="multipart/form-data">
<table class="table">
    <tr>
    <?php 
        switch($_GET['table']){
            case "animation":
                echo "<tr>";
                echo "<td style='background-color:rgba(199, 192, 192, 0.1);;border:none;color:#252B2E;padding:0;font-size:20px;font-weight:600;'>網址替換</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td style='background-color:rgba(199, 192, 192, 0.1);;border:none;'><textarea name='' id='text' cols='40' rows='6'></textarea></td>";
                echo "</tr>";
            break;
            case 'picture':
                echo "";
            break;
            case 'news':
                echo "<td>更新新聞圖片</td>";
                echo '<br>';  
                echo "<td>更新新圖內容</td>";
            break;
        }
    ?>

       <br> 
      <input type="file" name="img" id="img">
    </tr>
</table>


<div class="reset">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input class="resbtn" type="submit" value="更新">
    <input class="resbtn" type="reset" value="重置">
</div>

</form>

<!-- <script>
  function hideText() {
    var textarea = document.getElementById('text');
    textarea.value = '123'; 
    textarea.removeEventListener('click', hideText); 
  }
</script> -->