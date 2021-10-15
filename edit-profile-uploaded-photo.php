<?php include "components/header.php"; ?>
  <main>
    <div class="container">
      <form id="edit-profile" action="" method="post">
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
          <ul class="personal-info">
            <li>
              <span class="key">First Name</span>
              <span class="value">Marcie</span>
            </li>
            <li>
              <span class="key">Last Name</span>
              <span class="value">Singletary</span>
            </li>
            <li>
              <span class="key">Email Address</span>
              <span class="value">marcie.singletary@decal.ga.gov</span>
            </li>
          </ul>
          <table class="employment-info">
            <thead>
              <tr>
                <th>Employer(s)</th>
                <th>Role(s)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Little Flower Childcare Service Centre</td>
                <td>Registered Teacher</td>
              </tr>
              <tr>
                <td>Capri Childcare Service Centre</td>
                <td>Registered Teacher</td>
              </tr>
            </tbody>
          </table>
        </section>

        <section class="editable-fields">
          <div class="photo-upload">
            <label for="profile-photo">Photo</label>
            <input class="form-control" type="file" id="profile-photo"  name="profilePhoto">
          </div>

          <div class="uploaded">
            <a class="change-photo" href="#">Change Photo</a>
            <picture class="profile-photo">
              <img src="assets/img/profile-marcie-singletary.jpg" alt="Profile photo">
              <span class="remove-photo"><img src="assets/img/icon-remove.svg" alt="Remove profile photo"> </span>
            </picture>
          </div>

        </section>
      </form>
    </div>
  </main>
<?php include "components/footer.php"; ?>
