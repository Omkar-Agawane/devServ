<?php include './config.php' ;?>
<?php

$target_dir = "../upload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$file_name = basename($_FILES["fileToUpload"]["name"]);
$target_name=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
      echo "<script>
             alert('File is not an image.');

     </script>";

    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "";
    echo "<script>
             alert('Sorry, file already exists.');

     </script>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo"<script>
             alert('Sorry, file size is too large.');

     </script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp"
&& $imageFileType != "gif" ) {
  echo "<script>
             alert('Invalid file format');

     </script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "<script>
             alert('Uploading error.');

     </script>";
  }
}


$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

$content=mysqli_real_escape_string($con, $_REQUEST['body']);
$author= mysqli_real_escape_string($con, $_REQUEST['author']);
$header =mysqli_real_escape_string($con,$_REQUEST['header']);
$category =mysqli_real_escape_string($con,$_REQUEST['cat1']);
$expert =mysqli_real_escape_string($con,$_REQUEST['expert']);
$date=  date("jS F Y");

if(!$con){
    die("Connection error".mysqli_connect_error());
}

$sql="INSERT INTO `articletable` (`no`, `id`, `article`, `image`, `like`, `date`, `author`, `heading`, `imageTag`, `comments`, `cat1`, `cat2`, `cat3`,`description`) VALUES (NULL, '', '$content', '$file_name', '0', '$date', '$author', '$header', '', '0', '$category', '', '','$expert') ";


//$sql="DELETE FROM chapter";

    if (mysqli_query($con, $sql)) {
  echo "<script>
             alert('Your post submitted');
             window.history.go(-1);
     </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
   ?>