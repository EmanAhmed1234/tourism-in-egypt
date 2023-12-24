<?php
 $username= $_REQUEST['name'];
 $female= $_REQUEST['gender'];
 $male= $_REQUEST['gender'];
 $email= $_REQUEST['mail'];
 $pass= $_REQUEST['pass'];
 $day= $_REQUEST['months'];

 

 $name =$_REQUEST['txt3'];
 $number =$_REQUEST['txt2'];
 $mail=$_REQUEST['mail'];
 $message=$_REQUEST['mess'];

if(isset($_POST['submit'])){
    $host="	localhost";
    $user="root";
    $password="";
    $data="b_i_s";

    $conn = mysqli_connect($host,$user,$password,$data);

    $insert = " insert into bis_students values ('$username','$female','$male','$email','$pass','$day')";

    mysqli_query($conn , $insert);

    if ($conn){
        echo("<h2 style='color:red;'> registration is done!</h2>");
    }
    else{
        echo("<h2 style ='color:blue;'>failed!</h2>");
    }

}


?>