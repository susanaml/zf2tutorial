<?php
/**
 * <strong>Name :  ListController.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category Blog\Controller
 * @package  Blog\Controller
 * @author   Susana Moreno <susana.ml82@gmail.com>
 * @license  Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version  GIT: $Id$
 * @link     http://www.susosworld.com
 * @since    File available since Release 0.1.0
 */

namespace Blog\Controller;
use Blog\Service\PostService;
use Blog\Service\PostServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class ListController
 *
 * @category   Blog\Controller
 * @package    Blog\Controller
 * @subpackage ListController
 * @author     Susana Moreno <susana.ml82@gmail.com>
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.susosworld.com
 * @since      Class available since Release 0.1.0
 */
class ListController extends AbstractActionController
{
    /**
     * Put a description here
     *
     * @access protected
     * @var    PostService
     */
    protected $postService;

    /**
     * Constructor
     *
     * @param PostServiceInterface $postService PostService
     */
    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Index Action
     *
     * @access public
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel(
            array(
            'posts' => $this->postService->findAllPosts()
            )
        );
    }
}