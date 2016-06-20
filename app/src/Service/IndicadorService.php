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
            $this->getEntityManager()->flush();

            // FIELDSET COMPARATIVO
            $kpiType_entity = $this->getEntityManager()->getRepository('App\Entity\KpiType')->findOneById(1);
            $groupbenner_entity = new \App\Entity\GroupBenner();
            $data_groupbenner = array_merge(array('kpiType' => $kpiType_entity), $data['fieldset_comparativo_grupobenner']);
            (new ClassMethods())->hydrate($data_groupbenner, $groupbenner_entity);

            var_dump($groupbenner_entity);

/*            $groupbenner_entity = new \App\Entity\GroupBenner();
            $data_groupbenner =

            var_dump($groupbenner_entity);*/
            die;
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