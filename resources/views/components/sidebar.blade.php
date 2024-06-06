  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

      <div class="h-100" data-simplebar>

          <!-- User box -->
          <div class="user-box text-center">
              <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
              <div class="dropdown">
                  <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                      data-bs-toggle="dropdown">Nik Patel</a>
                  <div class="dropdown-menu user-pro-dropdown">

                      <a href="pages-profile.html" class="dropdown-item notify-item">
                          <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                      </a>
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                      </a>
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i data-feather="help-circle" class="icon-dual icon-xs me-1"></i><span>Support</span>
                      </a>
                      <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                          <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                      </a>

                  </div>
              </div>
              <p class="text-muted">Admin Head</p>
          </div>

          <!--- Sidemenu -->
          <div id="sidebar-menu">

              <ul id="side-menu">

                  <li>
                      <a href="{{ route('dashboard') }}">
                          <i data-feather="home"></i>
                          <span> Dashboards </span>
                      </a>
                  </li>


                  <li class="menu-title mt-2">Dyeing</li>

                  <li>
                      <a href="#sidebarDying" data-bs-toggle="collapse">
                          <i data-feather="droplet"></i>
                          <span> Dyeing </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarDying">
                          <ul class="nav-second-level">
                              <li><a href="{{ route('buka-resep') }}">Buka Resep</a></li>
                              <li><a href="{{ route('schedule') }}">Schedule</a></li>
                              <li><a href="{{ route('status-mesin') }}">Status Mesin</a></li>
                              <li><a href="{{ route('monitoring-tempelan') }}">Monitoring-Tempelan</a></li>
                              <li><a href="{{ route('hasil-celup') }}">Hasil-Celup</a></li>
                              <li><a href="{{ route('matching-dyeing') }}">Matching Dyeing</a></li>
                              <li><a href="{{ route('cek-schedule') }}">Check Schedule</a></li>
                              <li><a href="{{ route('masalah-celupan') }}">Masalah-Celupan</a></li>
                              <li><a href="{{ route('setting-mesin') }}">Setting-Mesin</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarReport" data-bs-toggle="collapse">
                          <i data-feather="file-text"></i>
                          <span> Report </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarReport">
                          <ul class="nav-second-level">
                              <li><a href="#">Lap Buka Resep</a></li>
                              <li><a href="#">Lap Schedule</a></li>
                              <li><a href="#">Lap Monitoring Tempelan</a></li>
                              <li><a href="#">Lap Harian Produksi</a></li>
                              <li><a href="#">Lap Harian Matching Dyeing</a></li>
                              <li><a href="#">Lap Potong Celup</a></li>
                              <li><a href="#">Lap Waktu Proses</a></li>
                              <li><a href="#">Lap Total Point</a></li>
                              <li><a href="#">Lap Over Time</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarDataTestProses" data-bs-toggle="collapse">
                          <i data-feather="clipboard"></i>
                          <span> Data Test Proses </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarDataTestProses">
                          <ul class="nav-second-level">
                              <li><a href="#">Input Data Test Proses</a></li>
                              <li><a href="#">Laporan Data Test Proses</a></li>
                              <li><a href="#">Status Data Test Proses</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarGantiKain" data-bs-toggle="collapse">
                          <i data-feather="copy"></i>
                          <span> Ganti Kain </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarGantiKain">
                          <ul class="nav-second-level">
                              <li><a href="#">Input Bon</a></li>
                              <li><a href="#">Laporan Bon</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarGantiKain" data-bs-toggle="collapse">
                          <i data-feather="filter"></i>
                          <span> Salah Resep </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarGantiKain">
                          <ul class="nav-second-level">
                              <li><a href="#">Input Salah Resep</a></li>
                              <li><a href="#">Laporan Salah Resep</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarNCP" data-bs-toggle="collapse">
                          <i data-feather="file"></i>
                          <span> NCP </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarNCP">
                          <ul class="nav-second-level">
                              <li><a href="#">Input NCP-Memo</a></li>
                              <li><a href="#">Laporan NCP-Memo</a></li>
                              <li><a href="#">Status NCP</a></li>
                              <li><a href="#">Laporan Harian NCP</a></li>
                              <li><a href="#">Laporan NCP</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarSettingResep" data-bs-toggle="collapse">
                          <i data-feather="slack"></i>
                          <span> Setting Resep </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarSettingResep">
                          <ul class="nav-second-level">
                              <li><a href="#">Setting Resep Dyeing</a></li>
                          </ul>
                      </div>
                  </li>

                  <li>
                      <a href="#sidebarMaster" data-bs-toggle="collapse">
                          <i data-feather="layers"></i>
                          <span> Master </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarMaster">
                          <ul class="nav-second-level">
                              <li><a href="#">Mesin</a></li>
                              <li><a href="#">Std-Target</a></li>
                              <li><a href="#">Line News</a></li>
                              <li><a href="#">Mesin</a></li>
                              <li><a href="#">Staff</a></li>
                          </ul>
                      </div>
                  </li>

                  <li class="menu-title mt-2">Account</li>
                  <li>
                      <a href="#sidebarAccount" data-bs-toggle="collapse">
                          <i data-feather="user"></i>
                          <span> Profile </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <div class="collapse" id="sidebarAccount">
                          <ul class="nav-second-level">
                              <li><a href="#">Profile</a></li>
                          </ul>
                      </div>
                  </li>


              </ul>

          </div>
          <!-- End Sidebar -->

          <div class="clearfix"></div>

      </div>
      <!-- Sidebar -left -->

  </div>
  <!-- Left Sidebar End -->
