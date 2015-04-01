<?php
/**
 * <strong>Name :  PostServiceInterface.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category  
  * @package Blog\Service
 * @author    Susana Moreno <susana.ml82@gmail.com>
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   GIT: $Id$
 * @link      http://www.susosworld.com
 * @since     File available since Release 0.1.0
 */ 

namespace Blog\Service;

use Blog\Model\PostInterface;

/**
 * Interface PostServiceInterface
 *
 * @category   Blog\Service
 * @package    Blog\Service
 * @subpackage PostServiceInterface
 * @author     Susana Moreno <susana.ml82@gmail.com>
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.susosworld.com
 * @since      Class available since Release 0.1.0
 */
interface PostServiceInterface
{
    /**
     * Get all post of blog
     *
     * @access public
     * @return mixed
     */
    public function findAllPosts();

    /**
     * Get a post of blog
     *
     * @param integer $id identifier of post
     *
     * @access public
     * @return mixed
     */
    public function findPost($id);
}