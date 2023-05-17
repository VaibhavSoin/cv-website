<?php include('database.php'); ?> 
<?php
$name=$_POST['name'];
$city=$_POST['city'];
$age=$_POST['age']; 
$country=$_POST['country']; 
$phone=$_POST['phone']; 
$email=$_POST['email']; 
$pin_code=$_POST['pin_code']; 

mysqli_query($connect,"insert into userdata(name,city,age,country,phone,email,pin_code) values('$name','$city','$age','$country','$phone','$email','$pin_code')");
echo '<script>
  location.replace("inp2.php");
</script>';
?>