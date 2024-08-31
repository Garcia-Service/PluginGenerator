<?php

if (count($argv) < 4) {
    echo "Usage: php plugin-generator.php [name] [author] [api]\n";
    exit(1);
}

if (preg_match("/^[a-zA-Z0-9]+$/", $argv[1]) !== 0 or preg_match("/^[a-zA-Z0-9]+$/", $argv[2]) !== 0) {
    echo "Invalid name or author, please use only letters and numbers\n";
    exit(1);
}