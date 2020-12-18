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

    <style>
		.utenti.subtitled:before {
			content:'UTENTI UNICI RAGGIUNTI';
		}

		.click.subtitled:before {
			content:'<?=$testo_metrica_click_fb_ig_feed?>';
		}

		.commenti.subtitled:before {
			content:'COMMENTI';
		}

		.impression.subtitled:before {
			content:'IMPRESSIONS';
		}

		.reaction.subtitled:before {
			content:'REACTIONS';
		}

		.condivisioni.subtitled:before {
			content:'CONDIVISIONI';
		}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= $base_path ?>/fb+ig_feed/cover.css" rel="stylesheet">
  </head>
  <body>
    <div class="cover-container d-flex w-100 h-100 p-0 mx-auto flex-column">

      <div class="row m-0 h-100">
	     <div class="col-4 col-xs-4 p-0">
			 <div class="row m-0 elements d-flex align-items-center h-100">
				 <div class="col-2 col-xs-2 p-0"></div>
				 <div class="col-9 col-xs-9 img_container">
			          <img class="social_img" src="<?=$path_preview_fb_ig_feed?>"> <!-- es. img/immagine_fb_ig.png, dimensioni preview = 320 * 594 px -->
				 </div>
				 <div class="col-1 col-xs-1 p-0"></div>
			</div>
		 </div>
		  <div class="col-1 col-xs-1"></div>
		 <div class="col-7 col-xs-7 p-0">
			 <div class="row m-0">
		            <div class="col-12 col-xs-12 header_title <?= $break_text ?> p-0"><?=$titolo_fb_ig_feed?></div>
			 </div>
			  <div class="row m-0 elements d-flex align-items-center h-100">
				   <div class="col-12 col-xs-12 px-0 padding_container">
		              <div class="row utenti_row m-0">
		                    <div class="col-4 col-xs-4 utenti big_text subtitled pl-0"><?=$numero_utenti_unici_fb_feed?></div>
			        	    <div class="col-4 col-xs-4 click big_text subtitled "><?=$numero_click_fb_feed?></div>
			        	    <div class="col-4 col-xs-4 commenti big_text subtitled"><?=$numero_commenti_fb_feed?></div>
		              </div>
					   <div class="row impression_row pt-4 m-0">
						   <div class="col-4 col-xs-4 impression big_text subtitled pl-0"><?=$numero_impression_fb_feed?></div>
						   <div class="col-4 col-xs-4 reaction big_text subtitled "><?=$numero_reaction_fb_feed?></div>
						   <div class="col-4 col-xs-4 condivisioni big_text subtitled"><?=$numero_condivisioni_fb_feed?></div>
					   </div>
					   <hr>
					   <div class="row utenti_row m-0 pt-4">
						   <div class="col-4 col-xs-4 utenti big_text subtitled pl-0"><?=$numero_utenti_unici_ig_feed?></div>
						   <div class="col-4 col-xs-4 click big_text subtitled "><?=$numero_click_ig_feed?></div>
						   <div class="col-4 col-xs-4 commenti big_text subtitled"><?=$numero_commenti_ig_feed?></div>
					   </div>
					   <div class="row impression_row pt-4 m-0">
						   <div class="col-4 col-xs-4 impression big_text subtitled pl-0"><?=$numero_impression_ig_feed?></div>
						   <div class="col-4 col-xs-4 reaction big_text subtitled "><?=$numero_reaction_ig_feed?></div>
						   <div class="col-4 col-xs-4 condivisioni big_text subtitled"><?=$numero_condivisioni_ig_feed?></div>
					   </div>
				   </div>
			  </div>
		 </div>
      </div>
   </div>
</body>
</html>
