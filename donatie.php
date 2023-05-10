<?php


require "controllerUserData.php";

if(isset($_POST['numedonator'])){
    
    
    //echo $_POST['update1'];
    
    $valoare=$_POST['numedonator'];
 
    
    $donatie= $_POST['donatie'];
    
    
  
    $conn = mysqli_connect('localhost', 'root', '', '');
    
    
       
    
    $av=$_SESSION['mere'];
    
    
       $log=$av." SET punctaj=".$donatie." LUI ".$valoare;
    
        $connn = mysqli_connect('localhost', 'root', '', '');
    
    $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    $sql1_=$conn->query("UPDATE echipe SET punctaj=$donatie WHERE echipa='$valoare'");

    header('location: dashboard.php');
}


?>