<?php include('database.php'); ?> 
<?php

$title=$_POST['title'];
$cmpny=$_POST['cmpny'];
$cmpnycity=$_POST['cmpnycity']; 
$SD=$_POST['SD']; 
$ED=$_POST['ED']; 

mysqli_query($connect,"insert into userdata2(title,cmpny,cmpnycity,SD,ED) values('$title','$cmpny','$cmpnycity','$SD','$ED')");
echo '<script>
  location.replace("inp4.php");
</script>';
?>