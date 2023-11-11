<?php include 'header.php'?>
<?php include 'fetch/deleteFetch.php'?>
    <div class="container-2" >
    <div>
        <h3>Dashboard</h3>
        <hr class="hr">
    </div>
    <br>
    <div class="grid-2">
        <div class="">
        <div class="statCard">
            <h2 class="warning "><?php echo $len; ?> </h2>
            <p class="input-lable">Total Blogs</p>
        </div>
        <br>
        <div class="statCard">
            <h2 class="warning "><?php echo $subs_len; ?> </h2>
            <p class="input-lable">Total Subscribers</p>
        </div>


        </div>

    <div class="delete">
        <h3>All Blogs</h3>
        <hr class="hr1">
        <br>
            <?php while($len>0){ ?>
                    <h4> <?php echo $title[$len-1]; ?></h4>
                    <a href="./deleteData.php?id=<?php echo $id[$len-1];?>"><p style="display:inline-block">Delete</p></a>
                    <a href="./edit.php?id=<?php echo $id[$len-1];?>"><p style="display:inline-block">Edit</p></a>

         <hr class="hr">
          <?php  $len--; }?>
        </div>


    </div>





              </div>

                 <script type="text/javascript">

            function teaf_open(){
                document.getElementById("sidebar").style.display="block";

            }
             function teaf_close(){
                document.getElementById("sidebar").style.display="none";

            }



        </script>
