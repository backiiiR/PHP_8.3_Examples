<?php

class DeepCloningReadonlyProperties
{
    public string $php = 'PHP 8.3 Blogartikel';
}

readonly class ReadonlyDeepCloningReadonlyProperties
{
    public function __construct(public DeepCloningReadonlyProperties $deepCloningReadonlyProperties)
    {

    }

    public function __clone()
    {
        $this->deepCloningReadonlyProperties = clone $this->deepCloningReadonlyProperties;
    }
}

$instance = new ReadonlyDeepCloningReadonlyProperties(new DeepCloningReadonlyProperties());
$clonedInstance = clone $instance;

echo $clonedInstance->deepCloningReadonlyProperties->php; // PHP 8.3 Blogartikel