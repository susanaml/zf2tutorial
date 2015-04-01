<?php
/**
 * <strong>Name :  PostService.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category Blog\Service
 * @package  Blog\Service
 * @author   Susana Moreno <susana.ml82@gmail.com>
 * @license  Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version  GIT: $Id$
 * @link     http://www.susosworld.com
 * @since    File available since Release 0.1.0
 */ 

namespace Blog\Service;

use Blog\Model\Post;

/**
 * Class PostService
 *
 * @category   Blog\Service
 * @package    Blog\Service
 * @subpackage PostService
 * @author     Susana Moreno <susana.ml82@gmail.com>
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.susosworld.com
 * @since      Class available since Release 0.1.0
 */
class PostService implements PostServiceInterface
{

    protected $data = array(
        array(
            'id' => 1,
            'title' => 'Hello World #1',
            'text' => 'This is our first blog post!'
        ),
        array(
            'id' => 2,
            'title' => 'Hello World #2',
            'text' => 'This is our second blog post!'
        ),
        array(
            'id' => 3,
            'title' => 'Hello World #2',
            'text' => 'This is our third blog post!'
        ),
        array(
            'id' => 4,
            'title' => 'Hello World #4',
            'text' => 'This is our fourth blog post!'
        ),
        array(
            'id' => 5,
            'title' => 'Hello World #1',
            'text' => 'This is our fifth blog post!'
        )
    );
    /**
     * Find all post of blog
     *
     * @access public
     * @return array
     */
    public function findAllPosts()
    {
        $allPosts = array();

        foreach ($this->data as $index => $post) {
            $allPosts[] = $this->findPost($index);
        }

        return $allPosts;
    }

    /**
     * Find a post of blog
     *
     * @param integer $id identifier of post
     *
     * @access public
     * @return Post
     */
    public function findPost($id)
    {
        $postData = $this->data[$id];

        $model = new Post();
        $model->setId($postData['id']);
        $model->setTitle($postData['title']);
        $model->setText($postData['text']);

        return $model;
    }
}