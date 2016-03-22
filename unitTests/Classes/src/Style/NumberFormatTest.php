<?php

namespace PHPExcel\Style;

require_once 'testDataFileIterator.php';

class NumberFormatTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        \PHPExcel\Shared\String::setDecimalSeparator('.');
        \PHPExcel\Shared\String::setThousandsSeparator(',');
    }

    /**
     * @dataProvider providerNumberFormat
     */
    public function testFormatValueWithMask()
    {
        $args = func_get_args();
        $expectedResult = array_pop($args);
        $result = call_user_func_array(array('\PHPExcel\Style\NumberFormat','toFormattedString'), $args);
        $this->assertEquals($expectedResult, $result);
    }

    public function providerNumberFormat()
    {
        return new \testDataFileIterator('rawTestData/Style/NumberFormat.data');
    }
}
