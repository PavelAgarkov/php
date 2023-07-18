<?php

namespace App;

class App
{
    public function __construct(
        private string $value
    ) {

    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

}