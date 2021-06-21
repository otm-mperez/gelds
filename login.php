<?php include "components/header.php"; ?>
  <main>
    <div class="container">
      <h2 class="alt-title">Login</h2>
      <p>Use your GaPDS credentials to log in or <a target="_blank" href="//gapds.decal.ga.gov">create an account</a></p>

      <form id="login" action="" method="post">
        <div class="form-control">
          <label for="login-username">Username</label>
          <input id="login-username" type="text" name="loginUsername" value="" placeholder="Enter Username">
        </div>

        <div class="form-control">
          <label for="login-password">Password</label>
          <input id="login-password" type="password" name="loginPassword" value="" placeholder="Enter Password">
        </div>

        <small><a href="/forgot">Forgot Password?</a></small>

        <div class="form-control">
          <input id="login-panda-check" type="checkbox" name="loginPANDA" value="">
          <label for="login-panda-check">Login with PANDA credentials</label>
        </div>

        <div class="form-control">
          <input id="login-prek" type="checkbox" name="loginPrekDirectors" value="">
          <label for="login-prek">Pre-K Directors</label>
        </div>

        <div class="button-group">
          <button type="submit" name="loginSubmit">Login</button>
          <a class="button-alt" href="/">Cancel</a>
        </div>
      </form>
    </div>
  </main>
<?php include "components/footer.php"; ?>
