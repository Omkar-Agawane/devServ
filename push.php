<!doctype html>
<html>

<head>

</head>

<body>
    <section class="container">
        <form action="" onsubmit="sendPush(e)">
            <input type="text" id="endpoint" placeholder="ypour end point">
            <input type="text" id="val" placeholder="ypour end point">
            <input type="submit">
        </form>
    </section>

</body>

<script>
  const  sendPush = (e) =>{
    e.preventDefault();
    let endpoint = document.getElementById("endpoint").value;
    let val = document.getElementById("val").value;
    fetch(endpoint,
    {
        method:"POST",
        body: val,
        Headers:{
            "Content-Type": "application/json"
        }
    }).then(res=>{ if(res.ok){ console.log("Sdf")}})
    }
</script>

</html>