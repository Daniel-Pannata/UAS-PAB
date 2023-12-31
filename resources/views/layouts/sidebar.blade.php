  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/customers" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Customer</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="/admin/suppliers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Kontrak
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/kontrakbeli" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kontrak Beli</p>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kontrakjual" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kontrak Jual</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
                  <a href="/muatbongkar" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Muat Bongkar</p>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/laporan/laba" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laba</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="/laporan/ongkos" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pembayaran Ongkos</p>
                    </a>
                </li>
            </ul>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
