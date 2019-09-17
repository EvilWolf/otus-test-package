<?php
namespace EvilWolf\ExampleNamespace;

class ExampleClass
{
    public function getName(): string
    {
        $className = static::class;
        return "Hi! I'm \"{$className}\"";
    }
}