<!-- navbar.php -->
<style>
  .navbar {
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-size: 1.1rem;
  }

  .navbar-brand {
    font-size: 1.5rem;
  }

  .navbar-nav .nav-link {
    position: relative;
    color: #fff !important;
    padding: 0.8rem 1rem;
    transition: color 0.3s ease;
  }

  .navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 0;
    background-color: #0d6efd; /* Bootstrap primary */
    transition: width 0.3s ease;
  }

  .navbar-nav .nav-link:hover::after {
    width: 100%;
  }

  .navbar-nav .nav-link:hover {
    color: #0d6efd !important;
  }

  .navbar .btn-primary {
    font-size: 1rem;
    padding: 0.6rem 1.2rem;
    background-color: #0d6efd;
    border-color: #0d6efd;
  }

  .navbar .btn-primary:hover {
    background-color: #084298;
    border-color: #084298;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 sticky-top">
  <a class="navbar-brand d-flex align-items-center" href="#">
    <img src="logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top me-2">
    MyGame
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Game Info</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="newsDropdown" role="button" data-bs-toggle="dropdown">
          News
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Latest Updates</a></li>
          <li><a class="dropdown-item" href="#">Patch Notes</a></li>
          <li><a class="dropdown-item" href="#">Events</a></li>
        </ul>
      </li>
    </ul>

    <div class="d-flex">
    <a href="app-debug.apk" class="btn btn-primary" download>Download Now</a>


    </div>
  </div>
</nav>
