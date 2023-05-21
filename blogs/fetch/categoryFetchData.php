
<?php
    
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}
$sql = "SELECT * FROM articletable WHERE cat1='$category_name'";
$data = mysqli_query($con, $sql);
$len_cat_post = mysqli_num_rows($data);

if($len_cat_post>0){
    while($row = mysqli_fetch_assoc($data)){
        $id[]=$row['no'];
        $date[]=$row['date'];
        $title[] =$row['heading'];
        $article[] =$row['article'];
        $like[] =$row['like'];
        $image[] =$row['image'];
    }
}
mysqli_close($con);