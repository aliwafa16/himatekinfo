<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: rgb(255, 255, 255);">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/img/logo.png" alt="Logo_Himatekinfo" width="60" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="Home") ? 'active' : '' }} href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="Kegiatan") ? 'active' : '' }} href="/kegiatan">Kegiatan</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="Program Kerja") ? 'active' : '' }} href="/program-kerja">Program Kerja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="Struktur Organisasi") ? 'active' : '' }} href="/struktur">Struktur Organisasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="Galeri") ? 'active' : '' }} href="/galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="About") ? 'active' : '' }} href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" {{ ($title=="Auth") ? 'active' : '' }} href="/auth">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>