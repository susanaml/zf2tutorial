<?php

namespace Blog;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Class Module, configuración para el módulo Blog
 *
 * @category Blog
 * @package  Blog
 * @author   Susana Moreno <susana.ml82@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version  Release: <v0.1>
 * @link     http://zf2.localhost/blog
 */
class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{

    /**
     * Devuelve un array para pasarle Zend\Loader\AutoloaderFactory.
     * Esto es para cargar las clases
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    // Autoload all classes from namespace 'Blog' from '/module/Blog/src/Blog'
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                )
            )
        );
    }

    /**
     * Método que devuelve la configuración del módulo
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

}