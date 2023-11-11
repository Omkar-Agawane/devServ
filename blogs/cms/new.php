<?php require 'header.php';?>
<?php require './fetch/newMain.php';?>
<div class="container-2">
  <div>
    <h3>Create new blog article</h3>
    <hr class="hr">
  </div>
  <br>
  <img id="thumbnail" src="../assets/images/preview.png" alt="<?php echo $image['post'][0];?>" class="thumbnail">
  <form method="post" action="./newMain.php" enctype="multipart/form-data">
    <section id="uploadImage">
      <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input" required>
      <br>
    </section>
    <p class="input-lable">Basic Details</p>
    <section class="inner-container">
    <p class="input-lable">Title</p>
      <input class="#" name="header" id="header" placeholder="Title of the article">
      <div class="grid-2">
        <div>
        <p class="input-lable">Category</p>
          <select class="select " id="category" name="cat1">
            <option value="">Select Category</option>
            <?php foreach($cat_all as $item){ ?>
            <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
            <?php } ?>
          </select>
        </div>
        <div>
        <p class="input-lable">Author</p>
          <input class="#" name="author" id="header" placeholder="Author"><br>
        </div>
      </div>
      <p class="input-lable">Preface</p>
      <input class="#" name="expert" id="#" placeholder="Description"><br><br>

    </section>
    <p class="input-lable">Article Body</p>
    <textarea name="body"> </textarea>
    <br> <br>

    <button class="btnR" type="submit" name="submit">Publish</button>
  </form>


</div>




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