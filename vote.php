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

    <h1>Mikä on nopein</h1>

    <ul class="list-group">
        <li class="list-group-item"><button class="btn btn-lg btn-primary">Auto</button></li>
        <li class="list-group-item"><button class="btn btn-lg btn-primary">Valo</button></li>
        <li class="list-group-item"><button class="btn btn-lg btn-primary">Polkupyörä</button></li>
    </ul>

</div>

<script src="js/vote.js"></script>
<script src="js/common.js"></script>

<?php include_once 'layout/bottom.inc.php'; ?>