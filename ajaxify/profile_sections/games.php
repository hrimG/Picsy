<?php include '../../config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include '../../config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $tags = new tags;
  $avatar = new Avatar;
  $follow = new follow_system;
  $general = new general;
  $post = new post;
  $mutual = new mutual;
  $recommend = new recommend;
  $groups = new group;
  $game = 0;
?>

<?php
  $get_id = $universal->getIdFromGet($_GET['u']);
  if (isset($_SESSION['id'])) {
    $session_id = $_SESSION['id'];
  }
?>

<div class="senapati pro_senapati">
  <div class="srajkumar user_grps_srajkumar">

    <div class="c_g_div grp_c_grp inst">
      <span>Connect 4</span>
      <a href="/ParekaFox/Instagram-clone/games/connect4/index.html" class="sec_btn c_g">Play now</a>
    </div>

    <div class="c_g_div grp_c_grp inst">
      <span>Tic-Tac-Toe</span>
      <a href="/ParekaFox/Instagram-clone/games/TicTacToe/index.html" class="sec_btn c_g">Play now</a>
    </div>

    <div class="c_g_div grp_c_grp inst">
      <span>Chain Reaction</span>
      <a href="http://localhost:5000/" class="sec_btn c_g">Play now</a>
    </div>

  </div>

  <div class="prajkumar">

  </div>

</div>

<script type="text/javascript">
  LinkIndicator('games');
</script>
