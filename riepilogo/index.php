<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Gianluca Biccarino">
    <meta name="generator" content="Exploding Bands 1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <!-- Bootstrap core CSS -->
    <link href="<?= $base_path ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/riepilogo/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">

        <main role="main" class="inner cover w-100 h-100">
            <h1 class="cover-heading header-title pt-5"><?= $titolo_riepilogo ?></h1>
            <div class="row m-0 elements <?= $class_custom ?> d-flex align-items-center ">
                <div class="col-2 col-xs-2"></div>
                <div class="col-8 col-xs-8 p-0 title">
                    <?= $html_elementi_riepilogo ?>
                </div>
                <div class="col-2 col-xs-2"></div>
            </div>
        </main>
    </div>
</body>

</html>
