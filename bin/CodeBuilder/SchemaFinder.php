<?php

namespace WabLab\Bin\CodeBuilder;

class SchemaFinder
{
    public function findSchemas(string $dir) {
        $toReturn = [];
        $formattedDir = rtrim($dir, '/').'/';
        $dirContent = scandir($dir);
        foreach ($dirContent as $item) {
            if(!in_array($item, ['.', '..'])) {
                $fullItemPath = $formattedDir.$item;
                if(is_dir($fullItemPath)) {
                    $toReturn = array_merge($toReturn, $this->findSchemas($fullItemPath));
                } elseif(strrpos($item, '.json', -5)) {
                    $toReturn[] = $fullItemPath;
                }
            }
        }
        return $toReturn;
    }
}