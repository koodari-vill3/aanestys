<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">

<form>
    <fieldset>
      <legend>Login</legend>
      <div class="form-group">
        <label for="username">Username</label>
        <input name="username" type="text" class="form-control" placeholder="user name">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="password">
      </div>

      <button type="submit" class="btn btn-primary">Login</button>  
    </fieldset>
  </form>

</div>

  <?php include_once 'layout/bottom.inc.php'; ?>
