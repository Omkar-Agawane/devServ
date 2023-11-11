<!doctype html>
<html >

<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9BBJ7V70LY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9BBJ7V70LY');
</script>

<?php
       require_once 'header_files.php';
          $article_id= $_GET['id'];
          require './fetch/postFetchData.php';
      ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title['post'][0]; ?></title>
    <meta name="title" content="<?php echo $title['post'][0]; ?>" />
    <meta name="description" content="<?php echo  $expert['post'][0];?>" />
    <meta name="image" content="<?php echo WEBSITE;?>/upload/<?php echo  $image['post'][0];?>" />

    <meta property="og:title" content="<?php echo $title['post'][0]; ?>" />
    <meta property="og:description" content="<?php echo  $expert['post'][0];?>" />
    <meta property="og:image" content="<?php echo WEBSITE;?>/upload/<?php echo  $image['post'][0];?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $title['post'][0]; ?>" />
    <meta name="twitter:description" content="<?php echo  $expert['post'][0];?>" />
    <meta name="twitter:image" content="<?php echo WEBSITE;?>/upload/<?php echo  $image['post'][0];?>" />

    <link rel="preload" href="./project.css" as="style">
    <link rel="stylesheet" href="./project.css">

    <!-- pwa -->
    <meta name="theme-color" content="#fff">
    <link rel="manifest" href="./manifest.webmanifest">



</head>

<body>
    <?php require_once './fetch/homeFetchData.php';
    require_once 'header.php';
?>
    <main>
        <br><br>
        <section class="right-sidebar article">
            <section class="">
                <p><?php echo $date['post'][0];?></p>
                <h2 class="h2"><?php echo $title['post'][0]; ?></h2>
                <p class="text-primary"><strong>#<?php echo $cat['post'][0];?></strong> </p>
                <br>
                <div class="feedback">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo WEBSITE;?>/post.php?id=<?php echo $id['post'][0];?>"
                        target="_blank">
                        <i class="fa fa-facebook share" aria-hidden="true"></i> </a>
                    <a href="https://twitter.com/share?url=<?php echo WEBSITE;?>/post.php?id=<?php echo $id['post'][0];?>"
                        target="_blank"> <i class="fa fa-twitter share" aria-hidden="true" target="_blank"></i> </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo WEBSITE;?>/post.php?id=<?php echo $id['post'][0];?>"
                        target="_blank"><i class="fa fa-linkedin share" aria-hidden="true"></i> </a>
                    <a href="https://wa.me/?text=<?php echo WEBSITE;?>/post.php?id=<?php echo $id['post'][0];?>"
                        target="_blank"><i class="fa fa-whatsapp share" aria-hidden="true"></i> </a>
                </div> <br>
                <img class="post-thumbnail" src="upload/<?php echo $image['post'][0];?>">


                <div id="listening" class="pod" onclick="startPodcast()">
                    <img src="./assets/images/audioWave.png" id="audioWave" alt="liste to the article" width="50px">
                    <h3>Click to Start listening </h3>
                </div>
                <article id="demo">
                    <?php echo $article['post'][0];?>
                </article>

            </section>
            <section id="sidebar">
                <?php require_once 'sidebar.php';?>
            </section>
        </section>


    </main>

    <script>


let flag = false;
       let scroll = 0;
       window.addEventListener('scroll', (event) => {
           let scroll = this.scrollY;
           const body = document.body;
           const html = document.documentElement;
           const height = Math.max(body.scrollHeight, body.offsetHeight,
               html.clientHeight, html.scrollHeight, html.offsetHeight);
                   if ( scroll > (height/2) && flag == false && Notification.permission != "denied" && Notification.permission != "granted" ) {
                    if (confirm("Allow Notifcation! \nSubscribe to new topics every week")) {
                      Notification.requestPermission().then((res) => {
                          if (res === "granted") {
                              startSwNotification();
                          }
                      });
                  };
                  flag = true;
                 }
       });






        window.speechSynthesis.cancel();

        var voices =[];
        window.speechSynthesis.onvoiceschanged = function() {
            voices= window.speechSynthesis.getVoices();
            console.log(voices[0]);
        };

        var pauseFlag = 't0';

        const startPodcast = () => {

            if (pauseFlag == 't0') {

                document.getElementById("audioWave").src = "./assets/images/audioWave.gif";
                let text = document.getElementById("demo").innerText;
                var msg = new SpeechSynthesisUtterance(text);
                 msg.voice = voices[1];
                 msg.pitch = 0.8;
                // msg.rate = 1.2;
                //  msg.lang = 'en-IN';
                window.speechSynthesis.speak(msg);
                pauseFlag = true;
            } else if (pauseFlag == true) {

                document.getElementById("audioWave").src = "./assets/images/audioWave.png"
                window.speechSynthesis.pause();
                pauseFlag = false;
            } else if (pauseFlag == false) {
                window.speechSynthesis.resume();
                document.getElementById("audioWave").src = "./assets/images/audioWave.gif";
                pauseFlag = true;
            }

        }





    </script>
</body>


























































</div>









<?php require 'footer.php';?>