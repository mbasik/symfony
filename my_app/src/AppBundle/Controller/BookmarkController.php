<?php
/**
 * Bookmark controller.
 */

namespace AppBundle\Controller;

use AppBundle\Repository\BookmarkRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class BookmarkController.
 *
 * @package AppBundle\Controller
 *
 * @Route("/bookmark")
 */
class BookmarkController extends Controller
{
    /**
     * Index action.
     *
     * @return \Symfony\Component\HttpFoundation\Response Response
     *
     * @Route(
     *     "/",
     *     name="bookmark_index"
     * )
     */

        public function indexAction()
    {
        $bookmarks = $this->get('app.repository.bookmark')->findAll();

        return $this->render(
            'bookmark/index.html.twig',
            ['bookmarks' => $bookmarks]
        );
    }
    /**
     * View action.
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     *
     * @Route(
     *     "/{id}",
     *     requirements={"id": "[1-9]\d*"},
     *     name="bookmark_view",
     * )
     * @Method("GET")
     */
   public function viewAction($id)
    {
        $bookmark = $this->get('app.repository.bookmark')->findOneById($id);
        
         return $this->render(
            'bookmark/view.html.twig',
            ['bookmark' => $bookmark]
        );
    }
}