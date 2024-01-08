<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

<body>
    <?php require "header.php"?>
    <div class="payment">
    <div class="img1">
    <img src="images/razorpay.webp">
    </div>
    <div class="img2">
<img src="images/img1.jpg">
    </div>
    </div>
<button id="rzp-button1"><p>Pay with Razorpay</p> </button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>
<style>
    button{
        height: 40px;
        background-color: blue;
        color: white;
        margin-top: 50px;
        margin-left: 455px;
        border-radius: 10px;
        margin-bottom: 50px;
        padding: 20px 130px 35px 130px;
        align-items: center;
        border: none;
    }

    button:hover{
        background-color:darkgreen;
        cursor:default;
    }

    button p{
        justify-content: center;
        font-size: 16px;
    }
    .img1 img{
        height: 125px;
        width: 200px;
        margin-left: 550px;
        margin-top: 5px;
        
    }

    .img2 img{
        height: 300px;
        width: 400px;
        margin-left: 450px;
        margin-top: 5px;
        border-radius: 5px;
    }
    
</style>
</body>
</html>

