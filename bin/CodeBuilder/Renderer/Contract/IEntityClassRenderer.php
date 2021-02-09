<?php

namespace WabLab\Bin\CodeBuilder\Renderer\Contract;

interface IEntityClassRenderer
{
    public function render(string $className, $abstract = false): string;
}