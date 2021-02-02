<?php

namespace WabLab\Bin\CodeBuilder;

class SchemaAttribute
{
    private string $attributeName;
    private array $attributeProperties;

    public function __construct(string $attributeName, array $attributeProperties)
    {
        $this->attributeName = $attributeName;
        $this->attributeProperties = $attributeProperties;
    }

    public function getName():string
    {
        return $this->attributeName;
    }

    public function properties():array
    {
        return $this->attributeProperties ?? [];
    }

    public function getType(): ?string
    {
        return $this->attributeProperties['type'] ?? null;
    }

    public function getTypeList(): ?array
    {
        return $this->attributeProperties['type_list'] ?? null;
    }

    public function getDefaultValue()
    {
        return $this->attributeProperties['default_value'] ?? null;
    }

    public function getRelation(): ?string {
        return $this->attributeProperties['relation'] ?? null;
    }

    public function getRelationType(): ?string
    {
        return $this->attributeProperties['relation_type'] ?? null;
    }

    public function getDescription(): ?string {
        return $this->attributeProperties['description'] ?? null;
    }

}