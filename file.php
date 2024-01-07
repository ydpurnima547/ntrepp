

<?php
   if(isset($_POST['submit'])){
        echo $nam=$_POST['name'];
      $file_name = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];

      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         echo $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }else{

        move_uploaded_file($file_tmp,"upload/".$file_name);
      }
        
   }else{
       echo 'error';
   }
?>
<html>
   <body>
      
      <form action = "" method="POST" enctype = "multipart/form-data">
      <input type = "text" name = "name" />
         <input type = "file" name = "image" />
         <input name='submit' type = "submit"/>
      </form>   
   </body>
</html>