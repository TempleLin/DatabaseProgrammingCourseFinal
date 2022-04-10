<?php
require_once 'connect.php';
?>

<?php

  
if (empty($_POST["ID"]) || empty($_POST["Password"])){

    echo "<script>alert('禁止為空'); window.history.back(-1);</script>";

    exit;

}else{
    
    $ID=$_POST["ID"];
    $Password = $_POST["Password"];
      
    $check="SELECT * FROM users WHERE id='".$ID."'";
    $check_pre=$conn->prepare($check);//預處理 
    $check_pre->execute();//執行預處理的結果;
    $check_array=$check_pre->fetchall(PDO::FETCH_ASSOC);//將返回的結果集以陣列的方式全部返回給變數$jg
    $check_output=count($check_array);
    if($check_output>0){

        echo "<script>alert('This id was used!'); window.history.back(-1);</script>";

    }else{

        $insert="INSERT users(id, psw)
        SELECT '".$ID."','".$Password."'
        FROM dual
        WHERE not exists (select * from users
        where id = ".$ID.")";
        $conn->query($insert);
        echo "<script>alert('New user is created successfully!'); window.history.back(-1);</script>";
    
    }

}
?>