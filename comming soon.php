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


</head>

<body>
    <main>
        <?php require 'header.php';?>
        <section class="container">
        <div class="flex2" id="mySignin">
                <div>
                <h2 class="h6">Comming Soon.</h3>
                  
                </div>
                <div>
                    <img src="./res/career.gif" class="thumbanail_13 mob-hide" alt="your website expert">
                </div>
            </div>
            <hr>
            </section>
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
            console.log(res);
        }).then((data)=>{
            console.log(data);
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