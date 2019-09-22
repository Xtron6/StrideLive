<?php

// connect to the database
$connect = mysqli_connect('sql311.byetcluster.com', 'epiz_24028498', 'GYTZc2YRvHo25I', 'epiz_24028498_stridelive');
if(isset($_POST["insert"]))
 {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $query = "INSERT INTO user(name) VALUES ('$file')";
      if(mysqli_query($connect, $query))
      {
           echo '<script>alert("Image Inserted into Database")</script>';
      }
 }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
      $('#insert').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>
