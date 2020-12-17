<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap core CSS -->
    <link href="<?= $base_path ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/canvas/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">
        <div class="row m-0 title">
            <div class="col-12 col-xs-12 p-0">
                <h1 class="cover-heading header_title"><?= $titolo_canvas ?></h1>
            </div>
        </div>
        <main role="main" class="inner cover">

            <div class="row m-0 elements d-flex align-items-center p-custom">
                <div class="col-4 col-xs-4 accessi_canvas pr-0">
                    <p class="accessi_canvas_number"><?= $accessi_canvas ?></p>
                    <p class="accessi_canvas_subtitle">ACCESSI UNICI AL CANVAS</p>
                </div>
                <div class="col-4 col-xs-4 click_totali p-0">
                    <p class="click_totali_number"><?= $click_totali_canvas ?></p>
                    <p class="click_totali_subtitle">CLICK TOTALI SUL LINK</p>
                </div>
                <div class="col-4 col-xs-4 click_store px-5 text-left">
                    <div class="col-12 col-xs-12 click_store_title mb-5">CLICK SU STORE DIGITALI</div>
                    <?= $html_elementi_store_digitali ?>
                </div>
            </div>

        </main>
    </div>
</body>

</html>
