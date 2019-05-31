<nav class="navbar navbar-reward navbar-expand-md bg-paper-beige">
  <div class="container">
    <a class="navbar-brand" href="https://uniongroupjakarta.com/home/">
      <img src="<?php echo $prefix;?>assets/img/brand/logo_uniongroup-dark.png" alt="Logo">
    </a>

    <div class="navbar-nav-after-login hidden d-inline-block d-md-none">
      <div class="nav-item nav-item-account dropdown d-md-block">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo $prefix;?>assets/img/brand/icon_badge_silver.png" class="img-fluid" alt="Badge">
          <span class="d-none d-lg-inline-block">Elizabeth</span>
          <!-- <p class="mb-0 font-size-sm font-weight-light text-gray-300">Hello, Elizabeth</p>
          My Account -->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo $prefix;?>dashboard">Dashboard</a>
          <a class="dropdown-item" href="<?php echo $prefix;?>settings/edit-profile">Settings</a>
          <a class="dropdown-item d-none" id="navfaq" href="<?php echo $prefix;?>faq">Faq</a>
          <a class="dropdown-item d-none" id="navtnc" href="<?php echo $prefix;?>terms-conditions">T&C</a>
          <a class="dropdown-item" href="<?php echo $prefix;?>login">Logout</a>
        </div>
      </div>
    </div>

    <div class="collapse navbar-collapse show d-block" id="navbarBasic">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" id="navReward">
          <a class="btn btn-custom text-uppercase" href="<?php echo $prefix;?>register">Login</a>
        </li>
        <li class="nav-item" id="navReward">
          <a class="btn btn-custom text-uppercase" href="<?php echo $prefix;?>register">Register</a>
        </li>
      </ul>

    </div>
  </div>
</nav>