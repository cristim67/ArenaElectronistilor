<?php require_once "controllerUserData.php"; ?>

<?php

if( $_SESSION['email']){

}
else header('Location: login-user.php');
?>


<?php require_once "cachecontrol.php"; ?>

<?php $conapv = mysqli_connect('localhost','root','',''); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #1124FA;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#" >Dashboard  
<?php    echo$_SESSION['mere'];?>
   </a>
    <!--<a href="inscriere_participant.php" class="btn btn-dark" style="float: left;">ADD</a>-->
        <a href="log.php" class="btn btn-light" style="float: left;">Logs</a>
        
        <a href="dashboard-rundarapida.php" class="btn btn-light" style="float: left;">Runda</a>
    <button type="button" class="btn btn-light" style="float:left;"><a href="logout-user.php">Logout</a></button>
    </nav>
   
 


<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
      <th>Id</th>
      <th>Echipa</th>
      <th>Punctaj</th>
      <th>Stergere ECHIPA</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM echipe ORDER BY punctaj DESC' );

      $i = 1;

      while($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $i;  ?></td>
      <td><?php echo $row['echipa'];  ?></td>
          
        <td><?php 
        
          echo "<form method='post' action='donatie.php' name='edit'>

           <input class='text' name='donatie' value='$row[punctaj]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
        
         <td><?php 
        
          echo "<form method='post' action='stergere.php' name='edit'>

           <button  name='numesters' value='$row[echipa] ' type='submit' style='background-color:red;'> DELETE
</form>";
        
        
        ?>
        </td>
        
      
            
    </tr>
  <?php $i++; } ?>
  
  </tbody>
  
</table>



<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
      <th>Adauga ECHIPA</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM echipe ORDER BY punctaj DESC' );

      $i = 1;

    
    ?>
    <tr>
 
          
        <td><?php 
        
          echo "<form method='post' action='insertechipa.php' name='edit' style='margin-left:1rem;'>

           <input class='text' name='donatie' value='' placeholder='Nume Echipa'>
           <button  name='NUME'  type='submit' style='background-color:lightblue;'> ADAUGA
</form>";
        
        
        ?>
        </td>
        
        
       
      
            
    </tr>

  
  </tbody>
  
</table>



</body>
</html>