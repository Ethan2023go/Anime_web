<?php include_once "db.php";

if(isset($_POST['subject'])){
    $Votes->save(['text'=>$_POST['subject'],'subject_id'=>0,'vote'=>0]);
    $subject_id=$Votes->find(['text'=>$_POST['subject']])['id'];
    $subject_id2=$Votes->max('id');
}

if(isset($_POST['option'])){
    foreach($_POST['option'] as $option){
        $Votes->save(['text'=>$option,'subject_id'=>$subject_id,'vote'=>0]);
    }
}

to("../back.php?do=votes");