<?php include('database.php'); ?> 
<?php

$summary=$_POST['summary'];

mysqli_query($connect,"insert into userdata4(summary) values('$summary')");
echo '<script>
  location.replace("cvfinal.php");
</script>';
?>