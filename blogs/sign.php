<?php require 'config.php';?>
<style>
<?php include 'project.css'; ?>
</style>
<?php include 'header.php'; ?>

<div class="container">
    <br>
    <p class="sub-title">Sign In</p>
    <hr class="subhr"> 
    <div class="container-sign">
        <h2 style="color:red;display:none" id="lol">Lol! noob...</h2>
        <input class="signin" placeholder="Login Id" id="id">
        <input type="password"class="signin" placeholder="Passw*rd" id="pass">
        <button id="btn">Sign In</button>
    </div>
    
    
</div>

<script>
    let x=document.querySelector('#btn');
    let login =()=>{
        if(document.querySelector('#id').value =="admin" && document.querySelector('#pass').value== "Ritu2010")
            { alert("You are in !");
                window.location.href="./cms/new.php"
            }
       else{
           document.querySelector("#lol").style.display='block';
       }
    }
   
    x.addEventListener('click', login);
    

</script>
