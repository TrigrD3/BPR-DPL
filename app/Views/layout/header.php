<?php
$this->IdentitasWebsiteModel = new \App\Models\IdentitasWebsiteModel();
$data['IdentitasWebsite'] = $this->IdentitasWebsiteModel->get_all();
?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-dark d-flex text-truncate" href="/">
      <img src="<?= base_url('uploads/IdentitasWebsite') . '/' . $data['IdentitasWebsite']->logo ?>" class="logo-nav" width="75" height="auto" alt="Logo BPR">
      <span class="ms-2 span-nama">BANK LESTARI <br>PT BPR Danapermata Lestari</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link text-dark px-3" href="<?= base_url('SimulasiDeposito') ?>">Simulasi Deposito</a>
        <a class="nav-link text-dark px-3" href="<?= base_url('SimulasiKredit') ?>">Simulasi Kredit</a>
        <a class="nav-link text-dark px-3" href="<?= base_url('Lelang') ?>">Lelang</a>
        <a class="nav-link text-dark px-3" href="<?= base_url('Publikasi') ?>">Publikasi</a>
        <a class="nav-link text-dark px-3" href="<?= base_url('KAP') ?>">KAP</a>
        <a class="nav-link text-dark px-3" href="<?= base_url('Penghargaan') ?>">Penghargaan</a>
        <a class="nav-link text-dark px-3" href="<?= base_url('Loker') ?>">Lowongan Kerja</a>
        <a class="btn navbar-btn text-white px-3" href="<?= base_url('Login') ?>" data-bs-toggle=" dropdown" data-bs-display="static" aria-expanded="false" style="background-image: linear-gradient(to right, #0d509d, #1769c6);">Login</a>
      </div>
    </div>
  </div>
</nav>