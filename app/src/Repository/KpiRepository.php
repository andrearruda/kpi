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

    public function findTabs(\App\Entity\Kpi $kpi_entity, $entity_name, $type)
    {

        $entity = $this->_em->getRepository('App\Entity\GroupBenner');
        $criteria = Criteria::create();

        var_dump($entity->matching($criteria)->toArray());



/*        $entity = $this->_em->getRepository('App\Entity\GroupBenner');
        $kpi_type_entity = $this->_em->getRepository('App\Entity\KpiType')->findOneById($type);

        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq('kpi', $kpi_entity));


        var_dump($entity->matching($criteria)->toArray());
        var_dump($entity_name);
        var_dump($kpi_type_entity);*/
        die;
    }


    public function findBudgetedGroupBenner(\App\Entity\Kpi $kpi_entity)
    {
/*        $entity = $this->_em->getRepository('App\Entity\GroupBenner');
        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq('kpi', $kpi_entity))
            ->andWhere();

        var_dump($entity->matching($criteria)->toArray());
        die;*/


        return $this->_em->getRepository('App\Entity\GroupBenner')->findOneByKpi($kpi_entity->getId());
    }

    public function findBudgetedHealthOperators(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\HealthOperators')->findOneByKpi($kpi_entity->getId());
    }

    public function findBudgetedHospital(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\Hospital')->findOneByKpi($kpi_entity->getId());
    }

    public function findBudgetedOminousManagement(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\OminousManagement')->findOneByKpi($kpi_entity->getId());
    }

    public function findBudgetedSystems(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\Systems')->findOneByKpi($kpi_entity->getId());
    }

    public function findComparativeGroupBenner(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\GroupBenner')->findOneByKpi($kpi_entity->getId());
    }

    public function findComparativeHealthOperators(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\HealthOperators')->findOneByKpi($kpi_entity->getId());
    }

    public function findComparativeHospital(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\Hospital')->findOneByKpi($kpi_entity->getId());
    }

    public function findComparativeOminousManagement(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\OminousManagement')->findOneByKpi($kpi_entity->getId());
    }

    public function findComparativeSystems(\App\Entity\Kpi $kpi_entity)
    {
        return $this->_em->getRepository('App\Entity\Systems')->findOneByKpi($kpi_entity->getId());
    }
}
