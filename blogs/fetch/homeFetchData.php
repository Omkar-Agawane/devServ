<?php
$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}
$sql = "SELECT * FROM articletable";
$data = mysqli_query($con, $sql);
$len_home = mysqli_num_rows($data);

if($len_home > 0){
    while($row = mysqli_fetch_assoc($data)){
        $id_home[]=$row['no'];
        $date_home[]=$row['date'];
        $title_home[] =$row['heading'];
        $preface_home[] =$row['description'];
        $article_home[] =$row['article'];
        $like_home[] =$row['like'];
        $comment_home[] =$row['comments'];
        $image_home[] =$row['image'];
        $cat[] =$row['cat1'];

    }
}









mysqli_close($con);