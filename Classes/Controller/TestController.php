<?php
namespace Qbus\ExtenderTest\Controller;

use GeorgRinger\News\Domain\Repository\NewsRepository;

/**
 * TestController
 *
 * @author Benjamin Franzke <bfr@qbus.de>
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class TestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var NewsRepository
     */
    protected $newsRepository;

    /**
     * @param  NewsRepository $newsRepository
     * @return void
     */
    public function injectNewsRepository(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function mainAction()
    {
        $objects = $this->newsRepository->findAll();
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($objects);

        return self::class . '::' . __FUNCTION__;
    }
}
