<?php

$hashed_pass = password_hash('123456789', PASSWORD_DEFAULT);
echo $hashed_pass;

?>