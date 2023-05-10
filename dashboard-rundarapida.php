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
    <title> Dashboard Runda Rapida</title>
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
        
        <a href="dashboard.php" class="btn btn-light" style="float: left;">Acasa</a>
    <button type="button" class="btn btn-light" style="float:left;"><a href="logout-user.php">Logout</a></button>
    </nav>
   
 


<table class="table table-striped table-bordered">
  <thead>
    <tr class="btn-primary">
      <th>i1_rasp</th>
      <th>i1_pct</th>
       <th>i2_rasp</th>
      <th>i2_pct</th>
       <th>i3_rasp</th>
      <th>i3_pct</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM rundafulger ' );

      $i = 1;

      while($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      
          <td><?php 
        
          echo "<form method='post' action='i1_rasp.php' name='edit'>

           <input class='text' name='donatie' value='$row[i1_rasp]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
               <td><?php 
        
          echo "<form method='post' action='i1_pct.php' name='edit'>

           <input class='text' name='donatie' value='$row[i1_pct]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
    
    
    
              <td><?php 
        
          echo "<form method='post' action='i2_rasp.php' name='edit'>

           <input class='text' name='donatie' value='$row[i2_rasp]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
               <td><?php 
        
          echo "<form method='post' action='i2_pct.php' name='edit'>

           <input class='text' name='donatie' value='$row[i2_pct]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
                <td><?php 
        
          echo "<form method='post' action='i3_rasp.php' name='edit'>

           <input class='text' name='donatie' value='$row[i3_rasp]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
               <td><?php 
        
          echo "<form method='post' action='i3_pct.php' name='edit'>

           <input class='text' name='donatie' value='$row[i3_pct]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
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
      <th>i4_rasp</th>
      <th>i4_pct</th>
       <th>i5_rasp</th>
      <th>i5_pct</th>
       <th>i6_rasp</th>
      <th>i6_pct</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //Fetch user details in user table from the database
      $query = mysqli_query($conapv,'SELECT * FROM rundafulger ' );

      $i = 1;

      while($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      
     
        </td>
                      <td><?php 
        
          echo "<form method='post' action='i4_rasp.php' name='edit'>

           <input class='text' name='donatie' value='$row[i4_rasp]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
               <td><?php 
        
          echo "<form method='post' action='i4_pct.php' name='edit'>

           <input class='text' name='donatie' value='$row[i4_pct]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
                  <td><?php 
        
          echo "<form method='post' action='i5_rasp.php' name='edit'>

           <input class='text' name='donatie' value='$row[i5_rasp]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
               <td><?php 
        
          echo "<form method='post' action='i5_pct.php' name='edit'>

           <input class='text' name='donatie' value='$row[i5_pct]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
                  <td><?php 
        
          echo "<form method='post' action='i6_rasp.php' name='edit'>

           <input class='text' name='donatie' value='$row[i6_rasp]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
        
               <td><?php 
        
          echo "<form method='post' action='i6_pct.php' name='edit'>

           <input class='text' name='donatie' value='$row[i6_pct]'>
           <button  name='numedonator' value='$row[echipa] ' type='submit'> Actualizare
</form>";
        
        
        ?>
        </td>
    </tr>
  <?php $i++; } ?>
  
  </tbody>
  
</table>

</body>
</html>