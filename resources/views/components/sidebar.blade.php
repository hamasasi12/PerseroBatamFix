<aside id="sidebar" class="sidebar">
  <div>
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Manajemen Layanan Teknis & IT</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse">
          
          <!-- ======= Solve ======= -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-wrench"></i><span class="font-weight-bold text-primary">Solve</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="solve-nav" class="nav-content collapse">
              <li>
                <a href="{{ route('permintaan-masuk') }}">
                  <i class="bi bi-envelope"></i><span>Permintaan Masuk</span>
                </a>
              </li>
              <li>
                <a href="{{ route('DataDikerjakan.index') }}">
                  <i class="bi bi-hammer"></i><span>Dikerjakan</span>
                </a>  
              </li>
              <li>
                <a href="{{ route('PekerjaanSelesai.index') }}">
                  <i class="bi bi-circle"></i><span>Pekerjaan Selesai</span>
                </a>
              </li>
              <li>
                <a href="{{ route('history.indexx') }}">
                  <i class="bi bi-clock-history"></i><span>History Pekerjaan</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- ======= End Solve ======= -->
  
          <!-- ======= Inventory ======= -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-box-seam"></i><span class="font-weight-bold text-primary">Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="inventory-nav" class="nav-content collapse">
              <li>
                <a href="{{ route('TambahDataHardware.index') }}">
                  <i class="bi bi-cpu"></i><span>Tambah Data Aset (Hardware)</span>
                </a>
              </li>
              <li>
                <a href="{{ route('TambahDataSoftware.index') }}">
                  <i class="bi bi-file-earmark-code"></i><span>Tambah Data Aset (Software)</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- ======= End Inventory ======= -->
  
          <!-- ======= Maintenance ======= -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#maintenance-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-tools"></i><span class="font-weight-bold text-primary">Maintenance</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="maintenance-nav" class="nav-content collapse">
              <li>
                <a href="{{ route('Perbaikan.index') }}">
                  <i class="bi bi-bug"></i><span>Permintaan Perbaikan</span>
                </a>
              </li>
              <li>
                <a href="{{ route('Tindaklanjut.index') }}">
                  <i class="bi bi-arrow-repeat"></i><span>Tindaklanjut Perbaikan</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- ======= End Maintenance ======= -->
  
        </ul>
      </li>
  
      <!-- ======= Tambah User ======= -->
      <li class="nav-item">
          @if (Route::has('login'))
              <a class="nav-link" href="{{ route('register') }}">
                  <i class="bi bi-person-plus"></i>
                  <span>Tambah User</span>
              </a>
          @endif
      </li>
      <!-- ======= End Tambah User ======= -->
  
    </ul>
  </div>
</aside>
<!-- End Sidebar-->
