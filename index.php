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
        <span class="text-white">test</span>

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
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fa-brands fa-sistrix"></i></button>
          </form>
        </div>
      </div>
    </nav>




    <!-- animation_wall -->

    <div class="animation_wall text-center ">
      <!-- iframe自動輪播 -->
      <div class="ifr_box">
        <iframe class="border border-light mt-1" width="1400" height="600" src="https://www.youtube.com/embed/CMF3qeu7fHY?rel=0&autoplay=1&loop=1&playlist=CMF3qeu7fHY&mute=1&controls=0 " title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="mask">

        </div>
      </div>
    </div>


    <!-- news -->
    <div class="news">
      <div class="xd"></div>
      <!-- 為了背景 -->

      <div class="card1">
        <div class="row g-0 border border-light bg-light border-4 rounded-end">
          <div class="col-md-4">
            <img src="./imgs/monster_hunter.jpg" class="img-fluid float-end" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Monster Hunter</h5>
              <p class="card-text">好玩遊戲1</p>
              <p class="card-text"><small class="text-muted">介紹阿 老鬼</small></p>
            </div>
          </div>
        </div>
      </div>


      <div class="card2">
        <div class="row g-0 border border-light bg-light border-4 rounded-end">
          <div class="col-md-4">
            <img src="./imgs/monster_hunter.jpg" class="img-fluid float-end" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Monster Hunter</h5>
              <p class="card-text">好玩遊戲1</p>
              <p class="card-text"><small class="text-muted">介紹阿 老鬼</small></p>
            </div>
          </div>
        </div>
      </div>


      <div class="card3 ">
        <div class="row g-0 border border-light bg-light border-4 rounded-end  ">
          <div class="col-md-4">
            <img src="./imgs/monster_hunter.jpg" class="img-fluid float-end" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Monster Hunter</h5>
              <p class="card-text">好玩遊戲1</p>
              <p class="card-text"><small class="text-muted">介紹阿 老鬼</small></p>
            </div>
          </div>
        </div>
      </div>
    

      <div class="card4">
        <div class="row g-0 border border-light bg-light border-4 rounded-end">
          <div class="col-md-4">
            <img src="./imgs/monster_hunter.jpg" class="img-fluid float-end" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Monster Hunter</h5>
              <p class="card-text">好玩遊戲1</p>
              <p class="card-text"><small class="text-muted">介紹阿 老鬼</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
 
 


  <!-- picture -->
  <div class="picture">

    <div class="option">
      <img id="img" src="image1.png">

      <button class="btn btn-primary" id="btn1" onclick="changeImg('image1.png')">图片1</button>
      <button onclick="changeImg('image2.png')">图片2</button>
      <button type="button"></button>
      <button type="button"></button>
      <button type="button"></button>
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



<script>
  // let elem = document.getElementById("btn1"); 

// 　function moveLeft() {
// 　  elem.style.left = parseInt(elem.style.left) - 10 + 'px';
// 　}

// 获取需要移动的元素
let elem = document.getElementById("btn1");

// 定义移动元素的函数
function moveLeft() {

  // 获取元素当前的 left 值,并转换为数字类型
  let currentLeft = parseInt(elem.style.left); 
  
  // 左移10px,可以根据需要调整移动的距离
  let newLeft = currentLeft - 100;

  // 将计算后的左侧位置赋值给元素
  elem.style.left = newLeft + 'px'; 

}

// 调用moveLeft函数后,元素就会向左移动了
</script>
</html>
<?php



?>