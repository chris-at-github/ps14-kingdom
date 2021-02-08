<?php
declare(strict_types=1);

namespace Ps14\Kingdom\Controller;


/**
 *
 * This file is part of the "Kingdom" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Christian Pschorr <pschorr.christian@gmail.com>
 */

/**
 * EntityController
 */
class EntityController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * entityRepository
     * 
     * @var \Ps14\Kingdom\Domain\Repository\EntityRepository
     */
    protected $entityRepository = null;

    /**
     * @param \Ps14\Kingdom\Domain\Repository\EntityRepository $entityRepository
     */
    public function injectEntityRepository(\Ps14\Kingdom\Domain\Repository\EntityRepository $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $entities = $this->entityRepository->findAll();
        $this->view->assign('entities', $entities);
    }

    /**
     * action show
     * 
     * @param \Ps14\Kingdom\Domain\Model\Entity $entity
     * @return void
     */
    public function showAction(\Ps14\Kingdom\Domain\Model\Entity $entity)
    {
        $this->view->assign('entity', $entity);
    }
}
