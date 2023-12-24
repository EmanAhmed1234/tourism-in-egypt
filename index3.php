<?php
 $destination = $_REQUEST['txt'];
 $guests = $_REQUEST['no.'];
 $arrival =['date'];
 $leaving = $_REQUEST['leav'];

 if(isset($_POST['bok'])){
    $host="	localhost";
    $user="root";
    $password="";
    $data="b_i_s";
    
    $conn = mysqli_connect($host,$user,$password,$data);

    $insert = " insert into booking values ('$destination','$guests','$arrival','$leaving')";

    mysqli_query($conn , $insert);

    if ($conn){
        echo("<h2 style='color:red;'> registration is done!</h2>");
    }
    else{
        echo("<h2 style ='color:blue;'>failed!</h2>");
    }

}




 ?>