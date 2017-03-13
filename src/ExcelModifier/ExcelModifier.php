<?php
namespace ExcelModifier;

use PHPExcel;
use PHPExcel_IOFactory;
use SplFileObject;

/**
 * Class ExcelModifier
 *
 * PHP Version 7
 *
 * @category  PHP
 * @package   ExcelModifier
 * @author    Simplicity Trade GmbH <development@simplicity.ag>
 * @copyright 2014-2017 Simplicity Trade GmbH
 * @license   Proprietary http://www.simplicity.ag
 */
class ExcelModifier
{
    /** @var SplFileObject */
    protected $file;
    /** @var string */
    protected $filePath;
    /** @var PHPExcel */
    protected $excel;

    /**
     * ExcelModifier constructor.
     *
     * @param string $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
        $this->excel = PHPExcel_IOFactory::load($this->filePath);
    }

    /**
     * @param callable $modifier
     *
     * @return void
     */
    public function modify(callable $modifier)
    {
        $modifier($this->excel);
    }

    /**
     * @return void
     */
    public function save()
    {
        $outputFilePath = str_replace('input', 'output', $this->filePath);

        $writer = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
        $writer->save($outputFilePath);
    }
}