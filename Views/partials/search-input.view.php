<form action="search" method="GET">
    <input type="text" class="search-input" value="<?= $_GET['keywords'] ?? '' ?>" name="keywords" placeholder="Escribe lo que buscas...">
    <button type="submit" class="search-button">Buscar</button>
    <div>
        <select name="sort">
            <option <?= $_GET['sort'] == 'normal' ? 'selected' : '' ?> value="normal">Normal</option>
            <option <?= $_GET['sort'] == 'asc' ? 'selected' : '' ?> value="asc">Mas barato primero</option>
            <option <?= $_GET['sort'] == 'desc' ? 'selected' : '' ?> value="desc">Mas caro primero</option>
        </select>
    </div>
</form>
