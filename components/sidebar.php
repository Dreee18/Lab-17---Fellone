<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?= $page == 'Dashboard' ? 'active' : ''?>" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?= $page == 'Products' ? 'active' : ''?>" href="products.php">
              <span data-feather="list"></span>
              Products
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= $page == 'Orders' ? 'active' : ''?>" href="orders.php">
              <span data-feather="shopping-cart"></span>
              Orders
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= $page == 'Vendors' ? 'active' : ''?>" href="vendors.php">
              <span data-feather="user"></span>
              Vendors
            </a>
          </li>
          
        </ul>
      </div>
    </nav>