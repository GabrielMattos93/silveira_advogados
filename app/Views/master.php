<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <!--- Meta (SEO)
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Somos um conceituado escritório de advogados especialistas em processos jurídicos" />
    <meta name="keywords" content="advogado,site para advogado, website de advogado" />
    <meta name="author" content="Brutecode" />

    <!--- Meta (OG)
    ================================================== -->
    <meta property="og:site_name" content="Silveira Advogados" />
    <meta property="og:title" content="Silveira Advogados - Assessoria Jurídica Especializada" />
    <meta property="og:description" content="Somos um conceituado escritório de advogados especialistas em processos jurídicos" />
    <meta property="og:image" content="assets/images/logo/logo.png" />
    <meta property="og:url" content="/" />
    <meta name="twitter:card" content="summary_large_image" />

    <!--- Favicon
    ================================================== -->
    <link href="<?= base_url('assets/frontend/images/favicon/favicon.png') ?>" rel="icon" />

    <!--- Google Fonts
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--- Icon fonts
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!--- Bootstrap 
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css');  ?>">

    <!--- Css
    ================================================== -->
    <link href="<?= base_url('assets/frontend/css/main.css'); ?>" rel="stylesheet" />

    <!--- Plugins
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/plugin/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/plugin/owl.carousel.min.css'); ?>">

    <!--- Título do Site
    ================================================== -->
    <title><?= $title ?? 'Silveira Advogados' ?></title>
</head>

<body>
    <?= $this->include('themes/header') ?>
    <?= $this->renderSection('conteudo') ?>
    <?= $this->include('themes/footer') ?>
</body>

</html>