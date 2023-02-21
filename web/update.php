<?php 

/**
 * @TODO: 
 * - Configure github webhook to point here
 * - On commit auto pull repos
 */

file_put_contents('../webhooks.txt', json_encode($_POST, JSON_PRETTY_PRINT)."\n", FILE_APPEND);
