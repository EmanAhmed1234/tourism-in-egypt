<?php
$name =$_REQUEST['txt3'];
$number =$_REQUEST['txt2'];
$mail=$_REQUEST['mail'];
$message=$_REQUEST['mess'];

if(isset($_POST['send'])){
    $host="	localhost";
    $user="root";
    $password="";
    $data="b_i_s";
    
    $conn = mysqli_connect($host,$user,$password,$data);

    $insert = " insert into message values ('$name','$number','$mail','$message')";

    mysqli_query($conn , $insert);

    if ($conn){
        echo("<h2 style='color:red;'> registration is done!</h2>");
    }
    else{
        echo("<h2 style ='color:blue;'>failed!</h2>");
    }
}
  
?>