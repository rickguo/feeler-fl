<?php
/**
 * @link http://www.feeler.top/
 * @copyright Copyright (c) 2019 Rick Guo
 * @license http://www.feeler.top/license/
 */

namespace Feeler\Fl;

class File extends Feeler\Base\File{
    public function __construct(string $file, int $mode = self::MODE_R, int $pointer = self::POINTER_HEAD, bool $override = false)
    {
        parent::__construct($file, $mode, $pointer, $override);
    }
}
