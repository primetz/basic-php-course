<?php
/*
 * 2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая
 *    в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов
 *    и построить фотогалерею со ссылками в ней
*/
$imagesDir = __DIR__ . '/img/';
function gallery_markup($imagesDir): string {
    $images = scandir($imagesDir);
    $listItems = '';

    foreach ($images as $image) {
        if (is_file('img/' . $image)) {
            $listItems .= '<li class="gallery-list__item">' .
                        '<a href="img/' . $image . '" target="_blank" class="gallery-list__link">' .
                            '<img src="img/' . $image . '" alt="' . pathinfo($image, PATHINFO_FILENAME) . '" class="gallery-list__img" height="150">' .
                        '</a>' .
                    '</li>';
        }
    }
    return '<ul class="gallery-list">' . $listItems . '</ul>';
}

if (isset($_FILES['userfile']) && ! empty($_FILES['userfile']['name'])) {
    $uploadFile = $imagesDir . basename($_FILES['userfile']['name']);
    if ($_FILES['userfile']['type'] !== 'image/jpeg') {
        echo 'Не верный формат файла';
    } elseif ($_FILES['userfile']['size'] > 500000) {
        echo 'Слишком большой размер файла';
    } elseif (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
        header('Location: /task_2');
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
    <?php echo gallery_markup($imagesDir); ?>
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
