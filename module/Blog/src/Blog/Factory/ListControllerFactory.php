<?php
/**
 * <strong>Name :  ListControllerFactory.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category Blog\Factory
 * @package  Blog\Factory
 * @author   Susana Moreno <susana.ml82@gmail.com>
 * @license  Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version  GIT: $Id$
 * @link     http://www.susosworld.com
 * @since    File available since Release 0.1.0
 */ 

namespace Blog\Factory;

use Blog\Controller\ListController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ListControllerFactory
 *
 * @category   Blog\Model
 * @package    Blog\Model
 * @subpackage ListControllerFactory
 * @author     Susana Moreno <susana.ml82@gmail.com>
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.susosworld.com
 * @since      Class available since Release 0.1.0
 */
class ListControllerFactory implements FactoryInterface
{
    /**
     * Create ListController
     *
     * @param ServiceLocatorInterface $serviceLocator ServiceLocator
     *
     * @access public
     * @return ListController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $postService = $realServiceLocator->get('Blog\Service\ServiceInterface');

        return new ListController($postService);
    }
}