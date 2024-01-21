<?php

$jsonValidate = json_validate('{ "version": { "php": "8.3", "languange": "php" } }');

if ($jsonValidate) {
    echo "Valid JSON";
} else {
    echo "Invalid JSON";
}