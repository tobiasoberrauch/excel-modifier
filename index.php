<?php

namespace ExcelModifier;

include_once __DIR__ . '/vendor/autoload.php';

$files = glob(__DIR__ . "/data/input/*.xlsx");

foreach ($files as $filePath) {
    $excelModifier = new ExcelModifier($filePath);
    $excelModifier->modify(new ImageRemover());
    $excelModifier->save();
}