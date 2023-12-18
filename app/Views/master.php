<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto - Silveira Advogados">
    <meta name="author" content="Gabriel Mattos - brutecode.com.br">
    <title><?php echo esc($title ?? 'Silveira Advogados'); ?></title>

    <!-- Favicon
	================================================== -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>" />

    <!-- Bootstrap
	================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">

    <!-- Icon Font Css
	================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont/icofont.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css">

    <!-- Slick Slider  CSS
	================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/slick-carousel/slick/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/slick-carousel/slick/slick-theme.css'); ?>">

    <!-- Estilo CSS
	================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body id="top">
    <?= $this->include('partials/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/footer') ?>
</body>

</html>