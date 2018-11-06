<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="./"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
      <a class="navbar-brand hidden" href="./"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{ route('home.user') }}"> <i class="menu-icon fa fa-dashboard"></i>Halaman Utama</a>
        </li>

        <h3 class="menu-title">Keuangan</h3>
        <li>
          <a href="{{ route('daftar.siswa') }}"> <i class="menu-icon ti-email"></i>Daftar Siswa</a>
        </li>
        <li>
          <a href="{{ route('tambah.siswa') }}"> <i class="menu-icon ti-email"></i>Tambah Siswa</a>
        </li>

        <h3 class="menu-title">Sarana dan Prasarana</h3>
        <li>
          <a href="{{ route('daftar.sarana') }}"> <i class="menu-icon ti-email"></i>Daftar Sarana dan Prasarana</a>
        </li>
        <li>
          <a href="{{ route('anggaran.sarana') }}"> <i class="menu-icon ti-email"></i>Rencana Anggaran</a>
        </li>
        <li>
          <a href="{{ route('tambah.sarana') }}"> <i class="menu-icon ti-email"></i>Tambah Sarana dan Prasarana</a>
        </li>
      </ul>
    </div>
  </nav>
</aside>
