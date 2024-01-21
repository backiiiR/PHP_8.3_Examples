<?php

// Generiere eine Zufallszahl zwischen 0 und 1
echo (new \Random\Randomizer())->nextFloat();

// Generiere eine Zufallszahl zwischen 10 und 20, inklusive 10 und 20
echo (new \Random\Randomizer())->getFloat(10, 20);

// Generiere eine Zufallszahl zwischen 0 und 100, exklusive 100
echo (new \Random\Randomizer())->getFloat(0, 100, \Random\IntervalBoundary::OpenClosed);

// Generiere eine Zufallszahl zwischen -10 und 10, inklusive -10 und 10
echo (new \Random\Randomizer())->getFloat(-10, 10, \Random\IntervalBoundary::OpenOpen);