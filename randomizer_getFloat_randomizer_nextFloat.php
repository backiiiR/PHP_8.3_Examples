<?php

// Generating a random float between 0 and 1
echo (new \Random\Randomizer())->nextFloat();

// Generating a random float between 10 and 20, inclusive
echo (new \Random\Randomizer())->getFloat(10, 20);

// Generating a random float between 0 and 100, exclusive
echo (new \Random\Randomizer())->getFloat(0, 100, \Random\IntervalBoundary::OpenClosed);

// Generating a random float between -10 and 10
echo (new \Random\Randomizer())->getFloat(-10, 10, \Random\IntervalBoundary::OpenOpen);