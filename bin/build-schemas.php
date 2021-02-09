<?php

require __DIR__.'/../vendor/autoload.php';

use WabLab\Bin\CodeBuilder\Schema;
use WabLab\Bin\CodeBuilder\SchemaFinder;

// collect schema files
$schemaFinder = new SchemaFinder();
$files = $schemaFinder->findSchemas(realpath(__DIR__.'/../schemas'));

// initiate schema objects
$schemas = [];
foreach ($files as $file) {
    $schemas[] = new Schema($file);
}



