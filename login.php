<?php include "components/header.php"; ?>
  <main>
    <section>
      <div class="container login-form">
        <form id="login" action="" method="post">
          <div>
            <h2 class="alt-title">Login</h2>
            <p>Use your GaPDS credentials to log in or <a target="_blank" href="https://gapds.decal.ga.gov/Registration">create an account</a></p>
          </div>
          <div class="form-group">
            <label for="login-username">Username</label>
            <input class="form-control" id="login-username" type="text" name="loginUsername" value="" placeholder="Enter Username">
          </div>

          <div class="form-group">
            <label for="login-password">Password</label>
            <input class="form-control" id="login-password" type="password" name="loginPassword" value="" placeholder="Enter Password">
          </div>

          <small><a href="https://gapds.decal.ga.gov/ForgotLogin" target="_blank">Forgot login information?</a></small>

          <div class="form-group">
            <input class="form-control" id="login-prek" type="checkbox" name="loginPrekDirectors" value="">
            <label for="login-prek">Pre-K Directors</label>
            <span>(Check to login with PANDA credentials)</span>
          </div>

          <div class="button-group">
            <button type="submit" name="loginSubmit">Login</button>
            <a class="button-alt" href="./home.php">Cancel</a>
          </div>
        </form>
      </div>
    </section>
  </main>
<?php include "components/footer.php"; ?>
