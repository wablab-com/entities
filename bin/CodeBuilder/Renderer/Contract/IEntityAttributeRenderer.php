<?php

namespace WabLab\Bin\CodeBuilder\Renderer\Contract;

interface IEntityAttributeRenderer
{
    public function render(string $name, string $type): string;
}