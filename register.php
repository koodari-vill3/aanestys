<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">

<form name="register">
    <fieldset>
      <legend>Register</legend>
      <div class="form-group">
        <label for="username">Username</label>
        <input name="username" type="text" class="form-control" placeholder="user name">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="password">
      </div>
      <div class="form-group">
        <label for="password">Confirm Password</label>
        <input name="confirmpassword" type="password" class="form-control" placeholder="password again">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>  
    </fieldset>
  </form>

</div>

<script src="js/register.js"></script>

<?php include_once 'layout/bottom.inc.php'; ?>
