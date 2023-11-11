<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './header_files.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teafweb : About | Web designing|Marketing|Mobile Apps|Web App/tools</title>
</head>
<body>
<main>
<?php require 'header.php';?>

<section class="container">
       <form class="pr-form"> 
            <input class="pr-input" placeholder="<?php echo date('d-m-Y') ?>" name="Name" disabled>
            <input class="pr-input" placeholder="Name" name="Name">
            <input class="pr-input" placeholder="Email" name="email">
            <input class="pr-input" placeholder="Your Issue" name="issue">
            <input type="submit" class="pr-input-btn" value="Raise a ticket"></input>
            </form>
        <hr>

        
</section>


</main>





<?php require 'footer.php'?>
</body>
</html>