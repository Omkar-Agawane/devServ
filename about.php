<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './header_files.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | Teafweb.com</title>

    <meta name="Description" CONTENT="Teafweb is a company in Pune that helps businesses with making websites, 
    tools for the web, mobile apps, and other services related to web design and development.">
    <meta name="keywords" content="teafweb, web, teaf,developement,design, website, pune" />
    <link rel="icon" href="/res/logo_24x24.png" sizes="24x24">
    <meta property="og:site_name" content="Teafweb- Web developement and design services">
    <meta property="og:title" content="Teafweb- Web developement and design services" />
    <meta property="og:description"
        content="Teafweb is a web developement and design services based in pune, teafweb offers various service for business like website development, web tools, mobile app etc." />

    <meta property="og:image" itemprop="image" content="res/logo.svg">
    <meta name="p:domain_verify" content="00b0f39de5f2c576e7877c3b6581890f" />

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
    <header>
        <?php require 'header.php';?>
    </header>
    <main class="about">
        <section class="mob-hide container-background">
        <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
                        <source src="res/background_wave.mp4" type="video/mp4">
                    </video>

        <div class="cover-content">
                    <div class="container-middle">
                        <h1 class="h1">Welcome to our <span class="special">exceptional</span> web development firm.</h1>
                    
                        <div class="container">
                            <h4 class="h2">Our Expertise</h4>
                            <hr class="">
                            <div class="flex1">
                                <div>
                                    <ol>
                                        <li class="h2 left_align">Website design and development</li>
                                        <li class="h2 left_align">Website maintenance and updates</li>
                                        <li class="h2 left_align">Ui/Ux</li>
                                        <li class="h2 left_align">Analytics and reporting</li>
                                    </ol>
                                </div>
                                <div>
                                    <li class="h2 left_align">Graphic design & branding</li>
                                    <li class="h2 left_align">Product photography and mockups</li>
                                    <li class="h2 left_align">Logo and icon design</li>
                                    <li class="h2 left_align">Package design</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
        </section>
       
        <section class="about" >
            <div class="flex-container container half">
                <div>
                    <img src="./res/MrTeafweb.png" alt="">
                </div>
                <div>
                <div class="container">
                        
                        </div>
                    <h4 class="h4">Story of Teafweb</h4>
                    <p class="p grayscale">The story of Teafweb is an intriguing evolution. Initially conceptualized as an
                        arm in the manufacturing sector, circumstances, notably the impact of the COVID-19 pandemic, led to
                        a transformation, pivoting Teafweb into a prominent software company.</p>
                    <p class="p grayscale">Although the term "Teafweb" lacks a formal definition in standard dictionaries,
                        it carries profound significance within our organization. Initially, it was conceived as a fusion of
                        "Tech-Leaf," denoted as "Teaf," and subsequently, with its transition into web technologies, it
                        evolved into "Teafweb."</p>
                    <p class="p grayscale">Right from our inception, we deliberately chose not to engage in freelance
                        projects. Instead, our focus has been on partnering with small visionary businesses, guiding them
                        through their journeys. While we encountered a few challenges along the way, we learned and adapted
                        from these experiences. Notably, our commitment to client relationships has been steadfast — we've
                        managed to retain all of our clients, with a track record of zero client losses. Once we commit to a
                        client, we stand by them, even in the face of financial difficulties they might encounter.</p>
                    <p class="p grayscale">Looking ahead, we are dedicated to continuing our journey for many more years,
                        contributing to India's burgeoning vision and growth.</p>

                </div>
            </div>
        </section>
       
        <section class="container gray-container mob-hide">
            <div class="flex2">
                <div>
                    <h4 class="h4">Let's Connect, and explore digital</h4>
                </div>
                <div><a href="./#call_visit"><button class="btn2">Connect →</button></div>
                <div></div>
            </div>
        </section>
    </main>

    <?php require 'footer.php'?>

</body>

</html>