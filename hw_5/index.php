<?php
/*
 * 1. Создать галерею изображений, состоящую из двух страниц:
 *    просмотр всех фотографий (уменьшенных копий);
 *    просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных
 *
 * 2. В базе данных создать таблицу, в которой будет храниться информация о картинках
 *    (адрес на сервере, размер, имя).
 *
 * 3. *На странице просмотра фотографии полного размера под картинкой должно быть указано
 *    число ее просмотров.
 *
 * 4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности.
 *    Популярность = число кликов по фотографии.
*/
// Функция для заполнения таблицы images на основе имеющихся картинок.
function fill_images_table($imagesDir, $dbHost, $dbUser, $dbPass, $dbName) {
    $frontImagesDir = '/' . $imagesDir . '/';
    $backImagesDir = __DIR__ . $frontImagesDir;
    $images = scandir($backImagesDir);

    $link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    foreach ($images as $image) {
        if (is_file($backImagesDir . $image)) {
            $imageSize = filesize($backImagesDir . $image);
            $insertQuery = "INSERT INTO images VALUES (DEFAULT, '$image', $imageSize, '$frontImagesDir$image', DEFAULT)";
            mysqli_query($link, $insertQuery);
        }
    }
    mysqli_close($link);
}
//fill_images_table('img', 'mysql', 'root', 'secret', 'test');

$link = mysqli_connect('mysql', 'root', 'secret', 'test');

$imagesQuery = 'SELECT id, img_path FROM images WHERE 1 ORDER BY viewed DESC';
$result = mysqli_query($link, $imagesQuery);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
</head>
<body>
<?php while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="/showimage.php?id=' . $row['id'] . '" target="_blank">';
    echo '<img src="' . $row['img_path'] . '" height="150">';
    echo '</a>';
}
mysqli_close($link); ?>
</body>
</html>
