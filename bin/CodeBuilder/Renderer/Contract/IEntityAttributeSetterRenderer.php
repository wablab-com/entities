<?php

namespace WabLab\Bin\CodeBuilder\Renderer\Contract;

interface IEntityAttributeSetterRenderer
{
    public function render(string $name, string $type): string;
}