<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Gianluca Biccarino">
    <meta name="generator" content="Exploding Bands 1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="<?= $base_path ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/preroll/cover.css" rel="stylesheet">
</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">

        <div class="row m-0 h-100">
            <div class="col-4 col-xs-4 p-0">
                <div class="row m-0 elements d-flex align-items-center h-100">
                    <div class="col-2 col-xs-2 p-0"></div>
                    <div class="col-9 col-xs-9 img_container">
                        <img class="social_img" src="<?= $path_preview ?>"> <!-- es. img/preroll.jpg -->
                    </div>
                    <div class="col-1 col-xs-1 p-0"></div>
                </div>
            </div>
            <div class="col-1 col-xs-1"></div>
            <div class="col-7 col-xs-7 p-0">
                <div class="row m-0">
                    <div class="col-12 col-xs-12 header_title p-0"><?= $titolo ?></div>
                </div>
                <div class="row m-0 elements d-flex align-items-center h-100">
                    <div class="col-12 col-xs-12 px-0 padding_container">
                        <div class="row impression_row m-0 ">
                            <div class="col-12 col-xs-12 p-0">
                                <span class="impression big_text"><?= $impression ?></span>
                                <span class="views big_text px-5"><?= $view ?></span>
                                <span class="click big_text"><?= $click ?></span>
                            </div>
                        </div>
                        <div class="row table_youtube_row px-0 m-0">
                            <table class="table table-bordered text-center">
                                <tbody>
                                    <tr>
                                        <td colspan="4">Video riprodotto al</td>
                                    </tr>
                                    <tr>
                                        <td>25%</td>
                                        <td>50%</td>
                                        <td>75%</td>
                                        <td>100%</td>
                                    </tr>
                                    <tr>
                                        <td><?= $numero_vis_25 ?></td>
                                        <td><?= $numero_vis_50 ?></td>
                                        <td><?= $numero_vis_75 ?></td>
                                        <td><?= $numero_vis_100 ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row table_row facebook pt-4 pb-5 m-0">
                            <div class="col-12 col-xs-12 p-0 notifica">I dati di percentuale di riproduzione del brano sono relativi alle impression.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
