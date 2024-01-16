<?php
include_once "db.php";


$table=$_POST['table'];
unset($_POST['table']);
$DB=${ucfirst($table)};
switch($table){
    case "account":
        unset($_POST['pw2']);
    break;
}

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../imgs/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

    // if($table != 'account'){
    //     $_POST['sh']=($table=='title')?0:1;
    // }
 
    if(!isset($_POST['id'])){
        $_POST['sh']=1;
        $_POST['rank']=$Picture->max('id')+1;
    }


$DB->save($_POST);
// dd($_POST);

to("../back.php?do=$table");
?>