<?php include('database.php'); ?> 
<?php

$school=$_POST['school'];
$schloc=$_POST['schloc'];
$degree=$_POST['degree']; 
$DOG=$_POST['DOG']; 


mysqli_query($connect,"insert into userdata1(school,schloc,degree,DOG) values('$school','$schloc','$degree','$DOG')");
echo '<script>
  location.replace("inp3.php");
</script>';
?>