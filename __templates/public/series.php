<?php require(BASE_DIR . '/__templates/public/partials/header.php'); ?>

<body><br>
<div>
    <div>
        <b class="titre_slider"> Séries</b>
    </div>
    <br>
    <div class="banniere_films">
        <div class="filter_films">
            <p class="texte_sur_film">
                Découvrez la crème du cinéma à travers nos contenus époustouflants
            </p>
        </div>

    </div>

    <div class="row row_wrap">

        <?php foreach (array_chunk($articles, 4) as $key => $chunck): ?>

            <div class="row row_wrap">

                <?php foreach ($chunck as $key => $article): ?>
                    <div class="col-3">
                        <img src="assets/images/ALVDAN_P3.jpg.jpg" class="movie-card"><br>
                        <b class="subt"><?= $article->title ?></b>
                        <p class="desc_contenu">
                            <?= $article->description ?>
                        </p>
                    </div>               
                <?php endforeach ?>

            </div>  

        <?php endforeach ?>


</body>

<?php require(BASE_DIR . '/__templates/public/partials/footer.php'); ?>
