<?php
require 'config.php';

$id = $_GET['id'];

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}

$sql = "DELETE FROM categorytable WHERE no=$id  ";



if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($con);





?>
<script>
    window.location.href = "/cms/category";
</script>