<?php session_start(); ?>
<?php
if (!isset($_GET['id'])){
    header('Location: index.php');
}

$id = intval($_GET['id']);
?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">

    <h1></h1>

    <div id="msg" class="alert alert-dismissible alert-warning d-none">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <h4 class="alert-heading"></h4>
      <p class="mb-0"></a></p>
    </div>

    <ul id="optionsUl" class="list-group">
      
    </ul>

</div>

<script src="js/common.js"></script>
<script src="js/vote.js"></script>


<?php include_once 'layout/bottom.inc.php'; ?>