$(document).ready(function () {
  init();
  const URL_REQUEST = 'kalkulasiDeposito.php';

  let $jumlahDeposito = $('#jumlahDeposito');
  let $jangkaWaktu = $('#jangkaWaktu');
  let $bungaPertahun = $('#bungaPertahun');
  let submited = false;

  $('#simulasiDeposito').validate({
    rules: {
      jumlahDeposito: 'required',
      jangkaWaktu: 'required',
      bungaPertahun: 'required',
    },

    messages: {
      jumlahDeposito: 'Silahkan masukkan jumlah deposito atau pinjaman.',
      jangkaWaktu: 'Silahkan masukkan jangka waktu.',
      bungaPertahun: 'Silahkan masukkan bunga.',
    },

    submitHandler: function () {
      hitung();
      submited = true;
    },
  });

  $('#btnUlangi').click(function (e) {
    e.preventDefault();
    ulangi();
    submited = false;
  });

  $('input[name=metode]').change(function () {
    if (submited) hitung();
  });

  function init() {
    $('aside').hide();
  }

  function hitung() {
    $('aside').hide();
    $('#tableAngsuran tbody tr').remove();
    let data = $('#simulasiDeposito').serializeArray();
    $.post(URL_REQUEST, data, function (e) {
      setInfoDeposito($jumlahDeposito.val(), $jangkaWaktu.val(), $bungaPertahun.val(), e.data[0].pajak, e.data[0].bungaBulan, e.data[0].totalBunga, e.data[0].totalDepositoAkhir);
    });
    $('aside').show();
  }

  function ulangi() {
    $('aside').hide();
    $jumlahDeposito.val('');
    $jangkaWaktu.val('');
    $bungaPertahun.val('');
  }

  function setInfoDeposito(total, lama, bunga, pajak, bungaBulan, akumBunga, depositoAkhir) {
    let $totalPinjaman = $('#resultNominalDeposito');
    let $lamaPinjaman = $('#resultJangkaWaktu');
    let $bunga = $('#resultBungaPertahun');
    let $bungaPerBulan = $('#resultBungaPerbulan');
    let $pjk = $('#resultPajak');
    let $akumulasiBunga = $('#resultTotalAkumulasiBunga');
    let $totalDeposito = $('#resultTotalDepositoAkhir');

    $totalPinjaman.text(rupiah_format(total));
    $lamaPinjaman.text(lama);
    $bunga.text(bunga + ' %');
    $pjk.text(pajak + ' %');
    $bungaPerBulan.text(rupiah_format(bungaBulan));
    $akumulasiBunga.text(rupiah_format(akumBunga));
    $totalDeposito.text(rupiah_format(depositoAkhir));
  }

  function rupiah_format(number) {
    return number == 0 ? 'Rp. ' + 0 : 'Rp. ' + numeral(number).format('0,0');
  }
}); // eof document.ready
