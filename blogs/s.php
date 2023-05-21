   <?php
          $article_img= $_GET['im'];
          $imgToken= $_GET['token'];
          
          $newImgold = 'https://'.$article_img.'&token='.$imgToken;
         
          $newImg = 'https://firebasestorage.googleapis.com/v0/b/foodyaari-29ec2.appspot.com/o/blogsImages%2F'.$article_img.'&token='.$imgToken;
         
         
          $article_title= $_GET['t'];
          
      ?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foodyaari blogs</title>

        <meta name="Description" CONTENT="<?php echo $article_title; ?>"/>
        
        <meta property="og:title" content="<?php echo $article_title; ?>" />
        <meta property="og:description" content="We are a web-based knowledge-sharing platform for all Food Technologists. The community is growth oriented and we believe that growth comes from learning together and from each other We believe in Quality" />
        <meta property="og:image" itemprop="image" content="<?php echo $newImg;?>"/>
        <meta property="og:type" content="blog" />      
        <meta property='og:url' content='https://foodyaari.co.in'/>


       
      
        

    </head>





<body>
<?php  
require_once 'header.php';
require_once './fetch/homeFetchData.php';
?>
<main> 
<section class="content">
     <div class="container post">
         <h1><?php echo $newImg; ?></h1>
         <h1><?php echo $article_img; ?></h1>
         <img src="<?php echo $newImg;?>">
         
</section>

<?php require_once 'sidebar.php';?>

     
</main>
</body>
       
    
  
     
         
         
         
     </div>
     
     
     
    






 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
         
         
         
         
         
         
         
         
</div>









<?php require 'footer.php';?>