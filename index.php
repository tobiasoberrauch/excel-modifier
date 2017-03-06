<?php

include_once __DIR__ . '/vendor/autoload.php';

$phpExcel = PHPExcel_IOFactory::load(__DIR__ . "/data/input/Artikelperformance_B2C_2017-03-06_080508.xlsx");

/** @var ArrayObject $drawingItems */
$drawingItems = $phpExcel->getActiveSheet()->getDrawingCollection();
$drawingItems->exchangeArray([]);


$objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel2007');
$objWriter->save(__DIR__ . "/data/output/Artikelperformance_B2C_2017-03-06_080508.xlsx");