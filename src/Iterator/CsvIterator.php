<?php
/**
 */

namespace Dspacelabs\Common\Iterator;

/**
 * CSV Iterator
 *
 * Allows you to easily iterate over lines in a csv file
 *
 * Usage:
 *
 * ```php
 * <?php
 *
 * $csvIterator = new \Dspacelabs\Common\CsvIterator('/path/to/file.csv');
 * foreach ($csvIterator as $csvRow) {
 *   // ....
 * }
 * ```
 */
class CsvIterator implements \Iterator
{
    /**
     * Bit Mask Flags
     *
     * HAS_HEADER
     *   First row is the header row
     */
    const HAS_HEADER = 1;

    /**
     * @var \SplFileObject
     */
    private $file;

    /**
     * @param string $file
     *   Full path to CSV file
     */
    public function __construct($file)
    {
        $this->file = new \SplFileObject($file);
        $this->file->setFlags(\SplFileObject::READ_CSV | \SplFileObject::SKIP_EMPTY | \SplFileObject::READ_AHEAD);
    }

    /**
     * @return
     *   Returns the current row
     */
    public function current()
    {
        return $this->file->current();
    }

    /**
     * Returns the current key
     *
     * Triggers E_NOTICE on failure
     *
     * @return string|integer|float|boolean|null
     *   Returns null on failure
     */
    public function key()
    {
        return $this->file->key();
    }

    /**
     * Progress to next row
     *
     * @return void
     */
    public function next()
    {
        $this->file->next();
    }

    /**
     * Rewind and goto the first row
     *
     * @return void
     */
    public function rewind()
    {
        $this->file->rewind();
    }

    /**
     * @return boolean
     */
    public function valid()
    {
        return $this->file->valid();
    }
}
