
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
        $title['post'][] =$row['heading'];
        $article['post'][] =$row['article'];
        $image['post'][] =$row['image'];
        $author['post'][] =$row['author'];
        $author['post'][] =$row['date'];
        $expert['post'][] =$row['description'];
        $cat['post'][] =$row['cat1'];


    }
}




mysqli_close($con);

?>