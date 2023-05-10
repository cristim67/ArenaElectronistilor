<?php


require "controllerUserData.php";

if(isset($_POST['NUME'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['NUME'];
 
    
    $donatie= $_POST['donatie'];
    
    
  
    $conn = mysqli_connect('localhost', 'root', '', '');
    
    
       
    
    $av=$_SESSION['mere'];
    
    
       $log=$av." SET punctaj=".$donatie." LUI ".$valoare;
    
        $connn = mysqli_connect('localhost', 'root', '', '');
    
    $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    $sql1_=$conn->query("INSERT echipe(echipa,punctaj) VALUES('$donatie',0)");

    header('location: dashboard.php');
}


?>