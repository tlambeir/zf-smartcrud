<?php
/**
 * Smartcrud for Zend Framework (http://framework.zend.com/)
 *
 * @link http://github.com/veewee/PhproSmartCrud for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace spec\PhproSmartCrud\Output;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class ViewModelSpec
 *
 * @package spec\PhproSmartCrud\Output
 */
class ViewModelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PhproSmartCrud\Output\ViewModel');
    }

    function it_should_extend_Zend_View_ViewModel()
    {
        $this->shouldBeAnInstanceOf('Zend\View\Model\ViewModel');
    }
}