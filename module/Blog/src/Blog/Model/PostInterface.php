<?php
/**
 * <strong>Name :  PostInterface.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category  Blog\Model
 * @package   Blog\Model
 * @author    Susana Moreno <susana.ml82@gmail.com>
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   GIT: $Id$
 * @link      http://www.susosworld.com
 * @since     File available since Release 0.1.0
 */ 

namespace Blog\Model;

/**
 * Interface PostInterface
 *
 * @category   Blog\Model
 * @package    Blog\Model
 * @subpackage PostServiceInterface
 * @author     Susana Moreno <susana.ml82@gmail.com>
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.susosworld.com
 * @since      Class available since Release 0.1.0
 */
interface PostInterface
{
    /**
     * Will return the ID of the blog post
     *
     * @access public
     * @return integer
     */
    public function getId();

    /**
     * Will return the TITLE of the blog post
     *
     * @access public
     * @return string
     */
    public function getTitle();

    /**
     * Will return the TEXT of the blog post
     *
     * @access public
     * @return string
     */
    public function getText();
}