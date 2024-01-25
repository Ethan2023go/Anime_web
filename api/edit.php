<?php include_once "db.php";
dd($_POST);

$table=$_POST['table'];
$DB=${ucfirst($table)};
unset($_POST['table']);
/* 
if(isset($_POST['id'])){
    foreach($_POST['id'] as $id){
        $_POST['text'][$id]='';
    }
}
 */

         foreach($_POST['del'] as $key => $id){
         if($table=="votes"){
               $DB->del($id);
             $vote_tmp= $Votes->all(['subject_id'=>$id]);
             foreach($vote_tmp as $vote_id){
               $DB->del($vote_id);
             }
           }
         }
        

foreach($_POST['id'] as  $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
    }else{
        $row=$DB->find($id);
        if(isset($row['text'])){
            $row['text']=$_POST['text'][$key];
        }
        switch($table){
            case "animation":
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
            case "account":
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
            break;
            default:
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        }

        $DB->save($row);
    }
}

to("../back.php?do=$table");