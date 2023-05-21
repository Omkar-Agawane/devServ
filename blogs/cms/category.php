<?php include 'header.php'?>
<?php include 'fetch/categoryFetch.php'?>

    <div class="container" >
       <br>
       <br>
       <br>
            <form method="post" action="categoryMain.php" enctype="multipart/form-data">
                <input class="#" name="category_name" id="header" placeholder="Category Name"><br> <br>
                <button type="submit" name="submit">Create</button>
            </form>
        <br>
            <div class="delete">
            <?php while($len>0){ ?>
                    <h4 style="display:inline-block"> <?php echo $category_name[$len-1]; ?></h4>
                    <a href="categoryDelete.php?id=<?php echo $id[$len-1];?>"><p style="display:inline-block;margin-left:30px">Delete</p></a>

            <hr class="hr">
            <?php  $len--; }?>


        </div>


        </div>




<script type="text/javascript">
    function teaf_open(){
        document.getElementById("sidebar").style.display="block";
        }
    function teaf_close(){
        document.getElementById("sidebar").style.display="none";
        }
document.getElementById('fileToUpload').onchange=function() {fileName()};
function fileName(){
    var x=document.getElementById('fileToUpload').value;
    document.getElementById('uploadLable').innerHTML=x;
    }
        </script>
