
<?php

$con = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if(!$con){
    die (mysqli_connect_error . " this is connection error");
}
$sql = "SELECT * FROM articletable WHERE no=$article_id";
$data = mysqli_query($con, $sql);
$len = mysqli_num_rows($data);

if($len > 0){
    while($row = mysqli_fetch_assoc($data)){
        $id['post'][]=$row['no'];
        $date['post'][]=$row['date'];
        $title =$row['heading'];
        $article['post'][] =$row['article'];
        $like['post'][] =$row['like'];
        $image['post'][] =$row['image'];
        $author['post'][] =$row['author'];
        $author['post'][] =$row['date'];
        $comment['post'][] =$row['comments'];
        $cat1['post'][] =$row['cat1'];
        $author['post'][] =$row['author'];
        $expert['post'][] =$row['description'];

    }
}

$sql = "SELECT category FROM categorytable";
$data = mysqli_query($con, $sql);
$len2 = mysqli_num_rows($data);
if($len2 > 0){
    while($row = mysqli_fetch_assoc($data)){
        $cat_all[] =$row['category'];


    }
}

mysqli_close($con);

?>