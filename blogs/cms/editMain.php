<?php include './config.php' ;?>
<?php
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
$article_id =$_GET['id'];
$filename   = $article_id;
$target_dir = "../upload/";

if( basename($_FILES["fileToUpload"]["name"])!= '' ){
  $target_file = $target_dir . $filename.basename($_FILES["fileToUpload"]["name"]);
  $target_file_db =$filename.basename($_FILES["fileToUpload"]["name"]);

}
else{
  $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
  $target_file_db =basename($_FILES["fileToUpload"]["name"]);
}





$target_name=basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$erro_msg1 ="";
$erro_msg2 ="";
$erro_msg3 ="";
$erro_msg4 ="";
$erro_msg5 ="";
$err =false;



// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000  ) {
  $erro_msg3 = "One of the image size too large, please optimzed your image before uploading";
  $err =true;
  $uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file) ) {
  $target_file = $session =$_REQUEST['thumbImage'];
  $target_file_db =  $target_file;
  if(basename($_FILES["fileToUpload"]["name"])!= ''){
    $erro_msg1 = "Course thumbnail image name already exist, please change image or name.";
    $err =true;
  }
  $uploadOk = 0;
}
if (!$target_name) {
    // $target_file = mysqli_real_escape_string($con,$_REQUEST['file']);
    echo //"<script>
           //  alert('No, file exists.'); </script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp" ) {
  echo "<script>
     </script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 ) {

  // if everything is ok, try to upload file
  }else{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
      echo"$target_file";
    echo "<script>
             alert('Uploading error.');

     </script>";
  }
  }




$content=mysqli_real_escape_string($con, $_REQUEST['body']);
$author= mysqli_real_escape_string($con, $_REQUEST['author']);
$header =mysqli_real_escape_string($con,$_REQUEST['header']);
$category =mysqli_real_escape_string($con,$_REQUEST['cat1']);
$expert =mysqli_real_escape_string($con,$_REQUEST['expert']);
$date=  date("jS F Y");

if(!$con){
    die("Connection error".mysqli_connect_error());
}


$sql = "UPDATE articletable SET article='$content',heading='$header',date='$date', image='$target_file_db',cat1='$category', author='$author', description='$expert' WHERE no=$article_id";

if (mysqli_query($con, $sql) ) {
  if($err ==true){
    echo "<script>
      alert('Errors\\n.$erro_msg1.\\n.$erro_msg2.\\n.$erro_msg3.');
      history.back();
    </script>";
  }
  else{
    echo "<script>
      alert('Updated');
      history.back();
    </script>";
  }
    ?>


<?php }




mysqli_close($con);





   ?>