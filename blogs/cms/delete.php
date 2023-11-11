<?php include 'header.php'?>
<?php include 'fetch/deleteFetch.php'?>
         
  
    <div class="delete-container" >
           
     <div class="delete">
            <?php while($len>0){ ?>
                    <h4> <?php echo $title[$len-1]; ?></h4> 
                    <a href="./deleteData.php?id=<?php echo $id[$len-1];?>"><p style="display:inline-block">Delete</p></a>
                    <a href="./edit.php?id=<?php echo $id[$len-1];?>"><p style="display:inline-block">Edit</p></a>
                    
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
                    
                    
                     
        </script>
                     

