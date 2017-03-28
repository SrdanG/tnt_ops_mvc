<!DOCTYPE html>
<?php require 'templates/headerTmpl.php'; ?>

   
            <form action="model/upload_script.php" method="post" enctype="multipart/form-data">
                Izberi sliko za upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>

  <?php require 'templates/footerTmpl.php'; ?>
