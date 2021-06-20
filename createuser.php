<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  
</head>
<style type="text/css">
  body
  {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(one.jpg);
    background-size: cover;
    background-position: center;
  }
  .box
  {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 30%;
    right: 35%;
    text-align: center;
    background: black;
 }
 .box h1
 {
  color: white;
 }
 .box input[type="text"], .box input[type="email"], .box input[type="number"]
 {
   border: 0;
   background: none;
   display: block;
   margin: 20px auto;
   text-align: center;
   border: 2px solid white;
   padding: 14px 10px;
   width: 300px;
   outline:none;
   color: white;
   border-radius: 10px;
 }

</style>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

  <form class="box" method="post">
    <h1>Create User</h1>
    <input class="app-form-control" placeholder="Name" type="text" name="name" required>
    <input class="app-form-control" placeholder="Email" type="email" name="email" required>
    <input class="app-form-control" placeholder="Balance" type="number" name="balance" required>
    <input class="btn btn-outline-light" type="submit" value="CREATE" name="submit"></input>
    <input class="btn btn-outline-light" type="reset" value="RESET" name="reset"></input>

            
    
  </form>
 

        
  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>