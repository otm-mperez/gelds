<?php include "components/header.php"; ?>
  <main>
    <section class="hero short">
      <!-- Content -->
      <img src="./assets/img/hero-home.jpg" alt="">
    </section>
    <section>
      <div class="content centered">
        <h1 class="alt-title">Welcome to the Georgia Early Learning and Development Standards (GELDS) website for early learning professionals and caregivers.</h1>
        <ul class="col-grid cards">
          <li>
            <a href="./resources">
              <?= file_get_contents("./assets/img/icon-resources.svg"); ?>
              <h2 class="para-title">Resources</h2>
              <span class="desc">Access resources like websites, apps, videos, guides and more for GELDS, Training, and At Home Learning</span>
            </a>
          </li>
          <li>
            <a href="./dashboard">
              <?= file_get_contents("./assets/img/icon-portal.svg"); ?>
              <h2 class="para-title">Portal</h2>
              <span class="desc">Access the secure portal to create lesson plans and activities, add/view media, and view messages</span>
            </a>
          </li>
          <li>
            <a href="./activities">
              <?= file_get_contents("./assets/img/icon-activities.svg"); ?>
              <h2 class="para-title">Activities</h2>
              <span class="desc">Browse the extensive repository of developmentally appropriate activities for all age groups and learning domains</span>
            </a>
          </li>
          <li>
            <a href="./lesson-plan-templates">
              <?= file_get_contents("./assets/img/icon-lesson-plans.svg"); ?>
              <h2 class="para-title">Lesson Plan Templates</h2>
              <span class="desc">Access the secure portal to create lesson plans and activities, add/view media, and view messages</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php include "components/footer.php"; ?>
