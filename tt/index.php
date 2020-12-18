<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Bootstrap core CSS -->
    <link href="<?= $base_path ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/tt/cover.css" rel="stylesheet">
</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">

        <div class="row m-0 h-100">
            <div class="col-4 col-xs-4 p-0">
                <div class="row m-0 elements d-flex align-items-center h-100">
                    <div class="col-2 col-xs-2 p-0"></div>
                    <div class="col-9 col-xs-9 img_container">
                        <img class="social_img " src="<?= $img_url ?>">
                    </div>
                    <div class="col-1 col-xs-1 p-0"></div>
                </div>
            </div>
            <div class="col-1 col-xs-1"></div>
            <div class="col-7 col-xs-7 p-0">
                <div class="row m-0">
                    <div class="col-12 col-xs-12 header_title <?= $break_text ?> p-0"><?= $titolo_tik_tok ?></div>
                </div>
                <div class="row m-0 elements d-flex align-items-center h-100">
                    <div class="col-12 col-xs-12 px-0 padding_container <?= $custom_class_2 ?>">
                        <div class="row utenti_row m-0">
                            <div class="col-4 col-xs-4 utenti big_text subtitled pl-0"><?= $numero_utenti_tik_tok ?></div>
                            <div class="col-4 col-xs-4 like big_text subtitled"><?= $numero_like_tik_tok ?></div>
                            <div class="col-4 col-xs-4 click big_text subtitled"><?= $numero_click_tik_tok ?></div>
                        </div>
                        <div class="row impression_row pt-4 m-0">
                            <div class="col-4 col-xs-4 impression big_text subtitled pl-0"><?= $numero_impression_tik_tok ?></div>
                            <div class="col-4 col-xs-4 commenti big_text subtitled"><?= $numero_commenti_tik_tok ?></div>
                            <div class="col-4 col-xs-4 condivisioni big_text subtitled"><?= $numero_condivisioni_tik_tok ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
