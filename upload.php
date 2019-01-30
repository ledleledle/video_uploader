  <?php
  session_start();
  include("config.php");
  if(isset($_POST['tapi_upload'])){

   if($_POST['nama']==''){
    $_SESSION['stats'] = "err";
    header('location:index.php');
  }else{
   $qry = mysqli_query($con,'SELECT * FROM video_training ORDER BY id_video DESC');
   $row = mysqli_fetch_array($qry);
   $plus = $row['id_video']+1;
   $name = $_POST['nama'];
   $format = substr($_FILES['file']['name'], -4);
   $target_dir = "videos/";
   $target_file = $target_dir . $plus . $format;

   $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

   if( in_array($videoFileType,$extensions_arr) ){

    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){

      $reference_video = str_replace(' ', '_', strtolower($name));
      $url_video = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/video_uploader/$target_file";
      $query = "INSERT INTO video_training(nama_video,referensi_video,url_video) VALUES('".$name."','".$reference_video."','".$url_video."')";

      mysqli_query($con,$query);
      $_SESSION['stats'] = "suc";
      header('location:index.php');
    }

  }else{
    $_SESSION['stats'] = "err";
    header('location:index.php');
  }

} 
}
?>