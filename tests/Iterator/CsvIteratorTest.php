<?php
/**
 */

namespace Dspacelabs\Common\Tests\Iterator;

use Dspacelabs\Common\Iterator\CsvIterator;

/**
 */
class CsvIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testForeachCsvIterator()
    {
        $csvIterator = new CsvIterator(__DIR__.'/../../data/test.csv');

        foreach ($csvIterator as $key => $row) {
        }
    }
}
