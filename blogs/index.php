<!doctype html>
<html>

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9BBJ7V70LY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9BBJ7V70LY');
  </script>
    <link rel="preload" href="./project.css" as="style">
    <link rel="stylesheet" href="./project.css">
    <?php require_once 'header_files.php';?>
    <?php require './fetch/homeFetchData.php';?>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tguide : A business guild</title>
    <link rel="icon" href="./assets/images/favi.png" size="24x24">

    <meta name="keyword" content="business, blogs, teafweb, tguide, digital strategy management">
    <meta name="description" content="platform to exchange  knowledge and news about business and upcoming features in latest tech world all latest updates are in the platoform">
    <!-- Chrome, Firefox OS and Opera -->
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#f5f5f5">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#f5f5f5">
    <!--SEO-->



    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="./manifest.webmanifest">
    <!-- Google Tag Manager -->


    <!-- End Google Tag Manager -->


    <meta property="og:site_name" content="<?php echo $title_home[$len_home-1] ;?>">
    <meta property="og:title" content="<?php echo $title_home[$len_home-1] ;?>" />
    <meta property="og:description"
        content="blog is platform to exchange and Knowledge and news about business, technology, future tech and  upcoming features in latest tech world all latest updates are in the platoform" />
    <meta property="og:image" itemprop="image"
        content="<?php echo WEBSITE;?>upload/<?php echo $image_home[$len_home-1];?>">
    <meta property="og:type" content="blog" />
    <meta property="og:url" content="tguide.live" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="tguide.live" />
    <meta name="twitter:creator" content="@teafweb" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description"
        content="Read more about and stay updated for latest tech, sicnece and web news information, stay connected more to come.." />
    <meta name="twitter:image" content="<?php echo WEBSITE;?>/upload/<?php echo $image_home[$len_home-1] ;?>" />
    <meta property="twitter:type" content="website" />

    <?php require 'header_files.php';?>

</head>


<body>

<div class="teafweb-pop1" id="teafweb-pop1">
    <div class="">
        <section class="top">
            <img src="assets/images/phonemock.png" width="200px"alt="wpa install app">
        </section>
        <section class="middle">
            <h2 class="margin">Install light weight</h2>
            <p class="m1" style="color:#006AFF"><strong>Install PWA to save space</strong></p>
            <p class="m1" style="color:#74787D">A guild of business people to lend a hand to each other</p>
      <br>
        </section>
        <section class="bottom"></section>
        <section class="cta">
            <button class="button1" id="cancel">Whatever</button>
            <button class="button2" id="install">Save it</button>
        </section>
    </div>
</div>
    <?php require_once 'header.php';
?>
    <main class="smoke">
        <section id="#banner" class="banner">
            <div class="background-img-container">
                <div class="background-img">
                    <a
                        href="./post?id=<?php echo $id_home[$len_home-1]?>&blog=<?php echo $title_home[$len_home-1];?>">
                        <img src="upload/<?php echo $image_home[$len_home-1];?>" alt=""></a>
                </div>
                <div>
                    <div class="banner-container">
                        <a          href="./post?id=<?php echo $id_home[$len_home-1]?>&blog=<?php echo $title_home[$len_home-1];?>">
                        <div class="white-pat">

                            <div class="">
                                <small class="sm-btn">#<?php echo $cat[$len_home-1]; ?></small>
                                <h1 class="cc h2 text-slight"><?php echo $title_home[$len_home-1];?></h1>
                                <small class="limit-line33 text-light"><?php echo $preface_home[$len_home-1] ;?></small>
                               <h4 class="hover h6 text-light">Read more &rarr;</h4>
                            </div>
                            <br>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="right-sidebar container">
            <section class="">
           <h2 class="title">Latest</h2>
           <br>
                <div class="grid-2-7 mflex-rev-r2">
                    <div class="margin">
                        <a href="./post?id=<?php echo $id_home[$len_home-2]?>&blog=<?php echo $title_home[$len_home-2];?>">
                            <img class="thumbnail hover2" src="upload/<?php echo $image_home[$len_home-2];?>"></a>
                        <div class="post-expert">
                        <small class="sm-btn">#<?php echo $cat[$len_home-2]; ?></small>
                            <h3 class="h3">
                                <a href="./post?id=<?php echo $id_home[$len_home-2]?>&blog=<?php echo $title_home[$len_home-2];?>">
                                     <?php echo $title_home[$len_home-2] ;?>
                                    </a>
                            </h3>
                            <small class="limit-line3"> <?php echo $preface_home[$len_home-2] ;?> </small>
                        </div>
                    </div>
                    <div class="m-grid-2">
                        <?php $temp = $len_home-2;
                         while($temp > $len_home-4 ) {; ?>
                        <div style="margin-bottom:1rem">
                            <a href="./post?id=<?php echo $id_home[$temp-1]?>&blog=<?php echo $title_home[$temp-1];?>">
                                <img class="thumbnail hover2" src="upload/<?php echo $image_home[$temp-1];?>"></a>
                            <div class="" style="margin-top: 5px">
                            <small class="sm-btn">#<?php echo $cat[$temp-1]; ?></small>
                             <p class="h5"> <strong>  <a href="./post?id=<?php echo $id_home[$temp-1]?>&blog=<?php echo $title_home[$temp-1];?>"> <?php echo $title_home[$temp-1] ;?> </a></strong> </p>
                                <small class="limit-line3 "> <?php echo $preface_home[$temp-1] ;?> </small>
                            </div>
                        </div>
                        <?php  $temp--; } ?>
                    </div>
                </div>
                </div>

                <section id="book" class="">
                <h2 class="title"> Books</h2>
                    <div class="scroll">
                        <div>
                            <img src="./assets/images/41yocDlVT-L.jpg" class="book-cover"
                                alt="books to read for business owner">
                        </div>
                        <div>
                            <img src="./assets/images/51-QeIYwqFL._SX310_BO1,204,203,200_.jpg" class="book-cover"
                                alt="books to read for business owner">
                        </div>
                        <div>
                            <img src="./assets/images/51usR3nfqyL.jpg" class="book-cover"
                                alt="books to read for business owner">
                        </div>
                        <div>
                            <img src="./assets/images/81l3rZK4lnL.jpg" class="book-cover"
                                alt="books to read for business owner">
                        </div>
                    </div>
                </section>

                <div>
                    <br>
                <h2 class="title"> Helpful Blogs</h2>
                    <div class="flex">
                        <?php $temp = $len_home-4;
                         while($temp > 0 ) {; ?>
                        <div class="postcard">
                            <div>
                                <a
                                    href="./post?id=<?php echo $id_home[$temp-1]?>&blog=<?php echo $title_home[$temp-1];?>">
                                    <img class="img" src="upload/<?php echo $image_home[$temp-1];?>">
                                </a>
                            </div>
                            <div class="post-expert">
                                <small class="sm-btn">#<?php echo $cat[$temp-1]; ?></small>
                                <h3 class="h4"><?php echo $title_home[$temp-1] ;?> </h3>
                                <small class="limit-line3 text-wrap small"><?php echo $preface_home[$temp-1] ;?>
                                </small>
                            </div>
                        </div>
                        <?php  $temp--; } ?>
                    </div>
                </div>
            </section>

            <section id="sidebar" class="margin">
                <?php  require_once 'sidebarHome.php';?>
                <?php //require_once 'sidebar.php';?>
            </section>
        </section>


    </main>







    </div>




    <?php include 'footer.php';?>
    <script>
        startSw();
    /*    let flag = false;
       let scroll = 0;
       window.addEventListener('scroll', (event) => {
           let scroll = this.scrollY;
           const body = document.body;
           const html = document.documentElement;
           const height = Math.max(body.scrollHeight, body.offsetHeight,
               html.clientHeight, html.scrollHeight, html.offsetHeight);
                   if ( scroll > (height/2) && flag== false ) {
                    startSw();
                    flag = true;
                 }
       });*/
    </script>