<section>
  <nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color:#6da729;">
    <div class="container-fluid">
      <a class="navbar-brand " href="/index.php">
        <img src="/img/logotsb.png" class="tsblogo w-50" style="-webkit-filter: drop-shadow(5px 5px 5px #222);">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-20" id="navbarSupportedContent">
        <ul class="hoverul navbar-nav me-auto mb-2 mb-lg-0 menunav">
          <li class="nav-item">
            <a class="nav-link nav-fontcolor " aria-current="page" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-fontcolor " aria-current="page" href="/pages/date.php">Important Dates</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-fontcolor" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Personnel
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/talk.php">Plenary & Speakers</a></li>
              <li><a class="dropdown-item" href="/pages/board.php">Board & Committee</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-fontcolor" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Submission
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/submissions.php">Abstract & Fullpaper Submissions</a></li>
              <li><a class="dropdown-item" href="/pages/guildline.php">Presentation Guidelines & Award</a></li>
              <li><a class="dropdown-item" href="/pages/registration.php">Registration & Payment</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-fontcolor" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/accommodation.php">Accommodation & Venue</a></li>
              <li><a class="dropdown-item" href="/pages/sponsors.php">Sponsors</a></li>
              <li><a class="dropdown-item" href="/pages/contact.php">Contact</a></li>
            </ul>
          </li>
          <?php if (isset($_SESSION['role'])) {
            if ($_SESSION['role']) { ?>
              <li class="nav-item">
                <?php if ($_SESSION['role'] == "user") { ?>
                  <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/profile.php">Profile</a>
                <?php } else if ($_SESSION['role'] == "thaiphysic") { ?>
                    <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/backend/tsb.php">Profile</a>
                <?php } else if ($_SESSION['role'] == "admin") { ?>
                      <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/backend/admin.php">Profile</a>
                <?php } else if ($_SESSION['role'] == "superadmin") { ?>
                        <a class="nav-link nav-fontcolor" aria-current="page"
                          href="/auth/backend/superadmin.php">Profile</a>
                <?php } ?>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/logout.php">Log out</a>
              </li>
            <?php }
          } else { ?>
            <li class="nav-item">
              <a class="nav-link nav-fontcolor" aria-current="page" href="/auth/login.php">Log in</a>
            </li>
            <?php
          } ?>
        </ul>
      </div>
    </div>
  </nav>
</section>