<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} About • Picsy";
  $keywords = "Picsy, Share and capture world's moments, share, capture, about";
  $desc = "Picsy lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!-- including files for header of document -->
<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="badshah">

  <div class="about_div inst">
    <img src="<?php echo DIR; ?>/images/needs/glyph-instagram.jpg" alt="">
    <div class="">
      <span>Old images, torn images and many such noises can be removed using Picsy</span>
      <span>Black and White images can be made coloured</span>
      <span>The images can be arranged into different folders (collages too can be made)</span>
      <span>Images can be arranged according to a person using Face Recognition, according to an event, etc. All these will be done by Picsy, with minimal human help</span>
      <span>Images can be shared via Picsy</span>
    </div>
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
