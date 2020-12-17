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

    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/positions/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">
        <div class="row mx-4 title">
            <div class="col-12 col-xs-12 p-0">
                <h1 class="cover-heading header-title m-0 py-3"><?= $titolo_posizionamenti ?></h1>
            </div>
        </div>
        <div class="row mx-4 elements d-flex align-items-start">
            <div class="col-12 col-xs-12 table_posizionamenti p-0 text-left">
                <div class="col-12 pl-5 py-3 indicazioni text-left">Primi <?= $count_pos ?> posizionamenti in ordine di impression (rappresentano il <?= $percentuale_pos ?> % del totale):</div>
                <table class="table table-striped my-0 mx-auto">
                    <thead>
                        <tr>
                            <?= $header_tabella_posizionamenti ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $righe_tabella_posizionamenti ?>
                    </tbody>
                </table>
                <div class="col-12 col-xs-12 pl-5 py-3 indicazioni text-left">L'intera lista dei posizionamenti è disponibile su richiesta.</div>
            </div>
        </div>

    </div>
</body>

</html>
