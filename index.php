<?php include_once "./api/db.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>首頁</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/css.css">
</head>

<body>
<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:10px; top:4px; cursor:pointer; z-index:101; color:aliceblue; font-size:25px; font-family:Arial Black;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:100;"></div>
		</div>
	</div>
  <div class="all ">
   
    <!-- modal_set -->


    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
      <div class="container-fluid">
        <a href=""><img class="man" src="./local_pic/logo.png" alt="" srcset=""></a>
        
        <div class="a123">
        <a class="link" href="#news">最新消息</a>
        <a class="link" href="#pic">最新遊戲展示圖</a>
        <a class="link" href="#vote">熱門票選活動</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarsExample03">
          <ul class="navbar-nav  mb-2 mb-sm-0 ms-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">語言</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="#">中文</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
                <li><a class="dropdown-item" href="#">日本語</a></li>
              </ul>
            </li>
            <li class="login_log">
              <a class="nav-link bg-danger" onclick="login('#cover','#cvr','./modal/login.php?')">管理者登入</a>
            </li>
          </ul>
          <form class="d-flex ms-3" role="search">
            <input class="form-control me-2" type="search" placeholder="find your answer!" aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fa-brands fa-sistrix"></i></button>
          </form>
        </div>
      </div>
    </nav>




    <!-- animation_wall -->
    <?php   
    $row=$Animation->find(['sh'=>1]);
    ?>
    <div class="animation_wall text-center ">
      <!-- iframe自動輪播 -->
       <!-- 大部分影片無法自動輪播 暫時處理 -->
      <div class="ifr_box">
      <iframe class="border border-light mt-1" width="90%" height="100%" src="<?=$row['text'];?>rel=0&autoplay=1&loop=1&&mute=1&controls=0 " title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
       
        <!-- <iframe class="border border-light mt-1" width="90%" height="100%" src="<?=$row['text'];?>rel=0&autoplay=1&loop=1&mute=1&controls=1" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

        <!-- <iframe class="border border-light mt-1" width="90%" height="100%" src="<?=$row['text'];?>rel=0&autoplay=1&loop=1&playlist=CMF3qeu7fHY&mute=1&controls=0 " title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div class="mask">

        </div>
      </div>
    </div>


    <!-- news -->
    <div class="news" id="news">
      <!-- <div class="xd"></div> -->
      <!-- 為了背景 -->
      <?php   
         $imgs=$News->all(['sh'=>1]); 
        //  dd($imgs); 
      ?>

      <div class="card_all">
        <?php
      foreach($imgs as $key => $img){
        ?>

        <div class="card2">
          <div class="card_img">
            <img class="C_img_size" src="./imgs/<?=$img['img'];?>" alt="">
          </div>
          <div class="card_body">
           <?=$img['text'];?>
          </div>
        </div>


        <!-- <div class="card2">
          <div class="card_img">
            <img class="C_img_size" src="../imgs/" alt="">
          </div>
          <div class="card_body">
            薩神
          </div>
        </div>

        <div class="card3">
          <div class="card_img">
            <img class="C_img_size" src="../imgs/" alt="">
          </div>
          <div class="card_body">
            魔物獵人
          </div>
        </div>

        <div class="card4">
          <div class="card_img">
            <img class="C_img_size" src="../imgs/" alt="">
          </div>
          <div class="card_body">
            經典惡靈古堡
          </div>
        </div> -->

       <?php
         }
        ?>
      </div>
    </div>




    <!-- picture -->
    <!-- 有空的話再加入亂數功能 -->
    <div class="picture" id="pic">
      <?php
       //$imgs=$Picture->all(['sh'=>1]," order by rank");
       //foreach($imgs as $idx => $img){
        // dd ($img);
      ?>
      <img id="pic_img" src="">
      <div class="option">
        <button class="btn btn-info" id="btn1" data-img="./local_pic/Zelda_link3.jpg" onclick="changeImg(this.id)">1</button>
        <button class="btn btn-info" id="btn2" data-img="./local_pic/FINAL_16.png" onclick=' changeImg(this.id)'>2</button>
        <button class="btn btn-info" id="btn3" data-img="./local_pic/Baldurs Gate 3_cha_2.jpg" onclick='changeImg(this.id)'>3</button>
        <button class="btn btn-info" id="btn4" data-img="./local_pic/final_family.jpg" onclick='changeImg(this.id)'>4</button>
        <button class="btn btn-info" id="btn5" data-img="./local_pic/Alan Wake 2.jpg" onclick='changeImg(this.id)'>5</button>
      </div>

      <?php
       // }
      ?>

    </div>
    <!-- vote-->
    <div class="vote" id="vote">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="co1 vote_title">Everybody Top 10 anime!</div>

            <div class="questions col-12 vote_opt">
            <table>
             <tr>
                  <th width="20%">編號</th>
                  <th width="60%">問卷題目</th>
                  <th width="20%">投票總數</th>
              </tr>
              <?php
              $ques=$Votes->all(['subject_id'=>0]);
              foreach($ques as  $key => $que){
              ?>
              <tr>
                  <td><?=$key+1;?></td>
                  <td><?=$que['text'];?></td>
                  <td><?=$que['vote'];?></td>
                  <td>
          
              <?php
                  }
              ?> 
             </table>

            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="vote_pic ">
          <?php

           $que=$Votes->find($que['id']);
          //  dd($que);
          ?> 

          <?php 
          
          $opts=$Votes->all(['subject_id'=>$que['id']]);
          foreach($opts as $opt){
              $total=($que['vote']!=0)?$que['vote']:1;
              $rate=round($opt['vote']/$total,2);
          
              echo "<div style='width:95%;display:flex;align-items:center;margin:10px 0'>";
              echo    "<div style='width:50%'>{$opt['text']}</div>";
              echo    "<div style='width:".(40*$rate)."%;height:20px;background-color:#ccc'></div>";
              echo    "<div style='width:10%'>{$opt['vote']}票(".($rate*100)."%)</div>";
              echo "</div>";
          }
          ?>

          </div>
        </div>
      </div>
    </div>


    <!-- foot -->
    <div class="foot">

    </div>

  </div>
</body>

<button onclick="topFunction()" id="ArrowBtn" title="Gotop"><i class="fa-solid fa-arrow-up" style="color: #fffff0;"></i></button>


<script>
  // pic控制
  // 定義儲存上次點擊的id和隱藏狀態
  let tmpId = "";
  let tmpHide = 0;
  let tmpstring = ""; 

  // 更改圖片的函數
  function changeImg(id) {
    // 獲取data-img圖片路徑
    let imgData = document.getElementById(id).dataset.img;
    let img=$(`#${id}`).data('img');
    
    // console.log(imgData);
    // console.log(tmpHide);
    // console.log(id);
    // console.log(tmpId);

    $.post({img},()=>{
        console.log(img);
    })


    // 判斷當前id是否與上次點擊相同
    if (id == tmpId) {
      // 如果相同則進行顯示/隱藏切換
      if (tmpHide == 1) {
        $(document).ready(function() {
          $("#pic_img").fadeOut(2000);
          tmpHide = 0;
        });
      } else {
        $(document).ready(function() {
          $("#pic_img").fadeIn(2000);
        });
        tmpHide = 1;
      }

    } else {
      // 如果不同,先淡入
      $("#pic_img").fadeIn(1000);

      $(document).ready(function() {

        // 再替換圖片並淡出
        $("#pic_img").fadeOut(2000);
        setTimeout(() => {
          // $("#pic_img").attr("src", `${imgData}`)
          $("#pic_img").attr("src", `${img}`)
        }, 1000);
        $("#pic_img").fadeIn(2000);


        // $("#pic_img").click(function(){

        // })

      });

      // 重置
      tmpId = "";
      tmpHide = 0;
    }

    // 儲存當前id
    tmpId = id;

  }
  //


  // login function
  function login(border,content,url){
	
  $(border).fadeIn()
	if(content)
	$(content).fadeIn()
	if(content&&url)
	$(content).load(url)
}

  function cl(border)
  {
  	$(border).fadeOut();
  }

  //
  
  // arrowBtn
window.onscroll = scrollFunction; //每當畫面捲動觸發一次

function scrollFunction() { 
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("ArrowBtn").style.display = "block";
  } else {
    document.getElementById("ArrowBtn").style.display = "none";
  }
}//網頁捲動超過200pixel就會跑出來 display設定成block 跑回上面就隱藏。


// 重置scrollTop這個變數的值
function topFunction() {
  document.documentElement.scrollTop = 0; 
}
</script>

</html>
<?php



?>