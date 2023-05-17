<?php include('database.php'); ?> 
<?php

$username=$_POST['username'];
$pass_word=$_POST['pass_word'];
mysqli_query($connect,"insert into login_page(username,pass_word) values('$username','$pass_word')");
echo '<script>
  location.replace("inp1.php");
</script>';
?>