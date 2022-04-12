<?php session_start(); ?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="jumbotron">
  <h1 class="display-3">Welcome to VoteApp</h1>
  <?php if (isset($_SESSION['logged_in'])): ?>
      <p>Olet kirjautuneena käyttäjänä <?php echo $_SESSION['username']; ?></p>
  <?php endif; ?>
</div>

<div class="container">

    <div id="msg" class="alert alert-dismissible alert-warning d-none">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <h4 class="alert-heading"></h4>
      <p class="mb-0"></a></p>
    </div>

    <h2>Votes</h2>
    <button class="btn btn-primary" onclick="showPolls('old')">Show old polls</button>
    <button class="btn btn-primary" onclick="showPolls('future')">Show future polls</button>
    <button class="btn btn-primary" onclick="showPolls('current')">Show current polls</button>
    <ul id="votesUl" class="list-group">
    </ul>

</div>



<script src="js/index.js"></script>
<script src="js/common.js"></script>

<?php include_once 'layout/bottom.inc.php'; ?>