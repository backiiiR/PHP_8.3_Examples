<?php

class DynamicClassConstantFetch
{
    public const string CONSTANT = 'PHP 8.3 Blogartikel';

    public function constant(): void
    {
        // Das dynamische Abrufen von Klassen-Konstanten kann dazu beitragen,
        // den Code zu vereinfachen.
        echo DynamicClassConstantFetch::CONSTANT;
    }
}

$searchableConstant = 'CONSTANT';

$dynamicClassConstantFetch = new DynamicClassConstantFetch();
$dynamicClassConstantFetch->constant();
//---------------------------------------------
echo DynamicClassConstantFetch::{$searchableConstant};
