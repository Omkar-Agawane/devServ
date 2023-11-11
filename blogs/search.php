<!doctype html>
<html>
<head>
<link rel="stylesheet" href="./project.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Search: tguide business guild</title>
        <meta property="og:site_name" content="">
        <meta property="og:title" content="" />
        <meta property="og:description" content="tguide is platform to exchange and Knowledge and news about science, technology, future tech and  upcoming features in latest tech world all latest updates are in the platoform" />
        <meta property="og:image" itemprop="image" content="">
        <meta property="og:type" content="blog" />
        <meta property="og:url" content="" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="@teafweb" />
        <meta name="twitter:title" content=""/>
        <meta name="twitter:description" content="Read more about and stay updated for latest tech, science and web news information, stay connected more to come.." />
        <meta name="twitter:image" content="" />
        <meta property="twitter:type" content="blog" />

        <?php require 'header_files.php';?>


    </head>


<body>
<?php require 'header.php';
?>
<?php $keyword = $_REQUEST['search'];
                require './fetch/search.php';
                require './fetch/homeFetchData.php';
                ?>

<main>
<br><br>
    <section class="container grid-2-7">
        <section class="flex">
            <?php   $temp= $len-20;
                 if($temp>1){
                    while($temp<$len){ ?>
                    <div class="card">
                        <a href="./post.php?id=<?php echo $id[$temp]; ?>">
                        <img class="thumbnail"src="<?php echo $image[$temp];?>"></a>
                        <div class="post-expert">
                            <p><?php echo $title[$temp] ;?> </p>
                            <p>
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-twitter"></i>
                            </p>
                        </div>
                    </div>
                <?php $temp++; }
                 }

                else {
                        $temp = $len;
                        while($temp>0) { ?>
                            <div class="card">
                                <a  href="./post.php?id=<?php echo $id[$temp-1]; ?>">
                                <img class="thumbnail" src="upload/<?php echo $image[$temp-1];?>" >
                                <h4 class="h4"><?php echo $title[$temp-1]; ?></h4>
                              </a>

                            </div>
                            <?php $temp--;
                        }
                 }
            ?>
        </section>

        <section>
            <?php require_once 'sidebar.php';?>
        </section>
    </section>

</main>






























































</div>


<?php include 'footer.php';?>