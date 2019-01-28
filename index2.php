<!doctype html>
<html>
<head>
  <?php
  include("config.php");
  if(isset($_POST['tapi_upload'])){

   $name = $_POST['name'];
   $target_dir = "videos/";
   $target_file = $target_dir . uniqid(date(), true) . '.mp4';

   $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

   if( in_array($videoFileType,$extensions_arr) ){

    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){

      $reference_video = str_replace(' ', '_', strtolower($name));
      $url_video = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$target_file";
      $query = "INSERT INTO video_training(nama_video,referensi_video,url_video) VALUES('".$name."','".$reference_video."','".$url_video."')";

      mysqli_query($con,$query);
      echo "Upload sukes.";
    }

  }else{
    echo "Format file tidak diketarhui";
  }

} 
?>
</head>
<body>
  <form method="post" action="" enctype='multipart/form-data'>
    Nama : <input type='text' name='name' />
    <br><br>
    <input type='file' name='file' />
    <input type='submit' value='Upload' name='tapi_upload'>
  </form>

</body>
</html>
