<?php include('database.php'); ?> 
<?php

$username=$_POST['username'];
$pass_word=$_POST['pass_word'];
mysqli_query($connect,"insert into register values('$username','$pass_word')");

if(mysqli_affected_rows($connect)>0){
    echo '<p>Registration Successfull!<br></p>';
    echo '<a href="login_page.php">Go to login page</a>';
}
else
    echo '<a href="register.php">Registration Failed. Try again!</a>';
?>
