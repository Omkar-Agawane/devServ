<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './header_files.php'; ?>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Submit your Profile</title>

    <link rel="icon" href="/res/logo_24x24.png" sizes="24x24">
    <meta property="og:site_name" content="Submit your Profile">
    <meta property="og:title" content="Create career profile in teafweb" />
    
    <meta property="og:image" itemprop="image" content="res/logo.svg">

    
    <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>


</head>

<body>
    <main>
        <?php require 'header.php';?>
        <section class="container">
            <div class="flex2" id="mySignin">
                <div>
                <h3 class="h5 m1">It could be the beginning of a more potent version of yourself </h3><br>
                <br>
               

                    <form id="mySignFormP2" name="signin" enctype="multipart/form-data"
                        onsubmit="event.preventDefault();signinFormPrevent('mySignFormP2')"
                        class="form1 gray-container" >
                        <input id="myemail" type="email" name="email" class="input" placeholder="Your Email*" required
                            pattern="[a-zA-Z0-9@_.]+" minlength="6" maxlength="200">
                        <input id="myname" type="text" name="fname" class="input" placeholder="Your Full Name*" required
                            pattern="[a-zA-Z ]+" minlength="3" maxlength="200">
                        <input id="phone" name="phone" type="text"  class="input" placeholder="Your Phone No.*" pattern="[0-9]{10}" minlength="10" maxlength="10">
                        <select name="Qualification" id="edu" class="select" required>
                        <option>Select Qualification*</option>
                        <option value="BE">B.E.</option>
                        <option value="ME">M.E.</option>
                        <option value="BTech">BTech</option>
                        <option value="MTech">MTech</option>
                        <option value="BCS">BCS</option>
                        <option value="MCS">MCS</option>
                        <option value="Mcom">MCom</option>
                        <option value="Bcom">Bcom</option>
                        <option value="Msc">Msc</option>
                        <option value="Bsc">Bsc</option>
                        <option value="Bsc">Under Graduation</option>
                        <option value="Other">Other Graduation</option>
                    </select>
                    <select name="identification" id="identity" class="select" required>
                        <option>Select Document Verification*</option>
                        <option value="Adhar">Adhar card</option>
                        <option value="PAN">PAN</option>
                        <option value="passport">Passport</option>
                        <option value="driving">Driving License</option>
                    </select>
                    <input id="Addr" name="address" type="text"  class="input" placeholder="Your Address*" required>
                   
                    <input id="file" name="file" type="file"  class="input" placeholder="" required>
                    <small>Upload your file (Only pdf file)</small>
                        <br>
                        <button class="btn2">Submit</button>
                    </form>
                </div>
                <div>
                    <img src="./res/career.gif" class="thumbanail_13 mob-hide" alt="your website expert">
                </div>
            </div>
            <div id="myThanks" class="hide">
                <h3 class="h4">For verification, our HR representative will contact you via your registered
                    email address/Phone. </h3>
                <h3 class="h2">Thank you! <br> Check our Linkedin Page for any updates</h3>
                <div class="m1">
                    <script type="IN/FollowCompany" data-id="76340003" data-counter="bottom"></script>
                </div>
            </div>
        </section>
    </main>


    <?php require 'footer.php'?>

</body>

<script>
    const signinFormPrevent = async (param)=>{

            const form = document.getElementById("mySignFormP2");

        const formData = new FormData(form);
        console.log(formData);
       await fetch("./forms/profilesubmit.php",
        {
            body: formData,
            method: "post"
        }).then((res)=>{
            return res.json();
            console.log(res);
        }).then((data)=>{
            console.log(data);
            if(data== '200'){
                document.getElementById("myThanks").classList.remove("hide");
                document.getElementById("mySignin").classList.add("hide");
            }
            else{
                alert(`Database error ${data}`);
            }
        })
    };


</script>

</html>