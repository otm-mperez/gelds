<div class="account-controls logged-in">
  <!-- My Account -->
  <nav class="account dropdown">
    <!-- My Account Toggle -->
    <button
      type="button"
      name="accountButton"
      data-bs-toggle="dropdown"
      data-bs-target="#accountMenu"
      aria-expanded="false"
    >
      <img src="./assets/img/profile-marcie-singletary.jpg" alt="Site menu button" />
      <span class="button-name">My Account <?= file_get_contents("./assets/img/icon-chevron.svg"); ?></span>
    </button>
    <!-- My Account Links -->
    <div class="dropdown-menu" id="accountMenu">
      <?php include "components/account-links.php"; ?>
    </div>
  </nav>
  <!-- Messages -->
  <nav class="messages dropdown">
    <!-- Messages Toggle -->
    <button
      type="button"
      name="messagesButton"
      data-bs-toggle="dropdown"
      data-bs-target="#messagesList"
      aria-expanded="false"
    >
      <?= file_get_contents("./assets/img/icon-notification.svg"); ?>
      <span class="message-count">24</span>
      <!-- <span class="button-name">Messages</span> -->
    </button>
    <!-- Messages List -->
    <div class="dropdown-menu" id="messagesList">
      <?php include "components/messages-list.php"; ?>
    </div>
  </nav>
</div>
