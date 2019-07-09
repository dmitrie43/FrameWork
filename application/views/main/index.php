<p>Главная страница</p>

<?php foreach ($users as $value): ?>
    <h3><?= $value['name'] ?></h3>
    <hr>
<?php endforeach; ?>
