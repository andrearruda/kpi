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

            $groupbenner_entity = new \App\Entity\GroupBenner();
            $data_groupbenner = array_merge(array('kpiType' => $kpiType_entity, 'kpi' => $kpi_entity), $data['fieldset_comparativo_grupobenner']);
            (new ClassMethods())->hydrate($data_groupbenner, $groupbenner_entity);
            $this->getEntityManager()->persist($groupbenner_entity);

            $healthoperators_entity = new \App\Entity\HealthOperators();
            $data_healthoperators = array_merge(array('kpiType' => $kpiType_entity, 'kpi' => $kpi_entity), $data['fieldset_comparativo_operadorasdesaude']);
            (new ClassMethods())->hydrate($data_healthoperators, $healthoperators_entity);
            $this->getEntityManager()->persist($healthoperators_entity);


            $this->getEntityManager()->flush();

/*            var_dump($kpi_entity);
            var_dump($groupbenner_entity);
            var_dump($healthoperators_entity);*/
        }

        var_dump($data);
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