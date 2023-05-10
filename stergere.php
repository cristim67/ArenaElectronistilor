<?php


require "controllerUserData.php";

if(isset($_POST['numesters'])){
    
    
    $valoare=$_POST['numesters'];
 
    
    
  
    $conn = mysqli_connect('localhost', 'root', '', '');
    
    
       
    
        $av=$_SESSION['mere'];
    
    
        $log=$av." Stergere echipa".$valoare;
    
        $connn = mysqli_connect('localhost', 'root', '', '');
    
        $sql12=$connn->query("INSERT INTO loguri(log) VALUES('$log')");
    
    
    
    
    $sql1_=$conn->query("DELETE FROM echipe WHERE echipa='$valoare'");

    header('location: dashboard.php');
}


?>