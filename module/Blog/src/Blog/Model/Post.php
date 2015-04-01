<?php
/**
 * <strong>Name :  Post.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category Blog\Model
 * @package  Blog\Model
 * @author   Susana Moreno <susana.ml82@gmail.com>
 * @license  Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version  GIT: $Id$
 * @link     http://www.susosworld.com
 * @since    File available since Release 0.1.0
 */ 

namespace Blog\Model;

/**
 * Class Post
 *
 * @category   Blog\Model
 * @package    Blog\Model
 * @subpackage Post
 * @author     Susana Moreno <susana.ml82@gmail.com>
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.susosworld.com
 * @since      Class available since Release 0.1.0
 */
class Post implements PostInterface
{
    /**
     * Identifier
     *
     * @access protected
     * @var    integer
     */
    protected $id;

    /**
     * Title
     *
     * @access protected
     * @var    string
     */
    protected $title;

    /**
     * Text
     *
     * @access protected
     * @var    string
     */
    protected $text;

    /**
     * Getter Id
     *
     * @access public
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter Identifier
     *
     * @param integer $id identifier
     *
     * @access public
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Getter Title
     *
     * @access public
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter Title
     *
     * @param string $title title
     *
     * @access public
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Getter Text
     *
     * @access public
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Setter Text
     *
     * @param string $text text
     *
     * @access public
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}