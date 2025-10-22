    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Prodi<span class="logo_colour">Informatika</span></a></h1>
          <h2>Universitas Matana</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
  <li class="{{ $activePage === 'beranda' ? 'selected' : '' }}">
    <a href="/">Beranda</a>
  </li>
  <li class="{{ $activePage === 'profil' ? 'selected' : '' }}">
    <a href="/profil">Profil</a>
  </li>
  <li class="{{ $activePage === 'pendidikan' ? 'selected' : '' }}">
    <a href="/pendidikan">Pendidikan</a>
  </li>
  <li class="{{ $activePage === 'riset' ? 'selected' : '' }}">
    <a href="/riset">Riset</a>
  </li>
  <li class="{{ $activePage === 'mahasiswa' ? 'selected' : '' }}">
    <a href="/mahasiswa">Mahasiswa</a>
  </li>
  <li class="{{ $activePage === 'lainlain' ? 'selected' : '' }}">
    <a href="/lainlain">Lain - Lain</a>
  </li>
</ul>
      </div>
    </div>