<?php include "components/header.php"; ?>
  <main>
    <div class="container">
      <form id="login" action="" method="post">
        <header class="form-header">
          <h2 class="alt-title">Edit Profile</h2>
          <div class="form-actions">
            <a class="video-tutorial" href="#"><?= file_get_contents("./assets/img/icon-video-tutorial.svg"); ?></a>
            <a class="info" href="#"><?= file_get_contents("./assets/img/icon-info.svg"); ?></a>
          </div>
        </header>
        <section class="non-editable-fields">
          <p>GaPDS # <span class="account-number">00202105</span></p>
          <p><strong>To update this information, please login to your <a target="_blank" href="https://gapds.decal.ga.gov/Registration">GaPDS account</a></strong></p>
        </section>

        <section class="editable-fields">
          <div>
            <label for="edit-profile-photo">Photo</label>
            <input class="form-control" id="login-username" type="text" name="loginUsername" value="" placeholder="Enter Username">
          </div>

          <div>
            <label for="login-password">Password</label>
            <input class="form-control" id="login-password" type="password" name="loginPassword" value="" placeholder="Enter Password">
          </div>

          <small><a href="https://gapds.decal.ga.gov/ForgotLogin" target="_blank">Forgot login information?</a></small>

          <div>
            <input class="form-control" id="login-prek" type="checkbox" name="loginPrekDirectors" value="">
            <label for="login-prek">Pre-K Directors</label>
            <span>(Check to login with PANDA credentials)</span>
          </div>

          <div class="button-group">
            <button type="submit" name="loginSubmit">Login</button>
            <a class="button-alt" href="./home.php">Cancel</a>
          </div>
        </section>
      </form>
    </div>
  </main>
<?php include "components/footer.php"; ?>
