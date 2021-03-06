<!DOCTYPE html>

<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="https://cdn.tiny.cloud/1/dgmpifup7k48btsx2hysxoa68rikq82b6i6uphawyufz3omt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="../public/style/style.css">
<script>
tinymce.init({
    selector: '#myTextarea',
    plugins: 'autolink lists media table image code',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table undo redo | image code',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'PTKCE',
    
    // without images_upload_url set, Upload tab won't show up
    images_upload_url: 'upload.php',
    
    // override default upload handler to simulate successful upload
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload.php');
      
        xhr.onload = function() {
            var json;
        
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
        
            json = JSON.parse(xhr.responseText);
        
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
        
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    },
});
</script>
</head>

<body>
<?php include("config/auth.php") ?>

     <form action="post-add.php" method="POST" enctype="multipart/form-data" class="m-4">
          <label for="header" class="text-gray-700 mr-3">
               Header
          </label>
          <input type="text" class=" rounded-xl border border-gray-300 py-2 px-4 bg-gray-200 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-pink-600 focus:border-transparent mb-4 mr-16" name="header" id="header" placeholder="POST HEADING"/>

          <label for="cover" class="text-gray-700 mr-3">
               Choose cover
          </label>
          <input type="file" name="cover" id="cover">

          <label for="tag">Choose Tag</label>
          <select id="tag" name="tag" class="focus:ring-pink-500 py-2 px-4 border border-gray-300 bo focus:border-pink-500 h-full pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-xl">
                    <?php
                         include("config/config.php");
                         $result = mysqli_query($conn, "SELECT tag_id, tag_name FROM tags");
                         while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $row['tag_id'] ?>">
                         <?php echo $row['tag_name'] ?>
                    </option>
                    <?php endwhile; ?>
          </select>
          <textarea name="code" id="myTextarea"></textarea>
          <button type="submit" class="absolute right-10 mt-3 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-700 rounded-md hover:bg-pink-600 focus:outline-none focus:bg-pink-600">Upload post</button>
     </form>

</body>
</html>