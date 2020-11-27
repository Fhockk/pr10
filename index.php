<!doctype html>
<html lang="en">
<head>  
   <style>
       input{
           position: relative;
           padding: 15px 30px;
           border: 1px bold;
           margin: 10px 20px;
           font-family: 'Montserrat', sans-serif;
           text-transform: uppercase;
           letter-spacing: 2px;
       }
   </style>
</head>
<?php session_start(); ?>
<body>
<form action="login.php" method="post">
    <label>login
        <input type="login" name="login">
    </label>
    <label>password
        <input type="password" name="password">
    </label>
    <input type="submit" value="send">
</form>

</body>
</html>