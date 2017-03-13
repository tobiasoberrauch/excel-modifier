<?php
namespace ExcelModifier;

use ArrayObject;
use PHPExcel;

/**
 * Class RemoveImages
 *
 * PHP Version 7
 *
 * @category  PHP
 * @package   ExcelModifier
 * @author    Simplicity Trade GmbH <development@simplicity.ag>
 * @copyright 2014-2017 Simplicity Trade GmbH
 * @license   Proprietary http://www.simplicity.ag
 */
class ImageRemover
{
    /**
     * @param PHPExcel $phpExcel
     *
     * @return void
     */
    function __invoke(PHPExcel $phpExcel)
    {
        /** @var ArrayObject $drawingItems */
        $drawingItems = $phpExcel->getActiveSheet()->getDrawingCollection();
        $drawingItems->exchangeArray([]);
    }
}