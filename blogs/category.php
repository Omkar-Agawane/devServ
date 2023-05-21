<!doctype html>
<html>

<head>

    <link rel="preload" href="./project.css" as="style">
    <link rel="stylesheet" href="./project.css">
    <?php  require_once 'header_files.php';?>
    <?php require './fetch/homeFetchData.php';?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore with tguide blogs</title>
    <link rel="icon" href="./assets/images/favi.png" size="24x24">

    <meta name="keyword" content="business, blogs, teafweb, tblogs, tguides, business help">
    <meta name="description"
        content="tguide is platform to exchange and Knowledge and news about business and business activities ">

    <meta name="theme-color" content="#f5f5f5">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#f5f5f5">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#f5f5f5">
    <!--SEO-->


    <meta property="og:site_name" content="tguide">
    <meta property="og:title" content="tguide: a business guild " />
    <meta property="og:description"
        content="tguide is platform to exchange and Knowledge and news about business and business activities " />
    <meta property="og:image" itemprop="image" content="">
    <meta property="og:type" content="blog" />
    <meta property="og:url" content="" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="@teafweb" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description"
        content="Read more about and stay updated for latest tech, sicnece and web news information, stay connected more to come.." />
    <meta name="twitter:image" content="" />
    <meta property="twitter:type" content="blog" />




</head>


<body>
    <?php require_once 'header.php';
       $category_name = $_REQUEST['category'];
       require './fetch/categoryFetchData.php';
      ?>
    <main>
        <br><br>
        <section class="container right-sidebar">
            <section class=" ">
                <div class="flex2">
                    <?php
                        $temp = $len_cat_post;
                        while($temp>0) { ?>
                    <div class="card">
                        <a href="./post.php?id=<?php echo $id[$temp-1]; ?>">
                            <img class="thumbnail" src="./upload/<?php echo $image[$temp-1];?>">
                            <h4 class="h4"><?php echo $title[$temp-1]; ?></h4>
                        </a>
                    </div>
                    <?php $temp--;
                        }
            ?>
                </div>
            </section>
            <section>
                <?php require_once 'sidebar.php';?>
            </section>
        </section>
    </main>
    <?php include 'footer.php';?>


































































    </div>
    <script>
        function back() {
            window.history.go(-1);
        }
    </script>








    <? require 'footer.php';?>