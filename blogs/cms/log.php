<head>

<style>
    <?php require 'project.css';?>
</style>

</head>

<body>

<div class="container-login">
    <h3 class="sub-title">Sign In</h3>
    <br>
    <form class="" onsubmit="event.preventDefault();  validate();" id="creds">
        <h2 style="color:red;display:none" id="lol">Lol! noob...</h2>
        <input class="" placeholder="Login Id" id="id" name="id">
        <input type="password" class="" placeholder="Passw*rd" id="pass" name="pass">
        <button id="btn" class="right">Sign In</button>
    </form>
</div>

</body>
<script>
    let validate = () => {
       let form = document.querySelector('#creds');
        let formdata = new FormData(form);
        fetch("auth.php", {
            method: 'POST',
            body: formdata
        }).then((res)=>{
            return res.text();
        }).then(data=>{
            if(data != false){
                location.href = "./dash"
            }
            else{
                alert("Wrong details, contact admin")
            }
           // alert("tada :"+ data)
        })


    }

</script>