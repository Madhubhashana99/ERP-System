<html>
    <head>
        <title>M-ERP</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="#"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        
    <a href="#submenu1" class="list-group-item list-group-item-action py-2 ripple" data-bs-toggle="collapse">
    <i class="fas fa-chart-area fa-fw me-3"></i><span>Customer</span>
    </a>
    <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
        <li class="w-100">
            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item 1</span></a>
        </li>
        <li>
            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item 2</span></a>
        </li>
    </ul>

    <a href="#submenu2" class="list-group-item list-group-item-action py-2 ripple" data-bs-toggle="collapse">
        <i class="fas fa-chart-area fa-fw me-3"></i><span>Items</span>
    </a>
    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
        <li class="w-100">
            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item 1</span></a>
        </li>
        <li>
            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item 2</span></a>
        </li>
    </ul>

    <a href="#submenu3" class="list-group-item list-group-item-action py-2 ripple" data-bs-toggle="collapse">
        <i class="fas fa-chart-area fa-fw me-3"></i><span>Reports</span>
    </a>
    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
        <li class="w-100">
            <a href="#" class="nav-link px-1"> <span class="d-none d-sm-inline">Item 1</span></a>
        </li>
        <li>
            <a href="#" class="nav-link px-1"> <span class="d-none d-sm-inline">Item 2</span></a>
        </li>
    </ul>

        
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button data-mdb-button-init
        class="navbar-toggler"
        type="button"
        data-mdb-collapse-init
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
          src="assets/logo.png"
          height="25"
          alt="Larana.com"
          loading="lazy"
        />
      </a>
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4"></div>
</main>
<!--Main layout-->



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>



