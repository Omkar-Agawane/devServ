<!DOCTYPE html>
<html lang="en">

<head>

    <?php require './header_files.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web affiliates program for passive income : teafweb.com</title>
    <meta name="Description"
        CONTENT="Teafweb is a web developement and design services based in pune, teafweb offers various service for business like website development, web tools, mobile app etc.">
    <meta name="keywords" content="teafweb, web, teaf,developement,design, sign in" />
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

    <main>
        <?php require 'header.php';?>
        <br><br>
        <br><br>
        <section class="container">
            <div class="align-center m1">
                <h1 class=" h4">Web Affiliates Program</h1>
                <h3 class="sub-title h5 m1">Value your reference and earn for your recommendation</h3>
            </div>
            <br>
            <br>

            <div id="jsAlert">

            </div>
            <br>
            <div class="flex2" id="mySignin">
                <div>
                    <form id="mySignFormP1" name="signin"
                        onsubmit="event.preventDefault();signinFormPrevent('mySignFormP1')"
                        class="form1 gray-container ">
                        <select name="payment" id="myptype" class="select" required>
                            <option>I would like to receive payment by</option>
                            <option value="Travel">UPI</option>
                            <option value="Edu">Direct Bank Transfer</option>
                            <option value="Media">Cheque</option>
                        </select>
                        <select name="profession" id="myProfession" class="select" required>
                            <option value="Travel">Student</option>
                            <option value="Edu">Salary Person</option>
                            <option value="Media">Influencer</option>
                            <option value="logistics">Business Owner</option>
                            <option value="helathcare">House Wife</option>
                            <option value="finance">Retired Person</option>
                            <option value="Other">Other</option>
                            <option selected>I'm</option>
                        </select>
                        <br>
                        <button class="btn2" type="submit">Next &rarr;</button>
                    </form>
                    <form id="mySignFormP2" name="signin"
                        onsubmit="event.preventDefault();signinFormPrevent('mySignFormP2')"
                        class="form1 gray-container hide">
                        <span class="symbol-default" onclick="reload()">&larr;</span>
                        <input id="myemail" type="email" class="input" placeholder="Your Email*" required
                            pattern="[a-zA-Z0-9@._]+" minlength="6" maxlength="20">
                        <input id="myname" type="text" class="input" placeholder="Your Full Name*" required
                            pattern="[a-zA-Z ]+" minlength="3" maxlength="20">
                        <input id="myphone" type="text" class="input" placeholder="My Phone Number*" required
                            pattern="[0-9]+" minlength="10" maxlength="12">
                        <br>
                        <button class="btn2">Confirm</button>
                    </form>
                </div>
                <div>
                    <img src="./res/wow_teafweb.webp" class=" mob-hide" alt="teafweb affiliates">
                </div>
            </div>
            <div id="myThanks" class="hide">
                <h3 class="h2">"We appreciate your interest and look forward to assisting you further" </h3>
                <h3 class="h2" id="">Our representative will reach out to you at your registered contact details (email/phone) for verification purposes.</h3>
               <br>
               <hr class="hr1">
               <br>
                <h3 class="h5">Save this for future </h3>
                <h3 class="h4" >Affiliate Id : <span id="myAffiliateInfo" class="theme">Sorry! your email is already register, We could not generate referral id. Please contact us to check your previous ref id.</span></h3>
                <br>
                <hr class="hr1">
                <a href="./refer.php"><button class="btn2">Refer & Earn Commission Now</button></a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p class="p">For any questions or concerns, please feel free to reach out to us at <span class="theme">
                        info@teafweb.com.</span></p>

            </div>
        </section>

    </main>


    <?php require 'footer.php'; ?>

    <script>
       

        const signinFormPrevent = (param) => {
            let formDom = document.getElementById(param);
            if (param == 'mySignFormP1') {

                if (document.getElementById("myProfession").value != "I'm" && document.getElementById("myptype")
                    .value != "I would like to receive payment by") {
                    formDom.classList.add("hide");
                    document.getElementById('mySignFormP2').classList.remove("hide");

                    clearJsAlert();
                } else {
                    jsAlert("Please select all fields");
                }

            }
            if (param == 'mySignFormP2') {
                const formData = new FormData();
                formData.append('payment', document.getElementById("myptype").value);
                formData.append('profession', document.getElementById("myProfession").value);
                formData.append('email', document.getElementById("myemail").value);
                formData.append('fname', document.getElementById("myname").value);
                formData.append('phone', document.getElementById("myphone").value);
                fetch('./forms/affiliateForm.php', {
                    body: formData,
                    method: "post"
                }).then((res) => {
                    return res.text();
                }).then((body) => {
                    console.log("body="+body);
                    document.getElementById("myThanks").classList.remove('hide')
                    document.getElementById("mySignin").classList.add('hide')
                    document.querySelector("#myAffiliateInfo").innerText = generateId(5)+ document.getElementById("myphone").value;
                })
            }

        }
    </script>
</body>

</html>