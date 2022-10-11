<?php require('partials/head.view.php') ?>

<h1>Web Scraper</h1>

<?php require('partials/search-input.view.php') ?>

<div class="lists-container">

    <div class="list">
        <h2>Amazon</h2>

        <?php foreach($amazonResults as $result): ?>
            <div class="list-item">
                <div><img src="<?= $result['image'] ?>"></div>
                <div>
                    <div><a href="https://amazon.com<?= $result['url'] ?>" target="_blank"><?= $result['title'] ?></a></div>
                    <div class="price"><?= $result['price'] ?></div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

    <div class="list">
        <h2>Tienda</h2>
        <div class="list-item">
            <div><img src="https://m.media-amazon.com/images/I/71OX38EbGwL._AC_UY327_QL65_.jpg"></div>
            <div>
                <div><a href="https://amazon.com" target="_blank">Backlit Bluetooth Keyboard Small Portable External Wireless Keyboard</a></div>
                <div class="price">$43.56</div>
            </div>
        </div>
    </div>

</div>

<?php require('partials/footer.view.php') ?>
