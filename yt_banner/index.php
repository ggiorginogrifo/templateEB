<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Gianluca Biccarino">
    <meta name="generator" content="Exploding Bands 1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <!-- Bootstrap core CSS -->
    <link href="<?= $base_path ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/yt_banner/cover.css" rel="stylesheet">
</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">

        <div class="row m-0 h-100">
            <div class="col-7 col-xs-7 p-0">
                <div class="row m-0 elements d-flex align-items-center h-100">
                    <div class="col-1 col-xs-1 p-0"></div>
                    <div class="col-10 img_container col-xs-10">
                        <div class="col-12 col-xs-12">
                            <div class="col-6 col-xs-6 p-0">
                                <img class="social_img" src="<?= $path_banner_300_250 ?>">
                                <!--es. img/banner_square.png-->
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 mt-5">
                            <div class="col-9 col-xs-9 p-0">
                                <img class="social_img" src="<?= $path_banner_468_60 ?>">
                                <!--es. img/banner_rect_col-9.png-->
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 mt-5">
                            <img class="social_img" src="<?= $path_banner_728_90 ?>">
                            <!--es. img/banner_rect_col_12.png-->
                        </div>

                    </div>
                    <div class="col-1 col-xs-1 p-0"></div>
                </div>
            </div>
            <div class="col-1 col-xs-1"></div>
            <div class="col-4 col-xs-4 p-0">
                <div class="row m-0">
                    <div class="col-12 col-xs-12 header_title <?= $break_text ?> p-0"><?= $titolo ?></div>
                </div>
                <div class="row m-0 elements d-flex align-items-center h-100">
                    <div class="col-12 col-xs-12 px-0 padding_container <?= $custom_class_2 ?>">
                        <div class="row impression_row m-0 ">
                            <div class="col-12 col-xs-12 p-0">
                                <div class="impression big_text pl-0"><?= $impression ?></div>
                                <div class="click big_text pt-5 pl-0"><?= $click ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
