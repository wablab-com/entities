<?php

namespace WabLab\Bin\CodeBuilder;

class Schema
{

    /**
     * @var array|mixed
     */
    protected array $rawSchemaAttributes;

    /**
     * @var string
     */
    public string $schemaPath;

    /**
     * @var SchemaAttribute[]
     */
    public array $schemaAttributes;

    /**
     * Schema constructor.
     * @param string $jsonFilePath
     */
    public function __construct(string $jsonFilePath)
    {
        $this->rawSchemaAttributes = json_decode(file_get_contents($jsonFilePath), true);
        $this->schemaPath = $jsonFilePath;

        if(isset($this->rawSchemaAttributes['attributes'])) {
            foreach ($this->rawSchemaAttributes['attributes'] as $attributeName => $options) {
                $this->schemaAttributes[$attributeName] = new SchemaAttribute($attributeName, $options);
            }
        }

    }

    /**
     * @return mixed|null
     */
    public function getParentSchemeName():?string {
        return $this->rawSchemaAttributes['extends'] ?? null;
    }

    /**
     * @return string
     */
    public function getDescription():string {
        return $this->rawSchemaAttributes['description'] ?? '';
    }


    /**
     * @return SchemaAttribute[]
     */
    public function getAttributes():array {
        return $this->schemaAttributes;
    }


}