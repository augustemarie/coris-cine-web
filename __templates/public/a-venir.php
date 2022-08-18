<?php require(BASE_DIR . '/__templates/public/partials/header.php'); ?>


<body>
<br>

<div>
    <b class="titre_card">A venir </b>
    <div class="flex_card">

        <?php $iterations = 0; ?>
        <?php foreach ($articles as $key => $article): ?>
            <?php if ($article->status == "COMING"): ?>
                <?php $iterations++; ?>
                <div class="my_card <?= isEven($iterations) ? 'right_side' : '' ?>">
                    <div class="filter_card_content">
                        <div class="card_content">
                            <h2><?= $article->title ?></h2>
                            <p><?= $article->description ?></p>
                            <a href="#" class="button_card"><?= $article->created_at ?></a>
                        </div>

                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>

    </div>
</div>


<?php require(BASE_DIR . '/__templates/public/partials/footer.php'); ?>
