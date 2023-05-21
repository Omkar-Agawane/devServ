<!doctype html>

<head>
    <?php require_once './header_filesInside.php'; ?>
</head>


<body>

<?php include 'headerInside.php'; ?>

<div class="container">
    <br>
    <h1 class="sub-title">Welcome to Teafweb Inside </h1>
    <hr class="subhr"> 
    <div class="container-sign">
      <input id="id" value="Username">
      <input id="pass" value="Password">
      <button onclick="login()">Log in</button>
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

</body>

</html>

