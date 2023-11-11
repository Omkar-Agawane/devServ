<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside:Teafweb administration</title>



    <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
-->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                          <div class="text-center">
                            <img src="res/logo2.png"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">I am Professional!</h4>
                          </div>

                          <form onsubmit="event.preventDefault();auth()" id="form">

                            <p>I can login to your account</p>

                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example11" class="form-control"
                               name="id" placeholder="Username" />
                            </div>

                            <div class="form-outline mb-4">
                              <input type="password" name="pass" id="form2Example22" class="form-control" placeholder="Password"/>
                            </div>

                            <div class="text-center pt-1 mb-5 pb-1">
                              <button class="btn btn-primary  fa-lg gradient-custom-2 w-100" type="submit">Log
                                in</button>
                              <a class="text-muted" href="#!">Forgot password?</a>
                            </div>
                          </form>

                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h4 class="mb-4">We are more than just a company</h4>
                          <p class="small mb-0">
                            Seeking from technology what we are once looked for in political idealogy and religion a more potent version of future!
                            <br>
                            <br>
                             we can take command of surrounding by the use of science and technology.
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <script>
  const auth = ()=>{
  const form=  document.getElementById("form");
    const formData = new FormData(form);
    const random = Math.floor(Math.random()*100);
    const captcha = prompt(`Please enter below this ${random}`);
    if(random == captcha){
      fetch("./server/auth.php", {
      method:"POST",
      body:formData
    }).then((req=>{
      return req.json();
    })).then((data)=>{
    //const userData = JSON.parse(data);
      if(data.auth != "400" ){
        sessionStorage.setItem("username", data.name);
        sessionStorage.setItem("userid", data.email);
        sessionStorage.setItem("surname", data.surname);
        sessionStorage.setItem("rank", data.rank);
        sessionStorage.getItem("username");
        console.log(sessionStorage.getItem("username"));
        window.location.href = "./main/dash.php";
      }
      else{
        alert("wrong creds, try again");
      }
    })
    }
    else{
      alert("Bot verification failed")
    }

  }

</script>


</body>

</html>