<?php
require_once 'connect.php';
?>


<?php
$ID=$_POST["ID"];
$Password = $_POST["Password"];
$check="SELECT * FROM users WHERE id='".$ID."'";
$check_pre=$conn->prepare($check);//預處理 
$check_pre->execute();//執行預處理的結果;
$check_array=$check_pre->fetchall(PDO::FETCH_ASSOC);//將返回的結果集以陣列的方式全部返回給變數
foreach($check_array as $val){
    $psw=$val['psw'];
    $id=$val['id'];
}

if (empty($_POST["ID"]) || empty($_POST["Password"])){

    echo "<script>alert('禁止為空'); window.history.back(-1);</script>";

    exit;

}else{  
    if($psw==$_POST["Password"]){
        session_start();
        $_SESSION["password"]=$psw;
        $_SESSION["id"]=$id;
        echo "<script>alert('Successful login!'); window.history.back(-1);</script>";
    }else{
        echo "<script>alert('Id and password are incorrected!'); window.history.back(-1);</script>";
    }
}

?>