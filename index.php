<?php include_once "./api/db.php" ?>
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
        <a href="#"><img class="man" src="./imgs/logo.png" alt="" srcset=""></a>
        
        <div class="a123">
        <a class="link" href="">最新消息</a>
        <a class="link" href="">遊戲畫面鑑賞</a>
        <a class="link" href="">票選活動</a>
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
              <a class="nav-link bg-danger" onclick="login('#cover','#cvr','./modal/login.php?')" >登入</a>
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
       <!-- 大部分影片無法自動倫播 之後處理 -->
      <div class="ifr_box">
      <iframe class="border border-light mt-1" width="90%" height="100%" src="<?=$row['text'];?>rel=0&autoplay=1&loop=1&&mute=1&controls=0 " title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
       
        <!-- <iframe class="border border-light mt-1" width="90%" height="100%" src="<?=$row['text'];?>rel=0&autoplay=1&loop=1&mute=1&controls=1" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

        <!-- <iframe class="border border-light mt-1" width="90%" height="100%" src="<?=$row['text'];?>rel=0&autoplay=1&loop=1&playlist=CMF3qeu7fHY&mute=1&controls=0 " title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        <div class="mask">

        </div>
      </div>
    </div>


    <!-- news -->
    <div class="news">
      <!-- <div class="xd"></div> -->
      <!-- 為了背景 -->

      <div class="card_all">

        <div class="card2">
          <div class="card_img">
            <img class="C_img_size" src="./imgs/dark_souls.jpg" alt="">
          </div>
          <div class="card_body">
            大顆壽司
          </div>
        </div>


        <div class="card2">
          <div class="card_img">
            <img class="C_img_size" src="./imgs/zelda_mark.jpg" alt="">
          </div>
          <div class="card_body">
            薩神
          </div>
        </div>

        <div class="card3">
          <div class="card_img">
            <img class="C_img_size" src="./imgs/monster_world.jpg" alt="">
          </div>
          <div class="card_body">
            魔物獵人
          </div>
        </div>

        <div class="card4">
          <div class="card_img">
            <img class="C_img_size" src="./imgs/resident evil4.jpg" alt="">
          </div>
          <div class="card_body">
            經典惡靈古堡
          </div>
        </div>


      </div>
    </div>




    <!-- picture -->
    <div class="picture">

      <img id="pic_img" src="">

      <div class="option">
        <button class="btn btn-info" id="btn1" data-img="./imgs/Zelda_mina.png" onclick='changeImg(this.id)'>1</button>
        <button class="btn btn-info" id="btn2" data-img="./imgs/FINAL_16.png" onclick=' changeImg(this.id)'>2</button>
        <button class="btn btn-info" id="btn3" data-img="./imgs/Baldurs Gate 3_cha_2.jpg" onclick='changeImg(this.id)'>3</button>
        <button class="btn btn-info" id="btn4" data-img="./imgs/final_family.jpg" onclick='changeImg(this.id)'>4</button>
        <button class="btn btn-info" id="btn5" data-img="./imgs/Alan Wake 2.jpg" onclick='changeImg(this.id)'>5</button>
      </div>

    </div>
    <!-- vote-->
    <div class="vote">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="co1 vote_title">Everybody Top 10 anime!</div>

            <div class="col-12 vote_opt"></div>
          </div>
        </div>
        <div class="col-8">
          <div class="vote_pic ">

          </div>
        </div>
      </div>
    </div>


    <!-- foot -->
    <div class="foot">

    </div>

  </div>
</body>


<script>
  // pic控制
  // 定義儲存上次點擊的id和隱藏狀態
  let tmpId = "";
  let tmpHide = 0;

  // 更改圖片的函數
  function changeImg(id) {
    // 獲取data-img圖片路徑
    let imgData = document.getElementById(id).dataset.img;
    console.log(imgData);
    // console.log(tmpHide);
    // console.log(id);
    // console.log(tmpId);

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
          $("#pic_img").attr("src", `${imgData}`)

        }, 1000);
        $("#pic_img").fadeIn(2000);


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
</script>

</html>
<?php



?>