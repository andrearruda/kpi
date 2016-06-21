<?php
namespace App\Service;

use Zend\Hydrator\ClassMethods;

class IndicadorService
{
    /**
     * @var $entity_manager \Doctrine\ORM\EntityManager
     */
    private $entity_manager;

    public function __construct(\Doctrine\ORM\EntityManager $entity_manager)
    {
        $this->setEntityManager($entity_manager);
    }

    public function getList()
    {
        return $this->getEntityManager()->getRepository('App\Entity\Kpi')->findBy(array(), array('createdAt' => 'DESC'));
    }

    public function save($data, $id = null)
    {
        if(is_null($id))
        {
            // FIELDSET INFORMAÇÃO + PERIODO
            $kpi_entity = new \App\Entity\Kpi();
            $data_kpi = array_merge($data['fieldset_informacoes'], $data['fieldset_periodo']);
            (new ClassMethods())->hydrate($data_kpi, $kpi_entity);
            $this->getEntityManager()->persist($kpi_entity);

            // FIELDSET COMPARATIVO
            $kpiType_entity = $this->getEntityManager()->getRepository('App\Entity\KpiType')->findOneById(1);

            $groupBenner_entity = new \App\Entity\GroupBenner();
            $data_groupBenner = array_merge(array('kpiType' => $kpiType_entity, 'kpi' => $kpi_entity), $data['fieldset_comparativo_grupobenner']);
            (new ClassMethods())->hydrate($data_groupBenner, $groupBenner_entity);
            $this->getEntityManager()->persist($groupBenner_entity);

            $healthOperators_entity = new \App\Entity\HealthOperators();
            $data_healthOperators = array_merge(array('kpiType' => $kpiType_entity, 'kpi' => $kpi_entity), $data['fieldset_comparativo_operadorasdesaude']);
            (new ClassMethods())->hydrate($data_healthOperators, $healthOperators_entity);
            $this->getEntityManager()->persist($healthOperators_entity);

            $hospital_entity = new \App\Entity\Hospital();
            $data_hospital = array_merge(array('kpiType' => $kpiType_entity, 'kpi' => $kpi_entity), $data['fieldset_comparativo_hospitalar']);
            (new ClassMethods())->hydrate($data_hospital, $hospital_entity);
            $this->getEntityManager()->persist($hospital_entity);
            
            $ominousManagement_entity = new \App\Entity\OminousManagement();
            $data_ominousManagement = array_merge(array('kpiType' => $kpiType_entity, 'kpi' => $kpi_entity), $data['fieldset_comparativo_gestaodesinistro']);
            (new ClassMethods())->hydrate($data_ominousManagement, $ominousManagement_entity);
            $this->getEntityManager()->persist($ominousManagement_entity);

            $this->getEntityManager()->flush();
        }

        var_dump($data);
        
        var_dump($kpi_entity);
        var_dump($kpiType_entity);
        var_dump($groupBenner_entity);
        var_dump($healthOperators_entity);
        var_dump($hospital_entity);
        var_dump($ominousManagement_entity);
        die;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->entity_manager;
    }

    /**
     * @param EntityManager $entity_manager
     */
    public function setEntityManager($entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }


}