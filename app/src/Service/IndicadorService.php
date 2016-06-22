<?php
namespace App\Service;

use Zend\Hydrator\ClassMethods;
use Doctrine\Common\Collections\Criteria;

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

    public function getById($id)
    {


        return array();
    }

    public function save($data, $id = null)
    {
        $kpiTypeComparativo = $this->getEntityManager()->getRepository('App\Entity\KpiType')->findOneById(1);
        $kpiTypeOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\KpiType')->findOneById(2);

        if(is_null($id))
        {
            $kpi = new \App\Entity\Kpi();
            $groupBenner_comparativo = new \App\Entity\GroupBenner();
            $healthOperators_comparativo = new \App\Entity\HealthOperators();
            $hospital_comparativo = new \App\Entity\Hospital();
            $ominousManagement_comparativo = new \App\Entity\OminousManagement();
            $systems_comparativo = new \App\Entity\Systems();

            $groupBenner_orcadorealizado = new \App\Entity\GroupBenner();
            $healthOperators_orcadorealizado = new \App\Entity\HealthOperators();
            $hospital_orcadorealizado = new \App\Entity\Hospital();
            $ominousManagement_orcadorealizado = new \App\Entity\OminousManagement();
            $systems_orcadorealizado = new \App\Entity\Systems();

            $employees = new \App\Entity\Employees();
        }
        else
        {
            $kpi = $this->getEntityManager()->getRepository('App\Entity\Kpi')->findOneById($id);

            $criteriaComparativo = Criteria::create()
                ->where(Criteria::expr()->eq('kpi', $kpi))
                ->andWhere(Criteria::expr()->eq('kpiType', $kpiTypeComparativo));

            $criteriaOrcadoRealizado = Criteria::create()
                ->where(Criteria::expr()->eq('kpi', $kpi))
                ->andWhere(Criteria::expr()->eq('kpiType', $kpiTypeOrcadoRealizado));

            $groupBenner_comparativo = $this->getEntityManager()->getRepository('App\Entity\GroupBenner')->matching($criteriaComparativo)->first();
            $healthOperators_comparativo = $this->getEntityManager()->getRepository('App\Entity\HealthOperators')->matching($criteriaComparativo)->first();
            $hospital_comparativo = $this->getEntityManager()->getRepository('App\Entity\Hospital')->matching($criteriaComparativo)->first();
            $ominousManagement_comparativo = $this->getEntityManager()->getRepository('App\Entity\OminousManagement')->matching($criteriaComparativo)->first();
            $systems_comparativo = $this->getEntityManager()->getRepository('App\Entity\Systems')->matching($criteriaComparativo)->first();

            $groupBenner_orcadorealizado = $this->getEntityManager()->getRepository('App\Entity\GroupBenner')->matching($criteriaOrcadoRealizado)->first();
            $healthOperators_orcadorealizado = $this->getEntityManager()->getRepository('App\Entity\HealthOperators')->matching($criteriaOrcadoRealizado)->first();
            $hospital_orcadorealizado = $this->getEntityManager()->getRepository('App\Entity\Hospital')->matching($criteriaOrcadoRealizado)->first();
            $ominousManagement_orcadorealizado = $this->getEntityManager()->getRepository('App\Entity\OminousManagement')->matching($criteriaOrcadoRealizado)->first();
            $systems_orcadorealizado = $this->getEntityManager()->getRepository('App\Entity\Systems')->matching($criteriaOrcadoRealizado)->first();

            $employees = $this->getEntityManager()->getRepository('App\Entity\Employees')->findOneByKpi($kpi);
        }

        (new ClassMethods())->hydrate(
            array_merge(
                $data['fieldset_informacoes'],
                $data['fieldset_periodo']
            ),
            $kpi
        );
        $this->getEntityManager()->persist($kpi);

//<editor-fold desc="Fieldset Comparativo">
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_comparativo_grupobenner']
            ),
            $groupBenner_comparativo
        );
        $this->getEntityManager()->persist($groupBenner_comparativo);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_comparativo_operadorasdesaude']
            ),
            $healthOperators_comparativo
        );
        $this->getEntityManager()->persist($healthOperators_comparativo);

        $data_hospital = array_merge(array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi), $data['fieldset_comparativo_hospitalar']);
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_comparativo_hospitalar']
            ),
            $hospital_comparativo
        );
        $this->getEntityManager()->persist($hospital_comparativo);
        
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_comparativo_gestaodesinistro']
            ),
            $ominousManagement_comparativo
        );
        $this->getEntityManager()->persist($ominousManagement_comparativo);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_comparativo_sistemas']
            ),
            $systems_comparativo
        );
        $this->getEntityManager()->persist($systems_comparativo);
//</editor-fold>

//<editor-fold desc="Fieldset Orçado X Realizado">
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_grupobenner']
            ),
            $groupBenner_orcadorealizado
        );
        $this->getEntityManager()->persist($groupBenner_orcadorealizado);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_operadorasdesaude']
            ),
            $healthOperators_orcadorealizado
        );
        $this->getEntityManager()->persist($healthOperators_orcadorealizado);

        $data_hospital = array_merge(array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi), $data['fieldset_orcadorealizado_hospitalar']);
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_hospitalar']
            ),
            $hospital_orcadorealizado
        );
        $this->getEntityManager()->persist($hospital_orcadorealizado);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_gestaodesinistro']
            ),
            $ominousManagement_orcadorealizado
        );
        $this->getEntityManager()->persist($ominousManagement_orcadorealizado);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_sistemas']
            ),
            $systems_orcadorealizado
        );
        $this->getEntityManager()->persist($systems_orcadorealizado);
//</editor-fold>

//<editor-fold desc="Fieldset Colaboradores">
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpi' => $kpi),
                $data['fieldset_colaborador_numerocolaboradores'],
                $data['fieldset_colaborador_faturamentocolaboradores']
            ),
            $employees
        );
        $this->getEntityManager()->persist($employees);
//</editor-fold>

        $this->getEntityManager()->flush();

        return $kpi;
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