<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Filter
 */

namespace Zend\Filter\Word;

/**
 * @category   Zend
 * @package    Zend_Filter
 */
class DashToCamelCase extends SeparatorToCamelCase
{
    /**
     * Constructor
     *
     */
    public function __construct()
    {
        parent::__construct('-');
    }
}
