<!DOCTYPE html>
<html lang="en">

<head>

    <?php require './header_files.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital tools and resources for business</title>
    <link rel="icon" href="/res/logo_24x24.png" sizes="24x24">
    <meta name="Description" CONTENT="Teafweb is a web developement and design services based in pune, teafweb offers various service for business like website development, web tools, mobile app etc.">
	<meta name="keywords" content="teafweb, web, teaf,developement,design" />
    <meta property="og:site_name" content="teafweb.com">
    <meta property="og:title" content="Digital tools and resources for business" />
    <meta property="og:description" content="Teafweb is a web developement and design services based in pune, teafweb offers various service for business like website development, web tools, mobile app etc." />
    <meta property="og:image" itemprop="image" content="res/logo.svg">
    <meta name="p:domain_verify" content="00b0f39de5f2c576e7877c3b6581890f"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2KNR76PW6Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-2KNR76PW6Q');
    </script>

    <!-- End Google Tag Manager -->

</head>


<body>
<main>
<?php require 'header.php';?>
<section class="container">
    <div class="">
    <h4 class="h4"> Tools and resources for business use  </h4>
    <br>
    <div style="margin:50px">
</div>
    <div class="gray-container" id="mySiteAudit">
        <div class="flex2">
            <div>
                <h4 class="h4">Website Audit</h4>
                <br>
                <p class="p">Website's analytical and performance report and solution to fix this issues. </p>
                <br>
                <br>
                <br>

                <div class="flex3">
                    <button class="btn-trans">Learn More &rarr;</button>
                    <button class="btn2" onclick="jump('signin')">Free: Get it now</button>
                </div>
                <br>
                <p class="p">Offer for business owners</p>
            </div>
            <div>
                <img src="./res/audit.jpg" alt="" class="small_thumb">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="gray-container" id="createGBusiness">
        <div class="flex2">
            <div>
                <h4 class="h4">Create Google Business Profile</h4>
                <br>
                <p class="p">Turn people who find you on Google Search and Maps into new customers with a free Business Profile for your storefront or service area. Personalize your profile with photos, offers, posts, and more.</p>
                <br>
                <br>
                <br>

                <div class="flex3">
                    <button class="btn-trans">Learn More &rarr;</button>
                    <button class="btn2" onclick="jump('signin')">Get it @ &#8377;100.00/-</button>
                </div>
                <br>
                <p class="p">Offer for business owners</p>
            </div>
            <div>
                <img src="./res/audit.jpg" alt="" class="small_thumb">
            </div>
        </div>
    </div>
        </div>
        <hr>
</section>
</main>
<?php require 'footer.php'?>

</body>


</html>