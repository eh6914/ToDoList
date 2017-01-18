<?php

require"connect.php"
$name = $_POST ['index'];
$user_item ="INSERT INTO tasks (task) VALUES (':k')";
$add= $conn->prepare($user_item);
$add = execute([':k'=> $name]);


if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>