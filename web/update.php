<?php 


file_put_contents('../webhooks.txt', json_encode($_POST, JSON_PRETTY_PRINT), FILE_APPEND);