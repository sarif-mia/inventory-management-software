<?php
// Topbar fragment - included from index.php (moved to layout folder)
?>
<nav class="navbar navbar-dark fixed-top d-flex justify-content-between px-3" style="height:56px;">
  <div class="d-flex align-items-center gap-3">
    <button class="btn btn-dark p-0" style="font-size: 1.5rem;">
      <i class="bi bi-grid-3x3-gap-fill"></i>
    </button>
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">
      <img src="assets/images/logo_White_lovegen.png" alt="Logo" />
    </a>
  </div>
  <div class="d-flex align-items-center gap-3">
    <select class="form-select form-select-sm" style="width: 150px; background-color: #343434; color: white; border: none;">
      <option selected>Sale Order</option>
      <option>Option 1</option>
      <option>Option 2</option>
    </select>
    <div class="input-group input-group-sm" style="width: 250px;">
      <input type="text" class="form-control bg-dark text-white border-0" placeholder="Search" />
      <button class="btn btn-dark border-0" type="button">
        <i class="bi bi-search"></i>
      </button>
    </div>
    <button class="btn btn-dark position-relative">
      <i class="bi bi-upload"></i>
    </button>
    <button class="btn btn-dark position-relative">
      <i class="bi bi-download"></i>
    </button>
    <button class="btn btn-dark position-relative">
      <i class="bi bi-bell"></i>
    </button>
    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User" style="height: 30px; width: 30px; border-radius: 4px;" />
    <div class="dropdown">
      <a class="btn btn-dark dropdown-toggle d-flex align-items-center gap-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Sarif
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="#">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
