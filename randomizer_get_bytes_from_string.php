<?php

$bytes = (new Random\Randomizer)->getBytesFromString(
    'abcdefghijklmnopqrstuvwxyz0123456789',
    11
);

echo $bytes;