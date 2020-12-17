<!doctype html>
<html lang="en">

<head>
    <!-- Bootstrap core CSS -->
    <link href="<?= $base_path ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Custom styles for this template -->

    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/graphs/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">
        <div class="row m-0 title">
            <div class="col-12 col-xs-12 p-0">
                <h1 class="cover-heading header_title"><?= $titolo_grafici ?></h1>
            </div>
        </div>
        <main role="main" class="inner cover">

            <div class="row m-0 elements d-flex align-items-center ">
                <div class="col-2 col-xs-2 p-0"></div>
                <div class="col-8 col-xs-8 p-0">
                    <div class="row m-0 p-custom">
                        <div class="col-6 col-xs-6 p-0 mr-4">
                            <div class="col-12 col-xs-12 p-0 mb-4 border-custom">
                                <img class="social_img" src="<?= $grafico_torta_1 ?>" />
                            </div>
                            <div class="col-12 col-xs-12 p-0 mt-4 border-custom">
                                <img class="social_img" src="<?= $grafico_torta_2 ?>" />
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 p-0 border-custom">
                            <div class="col-12 col-xs-12 p-0">
                                <img class="social_img" src="<?= $grafico_barre ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-xs-2 p-0"></div>
            </div>
        </main>
    </div>
</body>

</html>
