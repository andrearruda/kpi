<?php

namespace App\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\Criteria;

class KpiRepository extends \Doctrine\ORM\EntityRepository
{
    public function __construct(EntityManager $em)
    {
        $this->_em = $em;
        $this->_entityName = 'App\Entity\Kpi';
    }

    public function findId($id)
    {
        return $this->_em->getRepository($this->_entityName)->findOneBy(array('id' => $id));
    }

    public function findTabsEntities(\App\Entity\Kpi $kpi_entity, $entity_name, $type)
    {
        $entity = $this->_em->getRepository($entity_name);
        $kpi_type_entity = $this->_em->getRepository('App\Entity\KpiType')->findOneById($type);

        $criteria = Criteria::create();
        $criteria->where(Criteria::expr()->eq('kpi', $kpi_entity));
        $criteria->where(Criteria::expr()->eq('kpiType', $kpi_type_entity));

        return $entity->matching($criteria)->first();
    }
}
