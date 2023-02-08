<!DOCTYPE html>
<html lang="en">
<head>

    <?php require './header_files.php'; ?>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teafweb Product Sign in</title>

    <meta name="Description" CONTENT="Teafweb is a web developement and design services based in pune, teafweb offers various service for business like website development, web tools, mobile app etc.">
	<meta name="keywords" content="teafweb, web, teaf,developement,design, sign in" />
    <link rel="icon" href="/res/logo_24x24.png" sizes="24x24">
    <meta property="og:site_name" content="Teafweb- Web developement and design services">
    <meta property="og:title" content="Teafweb- Web developement and design services" />
    <meta property="og:description" content="Teafweb is a web developement and design services based in pune, teafweb offers various service for business like website development, web tools, mobile app etc." />

    <meta property="og:image" itemprop="image" content="res/logo.svg">
    <meta name="p:domain_verify" content="00b0f39de5f2c576e7877c3b6581890f"/>


</head>
<body>

<main>
<?php require 'header.php';?>
<br><br>
<br><br>
    <section class="container">
        <div class="flex2" id="mySignin">
            <div>
                <form id="mySignFormP1"  name="signin" onsubmit="event.preventDefault();signinFormPrevent('mySignFormP1')" class="form1 gray-container ">
                    <input id="mybname" type="text" class="input" placeholder="Your Business Name*" required minlength="4" maxlength="25" >
                    <input id="mybwebsite" type="url" class="input" placeholder="Your Website*" required  minlength="6" maxlength="50">
                    <select name="Type of Business" id="mybtype" class="select" required>
                        <option>Type of Business</option>
                        <option value="Travel">Travel</option>
                        <option value="Edu">Education</option>
                        <option value="Media">Media</option>
                        <option value="logistics">Logistics</option>
                        <option value="helathcare">Healthcare</option>
                        <option value="finance">Finance</option>
                        <option value="Other">Other</option>
                    </select>
                    <br>
                    <button class="btn2">Next</button>
                </form>
                <form id="mySignFormP2" name="signin" onsubmit="event.preventDefault();signinFormPrevent('mySignFormP2')" class="form1 gray-container hide">
                   <span class="symbol-default" onclick="reload()">&larr;</span>
                    <input id="myemail" type="email" class="input" placeholder="Your Email*" required pattern="[a-zA-Z0-9@.]+" minlength="6" maxlength="20">
                    <input id="myname" type="text" class="input" placeholder="Your Full Name*" required pattern="[a-zA-Z ]+" minlength="3" maxlength="20">
                    <input id="mygst" type="text" class="input" placeholder="GST/Tax No" pattern="[a-zA-Z0-9]+">

                    <br>
                    <button class="btn2">Confirm</button>
                </form>
            </div>
            <div>
                <img src="./res/expert.png" class="thumbanail_13 mob-hide" alt="youe website expert">
            </div>
        </div>
        <div id="myThanks" class="hide">
            <h3 class="h2">Thank you for your purchase. </h3>
            <h3 class="h4">For verification and service, our representative will contact you via your registered email address. </h3>
            <br>
            <p class="p">If you have any questions about this product, please email  <span class="theme"> info@teafweb.com.</span></p>
        </div>
    </section>

</main>


<?php require 'footer.php'; ?>

<script>
    const signinFormPrevent = (param)=>{
        let formDom = document.getElementById(param);
           if( param == 'mySignFormP1'){
            formDom.classList.add("hide");
            document.getElementById('mySignFormP2').classList.remove("hide");
           }
           if(param == 'mySignFormP2'){
             const formData = new FormData();
            formData.append('bname', document.getElementById("mybname").value);
            formData.append('btype', document.getElementById("mybtype").value);
            formData.append('bwebsite', document.getElementById("mybwebsite").value);
            formData.append('email', document.getElementById("myemail").value);
            formData.append('fname', document.getElementById("myname").value);
            formData.append('gst', document.getElementById("mygst").value);
            fetch('./forms/signinForm.php',{
                body: formData,
                method:"post"
            }).then( (res)=>{
                return res.text();
            }).then((body)=>{
                console.log(body);
                document.getElementById("myThanks").classList.remove('hide')
                document.getElementById("mySignin").classList.add('hide')
            })
           }

    }
</script>
</body>
</html>