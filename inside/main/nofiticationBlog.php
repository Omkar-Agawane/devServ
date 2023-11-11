<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php require_once 'header.php'; ?>
  <main>
    <section class="container-custom">
    <h5>Push notification</h5>
    <small>tguide.live subsriber</small>
      <div class="card my-3"  >
      <div class="card-body">
      <form  class="p-1" id="form" onsubmit="event.preventDefault();pushData();">
      <form id="mySignFormP2" name="signin" onsubmit="event.preventDefault();signinFormPrevent('mySignFormP2')" class="form1 gray-container hide">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" aria-describedby="emailHelp" id="title">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Preface</label>
          <input type="text" class="form-control" name="body" id="preface">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Thumbnail link</label>
          <input type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <button type="submit" class="btn btn-primary" id="push">Send</button>
      </form>
      </div>
      </div>
    </section>
  </main>
<?php  require 'footer.php'; ?>


</body>

<script>
 const  pushData = ()=>{
  let postData = {
        "title": "new blog",
        "body": "data",
        "image": "sdf"
    }
  postData.title =  document.querySelector("#title").value;
  postData.body =  document.querySelector("#preface").value;
  postData.image =  document.querySelector("#thumb").value;

  postData = JSON.stringify(postData);
    //console.log(formData);

    fetch("https://tguide-pwa.herokuapp.com/ntfy",{
    method:"POST",
    body:postData,
    headers:{
      'Content-Type':'application/json'
    }
  }).then((res)=>{
    return res.text();
  }).then((data)=>{
   alert(data);
  })

  }

</script>


</html>