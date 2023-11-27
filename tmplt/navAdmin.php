    <!-- Navbar -->
    <nav id="nav1" class="navbar navbar-expand-lg bg-body-tertiary fixed-top pt-3">
      <div class="container-fluid">
        <button style="border-radius: 12px!important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav text-center d-flex align-items-center">
            <li class="nav-item ">
            <a href="idxAdmin.php"><img src="../gambar/sj.png" style="left: 5;" alt="" srcset=""><a class="navbar-brand" href="#"></a></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="DDokter.php">Data Dokter</a></li>
                <li><a class="dropdown-item" href="DPasien.php">Data Pasien</a></li>
                <li><a class="dropdown-item" href="DArtikel.php">Data Artikel</a></li>
                
              </ul>
            </li>
            <li class=" ms-2 nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reservasi
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="DPesan.php">Data Reservasi</a></li>
                
              </ul>
            </li>
            <li class=" ms-2 nav-item">
              <button style="border-radius: 12px!important;" class="btn btn-outline-dark ms-5"><a class="nav-link active text-dark" aria-current="page" href="logout.php">Logout</a></button>
            </li>
            <li class=" ms-2 nav-item">
            <?php if($tempat == "Dokter"){ ?>
              <button style="border-radius: 12px!important;" class="btn btn-dark bg-dark ms-4"><a class="nav-link active text-light" aria-current="page" href="daftarDok.php">Tambah Dokter</a></button>
                <?php } else {?>
                  <button style="border-radius: 12px!important;" class="btn btn-dark bg-dark ms-4"><a class="nav-link active text-light" aria-current="page" href="daftarArt.php">Tambah Artikel</a></button>
                <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->