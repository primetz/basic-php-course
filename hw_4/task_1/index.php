<?php
/*
 * 1. Создать галерею фотографий. Она должна состоять всего из одной странички, 
 *    на которой пользователь видит все картинки в уменьшенном виде и форму для 
 *    загрузки нового изображения. При клике на фотографию она должна открыться 
 *    в браузере в новой вкладке. Размер картинок можно ограничивать с помощью 
 *    свойства width. При загрузке изображения необходимо делать проверку на тип и размер файла.
*/
$imagesDir = __DIR__ . '/img/';
$images = scandir($imagesDir);

if (isset($_FILES['userfile']) && ! empty($_FILES['userfile']['name'])) {
    $uploadFile = $imagesDir . basename($_FILES['userfile']['name']);
    if ($_FILES['userfile']['type'] !== 'image/jpeg') {
        echo 'Не верный формат файла';
    } elseif ($_FILES['userfile']['size'] > 500000) {
        echo 'Слишком большой размер файла';
    } elseif (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
        header('Location: /task_1');
    } else {
        echo 'Файл не загружен!';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="gallery">
    <ul class="gallery-list">
        <?php foreach ($images as $image) {
            if (is_file('img/' . $image)) {?>
        <li class="gallery-list__item">
            <a href="img/<?php echo $image; ?>" target="_blank" class="gallery-list__link">
                <img src="img/<?php echo $image; ?>" alt="<?php echo pathinfo($image, PATHINFO_FILENAME); ?>" class="gallery-list__img" height="150">
            </a>
        </li>
        <?php
            }
        }
        ?>
    </ul>
    <form action="index.php" method="post" enctype="multipart/form-data" class="image-upload">
        <fieldset class="image-upload__fieldset">
            <legend class="image-upload__legend">Добавьте свое изображение</legend>
            <input type="file" name="userfile" class="image-upload__input">
            <input type="submit" value="Добавить" class="image-upload__submit">
        </fieldset>
    </form>
</div>
</body>
</html>
