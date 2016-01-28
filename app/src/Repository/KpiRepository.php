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

    public function active(\App\Entity\Kpi $kpi_entity)
    {
        $this->inactiveAll();
        $kpi_entity->setActive(1);

        $this->_em->persist($kpi_entity);
        $this->_em->flush();

        return $kpi_entity;
    }

    public function inactiveAll()
    {
        $query_builder = $this->_em->createQueryBuilder();
        $query = $query_builder->update($this->_entityName, 'kpi')->set('kpi.active', '0')->getQuery();

        return $query->execute();
    }
}
