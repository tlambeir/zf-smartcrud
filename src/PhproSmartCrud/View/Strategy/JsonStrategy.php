<?php
/**
 * Smartcrud for Zend Framework (http://framework.zend.com/)
 *
 * @link http://github.com/veewee/PhproSmartCrud for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace PhproSmartCrud\View\Strategy;


use PhproSmartCrud\View\Model\JsonModel;
use Zend\Http\PhpEnvironment\Response;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ModelInterface;

/**
 * Class JsonStrategy
 *
 * @package PhproSmartCrud\View\Strategy
 */
class JsonStrategy extends AbstractStrategy
{

    /**
     * @var int
     */
    protected $priority = -9000;

    /**
     * @param ModelInterface $model
     *
     * @return bool
     */
    protected function isValidModel($model)
    {
        return ($model instanceof JsonModel);
    }

    /**
     * @param MvcEvent       $e
     * @param ModelInterface $model
     *
     * @return Response
     */
    protected function renderModel(MvcEvent $e, ModelInterface $model)
    {
        $request   = $e->getRequest();
        $response  = $e->getResponse();
        return $response;
    }

}