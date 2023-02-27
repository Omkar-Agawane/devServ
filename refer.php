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
                <h3 class="sub-title h5 m1">Submit your recommendations to us.</h3>
                <h3 class="h2 m1" id="">Affiliate Id is required to get referral benefits in your account.<br>
                If you don't have an Affiliate Id please <a href="./affliates" class="link">Click Here</a>
                </h3>
                    <form id="mySignFormP2" name="signin"
                        onsubmit="event.preventDefault();signinFormPrevent('mySignFormP2')"
                        class="form1 gray-container">
                        <input id="myBusiness" type="text" name="businessname" class="input" placeholder="Reference Business Name*" required
                            pattern="[a-zA-Z0-9@.]+" minlength="6" maxlength="20">
                        <select name="category" id="myType" class="select" required >
                            <option value="" >Business Category</option>
                            <option value="Travel">Travel</option>
                            <option value="Education">Education</option>
                            <option value="Media">Media</option>
                            <option value="logistics">Logistics</option>
                            <option value="helathcare">Healthcare</option>
                            <option value="Food">Food</option>
                            <option value="finance">Finance</option>
                            <option value="it">IT</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="Farming">Farming</option>
                            <option value="Tech">Technology</option>
                            <option value="bioTech">BioTech</option>
                            <option value="science">Science</option>
                            <option value="hospitality">Hospitality</option>
                            <option value="Other">Other</option>
                        </select>
                        <input id="myname" type="text" name="fname" class="input" placeholder="Reference Name*" required
                            pattern="[a-zA-Z ]+" minlength="3" maxlength="20">
                        <input id="myphone"  name="phone" type="text" class="input" placeholder="Reference Phone*" required
                            pattern="[0-9]+" minlength="10" maxlength="12">
                            <input id="myemail" name="email" type="email" class="input" placeholder="Reference Email*" required
                             minlength="6" maxlength="50">
                        <input id="myid" name="myid" type="text"  class="input" placeholder="Affiliate Id*"  required pattern="[A-Z0-9]">
                        <br>
                        <button class="btn2">Submit your referral</button>
                    </form>

                </div>
                <div>

                    <img src="./res/referalImage.jpeg" class="thumbanail_13 mob-hide" alt="referral image">
                </div>
            </div>
            <div id="myThanks" class="hide">
                <h3 class="h4">Thank you!  </h3>
                <h3 class="h2"> Once your referral accepts our services, we will make contact and promptly credit the referral amount to your account.</h3>
            </div>


    </main>


    <?php require 'footer.php'?>

</body>

<script>
   

   const signinFormPrevent = (param)=>{

const form = document.getElementById("mySignFormP2");

const formData = new FormData(form);
fetch("./forms/referForm.php",
{
body: formData,
method: "post"
}).then((res)=>{
return res.json();
}).then((data)=>{
console.log(data);
if(data== '200'){
    document.getElementById("myThanks").classList.remove('hide')
                    document.getElementById("mySignin").classList.add('hide')
}
})
};

</script>

</html>