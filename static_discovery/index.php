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

    <!-- Custom styles for this template -->
    <link href="<?= $base_path ?>/style.css" rel="stylesheet">
    <link href="<?= $base_path ?>/static_discovery/cover.css" rel="stylesheet">
  </head>
  <body>
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">

      <div class="row m-0 h-100">
	     <div class="col-4 col-xs-4 p-0">
			 <div class="row m-0 elements d-flex align-items-center h-100">
				 <div class="col-2 col-xs-2 p-0"></div>
				 <div class="col-9 col-xs-9 img_container">
			          <img class="social_img" src="<?=$path_preview?>"> <!-- es. img/discovery-statica.jpg -->
				 </div>
				 <div class="col-1 col-xs-1 p-0"></div>
			</div>
		 </div>
		  <div class="col-1 col-xs-1"></div>
		 <div class="col-7 col-xs-7 p-0">
			 <div class="row m-0">
		            <div class="col-12 col-xs-12 header_title p-0"><?=$titolo ?></div>
			 </div>
			  <div class="row m-0 elements d-flex align-items-center h-100">
				   <div class="col-12 col-xs-12 px-0 padding_container">
		              <div class="row impression_row m-0 ">
						 <!--  <div class="col-12 col-xs-12 p-0">
							  <span class="impression big_text"><?= $impression ?></span>
							  <span class="click big_text px-5"><?= $click ?></span>
                          </div> -->
                          <div class="col-6 col-xs-6 impression big_text subtitled pl-0"><?= $impression ?></div>
                            <div class="col-6 col-xs-6 click big_text subtitled pr-3"><?= $click ?></div>

				   </div>
			  </div>
		 </div>
      </div>
   </div>
</body>
</html>
