<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="./css/css.css">
</head>

<body>
  <div class="all ">

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
      <div class="container-fluid">
        <a href="#"><img class="man" src="./imgs/logo.png" alt="" srcset=""></a>

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
            <li class="login">
              <a class="nav-link bg-danger" href="#">登入</a>
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

    <div class="animation_wall text-center ">
      <!-- iframe自動輪播 -->
      <div class="ifr_box">
        <!-- <iframe class="border border-light mt-1" width="1400" height="600" src="https://www.youtube.com/embed/CMF3qeu7fHY?rel=0&autoplay=1&loop=1&playlist=CMF3qeu7fHY&mute=1&controls=0 " title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="mask">

        </div> -->
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
        <img class="C_img_size" src="./imgs/monster_world.jpg" alt="">        </div>
        <div class="card_body">
          魔物獵人
        </div>
       </div>

       <div class="card4">
        <div class="card_img">
        <img class="C_img_size" src="./imgs/resident evil4.jpg" alt="">        </div>
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
        <button onclick="changeImg('this.id')">图片1</button>
        <button onclick="changeImg('image2.png')">图片2</button>
          <button id="btn1" data-img="">圖片1</button>
          <button id="btn2" data-img="">圖片2</button>
          <button id="btn3" data-img="">圖片3</button>
          <button id="btn4" data-img="">圖片4</button>         
          <button id="btn5" data-img="">圖片5</button>         
        </div>
        
      </div>

      <!-- video -->
      <div class="video">


      </div>


      <!-- foot -->
      <div class="foot">
       
      </div>

    </div> 
</body>
<button onclick="changeImg('this.id')">图片1</button>


<script>

// function changeImg(imgSrc) {
//   let img = document.getElementById('img');
//   img.src = imgSrc; 
// }




// let img = $('#pic_img'); 

// img.hide();

// $('#btn1').click(function() {
//   img.hide();
//   img.attr('src', './imgs/Zelda_sword.jpg'); 
//   img.fadeIn(1500);
// });

// $('#btn2').click(function() {
//   img.hide();
//   img.attr('src', './imgs/monster_hunter.jpg');
//   img.fadeToggle(1500);
// });
// $('#btn3').click(function() {
//   img.hide();
//   img.attr('src', './imgs/Like a Dragon.jpg');
//   img.fadeToggle(1500);
// });
// $('#btn4').click(function() {
//   img.hide();
//   img.attr('src', './imgs/FINAL 16.jpg');
//   img.fadeToggle(1500);
// });
// $('#btn5').click(function() {
//   img.hide();
//   img.attr('src', './imgs/bg3_party.jpg');
//   img.fadeToggle(1500);
// });
</script>

</html>
<?php



?>