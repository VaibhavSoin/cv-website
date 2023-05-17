<?php include('database.php'); ?> 
<?php

$skills=$_POST['skills'];

mysqli_query($connect,"insert into userdata3(skills) values('$skills')");
echo '<script>
  location.replace("inp5.php");
</script>';
?>