<?php include 'config.php' ;?>
<?php

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
$cat=mysqli_real_escape_string($con, $_REQUEST['category_name']);

if(!$con){
    die("Connection error".mysqli_connect_error());
}


$sql = "INSERT INTO `categorytable` (`no`, `category`) VALUES (NULL, '$cat') ";



    if (mysqli_query($con, $sql)) {
  echo "<script>
             alert('category added');

     </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

   ?>

<script>
    window.location.href = "/cms/category";
</script>