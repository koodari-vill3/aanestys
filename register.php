<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<form>
    <fieldset>
      <legend>Register</legend>
      <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">User name</label>
        <div class="col-sm-10">
          <input name="username" type="text" readonly="" class="form-control-plaintext" placeholder="user name">
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="password">
      </div>
      <div class="form-group">
        <label for="password">Confirm Password</label>
        <input name="confirmpassword" type="password" class="form-control"  placeholder="password again">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>  
    </fieldset>
  </form>

  <?php include_once 'layout/bottom.inc.php'; ?>
