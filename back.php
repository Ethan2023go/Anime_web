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
        <button type="button" id="myBtn" class="navBtn">myBtn</button>
    </div>
    <div class="slide_nav" id="back_nav">
        <div class="row">
            <div class="col ">
                <div class="box" id="myBox">

                </div>
            </div>
        </div>
    </div>


</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
   
    
    $(document).ready(function() {
        const myBtn = $('#myBtn');
        const myBox = $('#back_nav');
        let slide = 0;
        
        
        myBtn.click(function() {
            if (slide == 0) {
                myBox.slideDown(1000);

            } else {

                myBox.slideUp(800);
            }
            if (slide == 1) {
                slide = 0;
            } else {
                slide = 1;
            }
        });

    });
</script>


</html>