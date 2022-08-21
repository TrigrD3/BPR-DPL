<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top sticky-top" aria-label="Tenth navbar example" style="background-image: linear-gradient(to right, #0d509d, #1769c6);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="<?= base_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3 " href="<?= base_url('Kredit') ?>" id="dropdownMenuLink" aria-expanded="false">Kredit</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white mx-3 " href="<?= base_url('Deposito') ?>" id="dropdownMenuLink" aria-expanded="false">Deposito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3 " href="<?= base_url('Tabungan') ?>" id="dropdownMenuLink" aria-expanded="false">Tabungan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="<?= base_url('LayananLainnya') ?>">Layanan Lainnya</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white mx-3 " href="<?= base_url('TentangLestari') ?>" id="dropdownMenuLink" aria-expanded="false">Tentang Lestari</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?= base_url('Sejarah') ?>">Sejarah BPR</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Profil') ?>">Profil Bank</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('VisiMisi') ?>">Visi Dan Misi</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('StrukturOrganisasi') ?>">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('AlamatKantor') ?>">Alamat Kantor</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('PusatBerita') ?>">Berita Lestari</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>