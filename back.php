<?php include_once "./api/db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後端管理</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/back.css">
</head>

<body>

    <div class="top_nav">
         <!-- logo -->
        <a href="index.php"><img class="man" src="./imgs/logo.png" alt="" srcset=""></a>

        <button onclick="location.href='./api/logout.php'" class="logout" type="button">logout</button>


        <!-- modal_acc -->
    <div class="modal_acc">
    <div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
 		</div>
    </div>
  </div>


        <!-- dash_btn -->
        <button class="dash_btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">dashbord</button>
        <!--  -->

        <button type="button" id="myBtn" class="navBtn">↴</button>
    </div>
    <div class="slide_nav" id="back_nav">
        <div class="row">
            <div class="col ">
                <div class="box" id="myBox">

                </div>
            </div>
        </div>
    </div>

    <!--offcanvas-->
    <div class="offcanvas offcanvas-start border border-4 rounded-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header black-50">
            <h5 class="offcanvas-title text-secondary" id="offcanvasScrollingLabel">System Management</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-light ">
            <div class="a_text">
                <a class="a_tag" href="">Over view</a>
                <a class="a_tag" href="?do=account">Account management</a>
                <a class="a_tag" href="?do=animation">Animation wall</a>
                <a class="a_tag" href="?do=picture">Picture change</a>
                <a class="a_tag" href="?do=news">Latest news</a>
                <a class="a_tag" href="?do=votes">Votes</a>
            </div>
        </div>
    </div>

    <!-- main -->
    <div class="main_control">
        <div class="main">
          <div class="main_top">
          
          </div>
         <?php
         $do=$_GET['do']??'main';
         $file="./back/{$do}.php";
         if(file_exists($file)){
            include $file;
         }else{
         include "./back/main.php";
         }
        ?>
        </div>
    </div>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // 目前無用滑動下拉功能
    $(document).ready(function() {
        const myBtn = $('#myBtn');
        const myBox = $('#back_nav');
        let slide = 0;


        myBtn.click(function() {
            if (slide == 0) {
                myBox.slideDown(700);

            } else {

                myBox.slideUp(400);
            }
            if (slide == 1) {

                slide = 0;

            } else {
                slide = 1;
            }
        });

    });


  // login function
  function op(border,content,url){
	
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