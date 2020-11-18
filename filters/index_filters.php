<?php include '../config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include '../config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} Egads! Error • Picsy";
  $keywords = "eror, 404, document not found, webpage not found, Picsy, Share and capture world's moments";
  $desc = "There's been an error • Picsy";
?>

<?php
  if ($universal->isLoggedIn()) {
    include '../includes/header.php';
    include '../needs/heading.php';
    include '../needs/nav.php';
    include_once '../needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include '../index_include/index_header.php';
  }
?>
<body>
  <script src="https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/clmtrackr@1.1.2/build/clmtrackr.min.js"></script>
  <script src="main_filters.js"></script>
  <button onclick="capture()">Capture</button>
</body>
<script>
    function capture() {
        var canvas = document.querySelector('canvas');     
        var image = canvas.toDataURL();  
        var tmpLink = document.createElement( 'a' );  
        tmpLink.download = 'image.png';
        tmpLink.href = image;
        document.body.appendChild( tmpLink );  
        tmpLink.click();  
        document.body.removeChild( tmpLink ); 
    }
</script>
<style>
  canvas {
    display: inline;
    width: 100%;
    text-align:center;
  }
</style>

<?php
if ($universal->isLoggedIn()) {
  include '../includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include '../index_include/index_footer.php';
}
?>