<?php
if ($_FILES['file']['name']) {
   if (!$_FILES['file']['error']) {
      $name = md5(rand(100, 200));
      $text = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
      $filename = $name . '.' . $text;
      $destination = '../gambar/' . $filename;
      $location = $_FILES["file"]["tmp_name"];
      move_uploaded_file($location, $destination);
      echo '../gambar/' . $filename;
   } else {
      echo 'Ooops!  Your upload triggered the following error:  ' . $_FILES['file']['error'];
   }
}
?>