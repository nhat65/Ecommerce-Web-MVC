<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <!-- Glidejs Carousel -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <!-- Animo On Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT . '/assets/css/style.css' ?>">
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="bootstrap.css" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert2 CSS and JS files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- GSAP (GreenSock Animation Platform) -->
    <script src="https://unpkg.com/gsap@3.9.1/dist/gsap.min.js"></script>
    <link rel="icon" href="data:image/png;base64,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" type="image/x-icon">

    <title>HV Apple</title>
</head>

<body>

    <?php
    $header['categoriesHeader'] = SharedModel::getCategoriesHeader();
    $this->render('shared/header', $header);
    ?>


    <?php $this->render($component, $content); ?>

    <?php $this->render('shared/footer'); ?>

</body>

</html>