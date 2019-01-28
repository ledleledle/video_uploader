<!doctype html>
<html>
<head>
  <?php
  include("config.php");

  if(isset($_POST['but_upload'])){
       //$maxsize = 52428800; // 100MB

   $name = $_FILES['file']['name'];
   $target_dir = "videos/";
   $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
   $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
   $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
   if( in_array($videoFileType,$extensions_arr) ){

            // Upload
    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
      $reference_video = str_replace(' ', '_', strtolower($name));
      $query = "INSERT INTO video_training(nama_video,referensi_video,url_video) VALUES('".$name."','".$reference_video."','".$target_file."')";

      mysqli_query($con,$query);
      echo "Upload sukes.";
    } else {
      echo "Upload gagal.";
    }

  }else{
    echo "Format file tidak diketarhui";
  }

} 
?>
</head>
<body>
  <form method="post" action="" enctype='multipart/form-data'>
    <input type='file' name='file' />
    <input type='submit' value='Upload' name='but_upload'>
  </form>

</body>
</html>
