<!-- Mobile Navigation -->
<nav class="mobile-nav">
  <div class="navigation">
    <!-- Menu -->
    <div class="dropdown menu">
      <!-- Menu Toggle -->
      <button
        type="button"
        name="mobileMenuButton"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        data-bs-target="#mobileMenu"
        class="dropdown-toggle"
      >
        <?= file_get_contents("./assets/img/icon-hamburger.svg"); ?>
        <span class="button-name">Menu</span>
      </button>
      <!-- Menu Items -->
      <div class="dropdown-menu" id="mobileMenu">
        <div class="mobile-links">
          <?php include "components/site-links.php"; ?>
          <?php include "components/site-search.php"; ?>
          <?php include "components/social-links.php"; ?>
        </div>
      </div>
    </div>
  </div>
</nav>
