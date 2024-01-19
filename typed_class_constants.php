<?php

class TypedClassConstants
{
    public const string TYPED = 'PHP 8.3 Blogartikel';

    public function constant(): void
    {
        // Die Typisierung der Klassen-Konstante sorgt dafür,
        // dass nur eine Zeichenfolge an die Methode constant() übergeben werden kann.
        echo TypedClassConstants::TYPED;
    }

    public function constantWithWrongType(): void
    {
        // Fatal error: Das Argument von constant() muss vom Typ ein String sein, es wird aber ein Integer übergeben
        //echo TypedClassConstants::CONSTANT = 123;
    }
}

$typedClassConstants = new TypedClassConstants();

$typedClassConstants->constant();
$typedClassConstants->constantWithWrongType();

// ---------------------------------------------
interface TypedClassConstantsInterface
{
    public const string CONSTANT = 'PHP 8.3 Blogartikel';
}

class TypedClassConstantsImplementation implements TypedClassConstantsInterface
{
    // Fatal error: Das Default Value für CONSTANT darf nur ein String sein
    //public const string CONSTANT = [];
}
