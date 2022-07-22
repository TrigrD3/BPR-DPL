<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="my-3">
        <a href="Kredit">Kredit</a> / <span style="color: #0d509e; font-weight: bold;">Judul Kredit</span>
    </div>
    <div>
        <p class="h1">Judul Kredit</p>
        <div class="text-center">
            <img src="images/Tabungan.jpg" class="img-fluid" alt="GambarProdukKredit">
        </div>
    </div>
    <div class="my-4">
        <p class="h1">Kredit</p>
        <p>Investasikan uang Anda secara aman. Produk - produk Kredit BPR Danapermata Lestari dilindungi oleh Lembaga Pinjaman Simpanan (LPS) dan ditujukan bagi nasabah yang ingin berinvestasi secara pasti dengan suku bunga yang kompetitif.</p>
    </div>
    <div class="my-4">
        <p class="h1">KEUNGGULAN PRODUK</p>
        <ul>
            <li>Bunga Kredit tinggi</li>
            <li>Bebas memperpanjang Kredit secara otomatis (Automatic Roll Over /ARO)</li>
            <li>Bunga dapat ditempatkan kembali ke pokok Kredit atau ditransfer ke rekening Kredit Jumbo anda yang dapat ditarik kapanpun</li>
            <li>Personalized services dari Personal Banking Officer yang akan melayani anda dengan sepenuh hati</li>
            <li>Bebas pencairan sewaktu-waktu tanpa penalti</li>
            <li>Nikmati fasilitas The First Lounge di kantor BPR Lestari pada saat menunggu transaksi anda (khusus nasabah Lestari First)</li>
            <li>Mendapatkan kartu Lestari First Ladies, privilege card pada merchant-merchant yang bekerjasama dengan BPR Lestari (khusus nasabah Lestari First)</li>
            <li>Kredit dapat digunakan sebagai agunan untuk mendapatkan fasilitas kredit</li>
        </ul>
    </div>
    <div class="my-4">
        <p class="h1">SKEMA</p>
        <ul>
            <li>Jangka waktu simpanan : 1 bulan, 3 bulan, 6 bulan dan 12 bulan</li>
            <li>Bunga dikenakan pajak sesuai ketentuan yang berlaku</li>
            <li>Bunga dihitung berdasarkan jumlah hari sebenarnya (1 tahun dihitung 365 hari)</li>
            <li>Dapat dibuka atas nama 2 orang pribadi (joint account).</li>
        </ul>
    </div>
    <div class="my-4">
        <p class="h1">SYARAT KETENTUAN</p>
        <ul>
            <li>Membawa bukti identitas diri yang masih berlaku, yaitu :
                <ul>
                    <li>Perorangan : KTP (WNI) KITAS/Passport (WNA)</li>
                    <li>Badan Usaha : SIUP, TDP, NPWP</li>
                </ul>
            </li>
            <li>Mengisi dan menandatangani formulir aplikasi data pengajuan Kredit</li>
            <li>Mengisi dan menandatangani formulir pembukaan rekening Jumbo apabila bunga ditransfer ke rekening Kredit Jumbo</li>
            <li>Penempatan minimal Rp. 8.000.000,-</li>
        </ul>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <button type="button" class="btn btn-outline-info">PENGAJUAN KREDIT</button>
</div>

<?= $this->endSection(); ?>