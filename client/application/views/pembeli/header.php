<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg test"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, <?=$data['nama_depan']?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="ubahProfil.php" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">PETSHOP</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../dist/img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?=$data['nama_depan']?></div>
              <div class="user-role">
                PEMBELI
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="active">
              <a href="pembeli_index.php"><i class="ion ion-speedometer"></i><span>Home</span></a>
            </li>
            <li >
              <a href="toko.php"><i class="ion ion-briefcase"></i><span>Buka Toko</span></a>
            </li>
            <li class="menu-header">Pembeli</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Pembelian</span></a>
              <ul class="menu-dropdown">
                <li><a href="pembeli_statusPengiriman.php"><i class="ion ion-ios-circle-outline"></i>Status Pengiriman</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Transaksi</span></a>
              <ul class="menu-dropdown">
                <li><a href="pembeli_keranjangBelanja.php"><i class="ion ion-ios-circle-outline"></i>Keranjang Belanja</a></li>
                <li><a href="pembeli_daftarPembelian.php"><i class="ion ion-ios-circle-outline"></i>Daftar Pembelian</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
           </ul>
        </aside>
      </div>