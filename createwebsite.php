<!DOCTYPE html>

<html lang="en">

<head>

    <?php require './header_files.php'; ?>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create your website</title>

    <meta name="Description" CONTENT="create and check your domain name for your business name though teafweb platform">
    <meta name="keywords" content="create website, domain, logo design,domain name, business name" />
    <link rel="icon" href="/res/logo_24x24.png" sizes="24x24">
    <meta property="og:site_name" content="Create your website">
    <meta property="og:title" content="Create your website" />
    <meta property="og:description"
        content="create and check your domain name for your business name though teafweb platform" />

    <meta property="og:image" itemprop="image" content="res/logo.svg">
    <meta name="p:domain_verify" content="00b0f39de5f2c576e7877c3b6581890f" />


</head>

<body>
    <main>
        <?php require 'header.php';?>
        <section class="container">
            <div class="flex2" id="mySignin">
                <div>
                <h3 class="sub-title h5 m1">Begining of more potent version of your business.</h3>
                    <form id="mySignFormP2" name="signin"
                        onsubmit="event.preventDefault();signinFormPrevent('mySignFormP2')"
                        class="form1 gray-container">
                        <input id="myemail" type="email" name="email" class="input" placeholder="Your Email*" required
                            pattern="[a-zA-Z0-9@.]+" minlength="6" maxlength="20">
                        <input id="myname" type="text" name="fname" class="input" placeholder="Your Full Name*" required
                            pattern="[a-zA-Z ]+" minlength="3" maxlength="20">
                        <input id="mygst" name="gst" type="text"  class="input" placeholder="GST/Tax No" pattern="[a-zA-Z0-9]+">

                        <br>
                        <button class="btn2">Send me a business proposal</button>
                    </form>

                </div>
                <div>

                    <img src="./res/yourBone.png" class="thumbanail_13 mob-hide" alt="youe website expert">
                </div>
            </div>
            <div id="myThanks" class="hide">
                <h3 class="h4">For verification and service, our representative will contact you via your registered
                    email address. </h3>
                <h3 class="h2">Thank you for. </h3>
            </div>


    </main>


    <?php require 'footer.php'?>

</body>

<script>
    const signinFormPrevent = (param)=>{

            const form = document.getElementById("mySignFormP2");

        const formData = new FormData(form);
        fetch("./forms/websiteRequest.php",
        {
            body: formData,
            method: "post"
        }).then((res)=>{
            return res.json();
        }).then((data)=>{
            if(data== 'success'){
                alert("Thank you, We will connect with you soon!");
                location.href= "https://teafweb.com";
            }
        })
    };

 /*   const check = () => {
        let domain = document.getElementById("myDname").value

        const formData = new FormData();
        formData.append('domain', document.getElementById("myDname").value);
        fetch('./forms/domainCheck.php', {
            body: formData,
            method: "post"
        }).then((res) => {
            return res.json();
        }).then((data) => {
           // console.log("price: ₹" + price);
            if (data.price >0) {
                let price = (data.price / 1000000) * 85;
                let formDom = document.getElementById('mySignFormP1');
                let msg = document.getElementById('msg');
                msg.innerHTML = `${domain} is available! <br> Approx Value: ₹${price}`
                formDom.classList.add("hide");
                document.getElementById('mySignFormP2').classList.remove("hide");
            } else {
                let alert = document.getElementById('alert');
                alert.innerText = `${domain} is not avaialble, try another unique name.`
            }



            /* data.forEach((val)=>{
               const pTag = document.createElement("p");
               pTag.innerText = val.domain;
               document.body.appendChild(pTag);
              })

        })
    };*/


</script>

</html>