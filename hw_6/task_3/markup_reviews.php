<?php
$link = mysqli_connect('mysql', 'root', 'secret', 'test');

$query = 'SELECT
            reviews.body,
            reviews.created_at,
            u.firstname,
            u.lastname
          FROM reviews    
          JOIN test.users u on u.id = reviews.user_id
          ORDER BY reviews.created_at';
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<span class="review__username">' . $row['firstname'] . ' ' . $row['lastname'] . ' </span>';
    echo '<span class="review__datetime">' . date("d.m.Y G:i", strtotime($row['created_at'])) . '</span>';
    echo '<p class="review__body">' . $row['body'] . '</p>';
}

mysqli_close($link);
