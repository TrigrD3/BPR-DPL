<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/<?= $css; ?>.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/<?= $font; ?>.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/<?= $navbar; ?>.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/<?= $footer; ?>.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/<?= $header; ?>.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title><?= $title; ?></title>
    <!-- Pusat Berita -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.12.1/datatables.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
</head>
<?= $this->include('layout/header'); ?>

<body>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/Sticky'); ?>
    <?= $this->include('layout/footer'); ?>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


</html>