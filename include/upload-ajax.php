<?php
include "connect.php";
if(isset($_COOKIE[$cookie_name])){
?>
        <script>
  tinymce.init({
    selector: 'textarea',
    theme: 'modern',
    force_p_newlines : false,
    forced_root_block : false

  });
  </script>  
    <form action="include/upload.php" method="post" enctype="multipart/form-data">
        <label class="username"> Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" required> </label>
        <input type="text" class="username" name="imgAlt" placeholder="img alt" required>
        <input type="text" class="username" name="overskrift" placeholder="overskrift" required>
        <textarea name="articleText" id=""></textarea>
        <label class="username">rating:
            <select name="rating" id="">
                <option value="1">1 stjerne</option>
                <option value="2">2 stjerner</option>
                <option value="3">3 stjerner</option>
                <option value="4">4 stjerner</option>
                <option value="5">5 stjerner</option>
            </select>
        </label>
        <label class="username" for="">kategory:
            <select name="kategori" id="">
                <option value="jakker">jakker</option>
                <option value="bukser">bukser</option>
                <option value="skjorter">skjorter</option>
                <option value="strik">strik</option>
                <option value="t-shirts">t-shirts</option>
                <option value="tasker">tasker</option>
            </select>
        </label>
        <input type="submit" value="upload article" name="submit"> </form>
        <script type="text/javascript">
</script>
    <?php
}else{
    header("location:../index.php");
}
