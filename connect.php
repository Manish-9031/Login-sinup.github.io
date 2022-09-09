<?php

$username='root';
$password='';
$server='localhost';
$db='demo';


$con=mysqli_connect($server,$username,$password,$db);

if(isset($_POST['loginn'])){
    $nam=$_POST['usern'];
    $psw=$_POST['userp'];
   $insertquari= "insert into demodet(username,password) values('$nam','$psw')";
   $chk=mysqli_query($con,$insertquari);
   if($chk){
    ?>
    <script>
        alert ("Login Sucessfully");
    </script>
    <?php
   }else{
    ?>
    <script>
        alert (" NOt sucessfully");
    </script>
    <?php
   }
}



?>


