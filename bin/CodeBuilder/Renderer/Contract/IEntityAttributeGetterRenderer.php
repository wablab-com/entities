<?php

namespace WabLab\Bin\CodeBuilder\Renderer\Contract;

interface IEntityAttributeGetterRenderer
{
    public function render(string $name, string $type): string;
}