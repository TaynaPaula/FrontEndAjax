<?php
function random_str($length = 32): string
{
    return bin2hex(random_bytes($length / 2));
}

$length = 20;
$rand_str = random_str($length);
echo $rand_str;

// Simula uma demora na resposta do controller
sleep(5);
?>
