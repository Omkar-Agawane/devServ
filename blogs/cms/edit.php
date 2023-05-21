<?php include 'header.php'?>

<?php $article_id = $_GET['id'];?>
<?php include './fetch/editMain.php';?>
<div class="container-2">
    <div>
        <h3><?php echo $title; ?></h3>
        <hr class="hr">
    </div>
    <br>
    <img id="thumbnail" src="../upload/<?php echo $image['post'][0];?>" alt="<?php echo $image['post'][0];?>"
        class="thumbnail">

    <form method="post" action="./editMain.php?id=<?php echo $article_id;?>" enctype="multipart/form-data">

        <section id="uploadImage">
            <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input">
            <br>
            <input type="text" name="thumbImage" id="" class="custom-file-input hide" onchange=""
                value="<?php echo $image['post'][0];?>">
        </section>

        <p class="input-lable">Basic Details</p>
        <section class="inner-container">
            <p class="input-lable">Title</p>
            <input class="#" name="header" id="header" placeholder="Your Title is Empty" value="<?php echo $title?>">
            <div class="grid-2">
                <div>
                    <p class="input-lable">Category</p>
                    <select class="select" id="category" name="cat1">
                        <option value="<?php echo $cat1['post'][0];?>"><?php echo $cat1['post'][0];?></option>
                        <?php foreach($cat_all as $item){ ?>
                        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <p class="input-lable">Author name</p>
                    <input class="#" name="author" id="header" placeholder="Author"
                        Value="<?php echo $author['post'][0];?> ">
                </div>


            </div>
            <p class="input-lable">Blog preface</p>
            <input class="#" name="expert" id="header" placeholder="Description"
                Value="<?php echo $expert['post'][0];?> ">
        </section>

        <p class="input-lable">Blog content</p>
        <textarea name="body" id="content"> </textarea>
        <br><br>
        <button class="btnR" type="submit" name="submit">Publish</button>
    </form>
</div>
<span style="display:none" id="cont"><?php echo $article['post'][0];?></span>





<script>
    CKEDITOR.replace('body');
</script>
<script type="text/javascript">
    function teaf_open() {
        document.getElementById("sidebar").style.display = "block";

    }

    function teaf_close() {
        document.getElementById("sidebar").style.display = "none";

    }
    document.getElementById('fileToUpload').onchange = function () {
        fileName()
    };

    function fileName() {
        var x = document.getElementById('fileToUpload').value;
        document.getElementById('uploadLable').innerHTML = x;

    }

    document.getElementById("content").value = document.getElementById("cont").innerHTML;



    /*image premview*/
    let inputFile = document.querySelector('#fileToUpload');
    let preview = document.querySelector('#thumbnail')

    inputFile.addEventListener('change', () => {
        let file = inputFile.files[0];

        let reader = new FileReader();
        reader.addEventListener("load", () => {
            // convert image file to base64 string
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }

    })
    /*image premview*/
</script>