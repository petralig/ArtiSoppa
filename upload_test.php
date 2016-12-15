    <?php
        include("includes/iheader_loggedin.php");
    ?>
    <main class="main_upload">

            <form action="image_upload/upload.php" method="post" enctype="multipart/form-data">
                <p>Select image to upload:</p>
                <input id="choosefile_button" type="file" name="fileToUpload" id="fileToUpload" value="choose file"> <!-- value ei toimi -->
                <br />
                <!--<p class="note">note: filename will be used as the title of the content!</p>-->
                <br /><br />
                <input id="uploadimage_button" type="submit" value="upload image" name="submit">
            </form>
            <br /><br />
        <?php
            //echo $_SESSION['uid'];
            include("includes/footer.php");
        ?>
        
    </main>