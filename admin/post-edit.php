<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../public/style/style.css">
  <script src="https://cdn.tiny.cloud/1/dgmpifup7k48btsx2hysxoa68rikq82b6i6uphawyufz3omt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

     <?php
          include("config/config.php");
          $post_id = $_GET['post_id'];
          $result = mysqli_query($conn, "SELECT * FROM posts WHERE post_id = $post_id");
          $row = mysqli_fetch_assoc($result);
     ?>
     <form action="post-update.php" method="POST" enctype="multipart/form-data" class="m-4">
          <label for="header" class="text-gray-700 mr-3">
               Header
          </label>
          <input type="text" class=" rounded-xl border border-gray-300 py-2 px-4 bg-gray-200 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-pink-600 focus:border-transparent mb-4 mr-16" name="header" id="header" value="<?php echo $row['header'] ?>" placeholder="POST HEADING"/>

          <label for="cover" class="text-gray-700 mr-3">
               Update cover
          </label>
          <input type="file" name="cover" id="cover">

          <label for="tag">Update Tag</label>
          <select id="tag" name="tag" class="focus:ring-pink-500 py-2 px-4 border border-gray-300 bo focus:border-pink-500 h-full pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-xl">
                    <?php
                         $tags = mysqli_query($conn, "SELECT tag_id, tag_name FROM tags");
                         while($tag = mysqli_fetch_assoc($tags)):
                    ?>
                    <option value="<?php echo $tag['tag_id'] ?>" 
                    <?php if($tag['tag_id'] == $row['tag_id']) echo "selected" ?> >
                         <?php echo $tag['tag_name'] ?>
                    </option>
                    <?php endwhile; ?>
          </select>
          <textarea name="code" id="code" >
               <?php echo $row['code'] ?>
          </textarea>
          <button type="submit" class="absolute right-10 mt-3 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-700 rounded-md hover:bg-pink-600 focus:outline-none focus:bg-pink-600">Update post</button>
     </form>
     <script>
     tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
     });
     </script>
</body>
</html>