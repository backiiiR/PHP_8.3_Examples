<?php

class ParentClass
{
    public function parent(): void
    {
        echo "I am the string from the parent class";
    }
}

class ChildClass extends ParentClass
{
    #[Override]
    public function parent(): void
    {
        echo "I am the string from the child class";
    }
}

$child = new ChildClass();
$child->parent();
