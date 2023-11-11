<!doctype html>
<html>

<head>

</head>

<body>
    <section class="container">
        <form action="" onsubmit="sendPush(event)">
            <input type="text" id="endpoint" placeholder="ypour end point">
            <input type="submit">
        </form>
    </section>

</body>

<script>
  const  sendPush = (e) =>{
    e.preventDefault();
    let endpoint = document.getElementById("endpoint").value;
    fetch(endpoint,
    {
        method:"POST",
        body: 'endpoint',
        Headers:{
            "Content-Type": "application/json"
        }
    }).then(res=>{ if(res.ok){ console.log("Sdf")}})
    }
</script>

</html>