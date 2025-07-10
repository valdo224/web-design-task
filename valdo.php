<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$db = "valdo";
try{
$connect = mysqli_connect($servername,$username,$password,$db,3307);
echo "connected";
}catch (mysqli_sql_exception $err){
echo "unable to connect " .$err->getMessage();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body> 
    <div style="
    text-align:center;
     padding: 20pc;
     margin: 0 auto;
     background:green;">
     <h1>Sign in<h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">

     Name:    
    <input type="text" placeholder="Name">
    <br><br>
    Password:
    <input type="password" placeholder="password" required>
    <br><br>
    Phone:
    <input type="text" placeholder="phone" required>
    <br><br>
    Email:
    <input type="email" placeholder="email" required>
    <br><br>
    Date of birth:
    <input type="date" name="date of birth">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="others">others<br><br>
    <button type="submit">Sign in</button><br>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "You are welcome to valdo ltd";
}
?>
 </form>
    
</body>
</html>