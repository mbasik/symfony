<?php
/**
 * Bookmark controller.
 */

namespace AppBundle\Controller;

use AppBundle\Repository\BookmarkRepository;
use AppBundle\Repository\BookmarkCsvRepository;
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
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     *
     * @Route(
     *     "/",
     *     defaults={"page": 1},
     *     name="tag_index",
     * )
     * @Route(
     *     "/page/{page}",
     *     requirements={"page": "[1-9]\d*"},
     *     name="tag_index_paginated",
     * )
     * @Method("GET")
     */
    public function indexAction($page)
    {
        $bookmarks = $this->get('app.repository.csvbookmark')->findAll();

        return $this->render(
            'bookmark/index.html.twig',
            ['bookmarks' => $bookmarks]
        );
    }
    /**
     * View action.
     *
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
             $bookmark = $this->get('app.repository.csvbookmark')->findOneById($id);
        
              return $this->render(
                  'bookmark/view.html.twig',
                  ['bookmark' => $bookmark]
              );
    }
}