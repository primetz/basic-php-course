<?php
$link = mysqli_connect('mysql', 'root', 'secret', 'test');

$id = $_GET['id'] ?? null;
if ($id && is_numeric($id)) {
    mysqli_query($link, 'UPDATE images SET viewed = viewed + 1 WHERE id = ' . $id);
    $result = mysqli_query($link, 'SELECT img_path, viewed FROM images WHERE id = ' . $id);
    $image = mysqli_fetch_assoc($result);
} else {
    die('Incorrect field id');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  if ($image) {
    echo '<img src="' . $image['img_path'] . '">' . '<br>';
    echo 'Количество просмотров ' . $image['viewed'];
}
mysqli_close($link); ?>
</body>
</html>
