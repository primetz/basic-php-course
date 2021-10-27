<?php
if ($_POST['firstname'] &&
    $_POST['lastname'] &&
    $_POST['review'] &&
    $_POST['useremail'] &&
    !empty($_POST['firstname']) &&
    !empty($_POST['lastname']) &&
    !empty($_POST['review']) &&
    !empty($_POST['useremail'])) {

    $link = mysqli_connect('mysql', 'root', 'secret', 'test');

    $useremail = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($_POST['useremail'])));
    $isExistEmailQuery = sprintf("SELECT id, email FROM users WHERE email = '%s'", $useremail);
    $isExistEmail = mysqli_query($link, $isExistEmailQuery);

    if (!mysqli_num_rows($isExistEmail)) {
        $firstname = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($_POST['firstname'])));
        $lastname = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($_POST['lastname'])));
        $usersQuery = sprintf("INSERT INTO users VALUES (DEFAULT, '%s', '%s', '%s')", $firstname, $lastname, $useremail);
        mysqli_query($link, $usersQuery);
        $userId = sprintf('%d', mysqli_insert_id($link));
    } else {
        $userId = mysqli_fetch_assoc($isExistEmail)['id'];
    }

    $feedback_body = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($_POST['review'])));
    $reviewsQuery = sprintf("INSERT INTO reviews VALUES (DEFAULT, '%d', '%s', DEFAULT)", $userId, $feedback_body);
    mysqli_query($link, $reviewsQuery);

    mysqli_close($link);
}
header('Location: /task_3');
