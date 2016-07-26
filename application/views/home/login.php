<form class="form-horizontal" method="post" action="<?=base_url()?>home/control">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Login</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="login" placeholder="Email" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

