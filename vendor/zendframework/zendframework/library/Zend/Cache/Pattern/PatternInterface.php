<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Cache
 */

namespace Zend\Cache\Pattern;

/**
 * @category   Zend
 * @package    Zend_Cache
 * @subpackage Pattern
 */
interface PatternInterface
{
    /**
     * Set pattern options
     *
     * @param  PatternOptions $options
     * @return PatternInterface
     */
    public function setOptions(PatternOptions $options);

    /**
     * Get all pattern options
     *
     * @return array
     */
    public function getOptions();
}
