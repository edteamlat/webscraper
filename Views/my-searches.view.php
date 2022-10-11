<?php require('partials/head.view.php') ?>

<h1>Web Scraper</h1>

<?php require('partials/search-input.view.php') ?>

<div class="lists-container">

    <div>
        <h2>Mis búsquedas</h2>

        <?php foreach ($searches as $search) : ?>
            <div>
                <a href="search?keywords=<?= $search->keywords ?>" target="_blank">
                    <?= $search->keywords ?>
                </a>
            </div>
        <?php endforeach ?>

    </div>

</div>

<?php require('partials/footer.view.php') ?>
