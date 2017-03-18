<?php
declare(strict_types=1);

namespace Cadre;

class Sample
{
    private $name;

    public function __construct($name = 'world')
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return sprintf('Hello, %s.', $this->name);
    }
}
