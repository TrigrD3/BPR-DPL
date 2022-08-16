<nav class="navbar-bottom sticky-top py-2" style="background-image: linear-gradient(to right, #0d509d, #1769c6);">
    <div class="nav justify-content-center ">
        <a class="nav-link text-white mx-3" href="<?= base_url('/') ?>">Home</a>

        <div class="dropdown">
            <a class="nav-link text-white mx-3 " href="<?= base_url('Kredit') ?>" id="dropdownMenuLink" aria-expanded="false">Kredit</a>
        </div>

        <div class="dropdown">
            <a class="nav-link text-white mx-3 " href="<?= base_url('Deposito') ?>" id="dropdownMenuLink" aria-expanded="false">Deposito</a>
        </div>

        <div class="dropdown">
            <a class="nav-link text-white mx-3 " href="<?= base_url('Tabungan') ?>" id="dropdownMenuLink" aria-expanded="false">Tabungan</a>
        </div>

        <a class="nav-link text-white mx-3" href="<?= base_url('LayananLainnya') ?>">Layanan Lainnya</a>

        <div class="dropdown">
            <a class="nav-link text-white mx-3 " href="<?= base_url('TentangLestari') ?>" id="dropdownMenuLink" aria-expanded="false">Tentang Lestari</a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="<?= base_url('Sejarah') ?>">Sejarah BPR</a></li>
                <li><a class="dropdown-item" href="<?= base_url('Profil') ?>">Profil Bank</a></li>
                <li><a class="dropdown-item" href="<?= base_url('VisiMisi') ?>">Visi Dan Misi</a></li>
                <li><a class="dropdown-item" href="<?= base_url('StrukturOrganisasi') ?>">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="<?= base_url('AlamatKantor') ?>">Alamat Kantor</a></li>
                <li><a class="dropdown-item" href="<?= base_url('PusatBerita') ?>">Berita Lestari</a></li>
            </ul>
        </div>
    </div>
</nav>