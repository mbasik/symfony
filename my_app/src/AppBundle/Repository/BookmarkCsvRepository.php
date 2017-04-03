<?php
/**
 * Bookmark repository.
 */
namespace AppBundle\Repository;

/**
 * Class BookmarkRepository.
 *
 * @package AppBundle\Repository
 */
class BookmarkCsvRepository
{
    /**
     * Bookmarks array
     *
     * @var array $bookmarks
     */
    protected $bookmarks = [
        [
            'Title' => 'Symfony',
            'URL' => 'http://symfony.com',
            'Tags' => [
                'PHP', 'framework', 'Symfony',
            ],
        ],
        [
            'Title' => 'Learn Git Branching',
            'URL' => 'http://learngitbranching.js.org',
            'Tags' => [
                'tools', 'Git', 'VCS', 'tutorials',
            ],
        ],
        [
            'Title' => 'PhpStorm',
            'URL' => 'http://symfony.com',
            'Tags' => [
                'PHP', 'framework', 'Symfony',
            ],
        ],
        [
            'Title' => 'Twig',
            'URL' => 'http://symfony.com',
            'Tags' => [
                'PHP', 'framework', 'Symfony',
            ],
        ],
    ];
     /**
     * Gets all records paginated.
     *
     * @param int $page Page number
     *
     * @return \Pagerfanta\Pagerfanta Result
     */
    public function findAllPaginated($page = 1)
    {
        $paginator = new Pagerfanta(new DoctrineORMAdapter($this->queryAll(), false));
        $paginator->setMaxPerPage(Tag::NUM_ITEMS);
        $paginator->setCurrentPage($page);

        return $paginator;
    }

    /**
     * Query all Attributes.
     *
     * @return \Doctrine\ORM\Query
     */
    protected function queryAll()
    {
        return $this->_em->createQuery('
            SELECT tag
            FROM AppBundle:Tag tag
        ');
    }

    /**
     * Gets all paginated bookmarks.
     *
     * @return array Result
     */
    public function findAll()
    {
        return $this->bookmarks;
    }

    /**
     * Find single record by its id.
     *
     * @param integer $id Single record index
     *
     * @return array Result
     */
    public function findOneById($id)
    {
        return isset($this->bookmarks[$id]) && count($this->bookmarks)
            ? $this->bookmarks[$id] : null;
    }
}