<?php
namespace App\Service;

use Zend\Hydrator\ClassMethods;
use Doctrine\Common\Collections\Criteria;
use Stringy\Stringy as S;

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
        $kpi = $this->getEntityManager()->getRepository('App\Entity\Kpi')->findOneById($id);
        $employees = $this->getEntityManager()->getRepository('App\Entity\Employees')->findOneByKpi($kpi);

        $kpiTypeComparativo = $this->getEntityManager()->getRepository('App\Entity\KpiType')->findOneById(1);
        $kpiTypeOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\KpiType')->findOneById(2);

        $criteriaComparativo = Criteria::create()
            ->where(Criteria::expr()->eq('kpi', $kpi))
            ->andWhere(Criteria::expr()->eq('kpiType', $kpiTypeComparativo));

        $groupBennerComparativo = $this->getEntityManager()->getRepository('App\Entity\GroupBenner')->matching($criteriaComparativo)->first();
        $healthOperatorsComparativo = $this->getEntityManager()->getRepository('App\Entity\HealthOperators')->matching($criteriaComparativo)->first();
        $hospitalComparativo = $this->getEntityManager()->getRepository('App\Entity\Hospital')->matching($criteriaComparativo)->first();
        $ominousManagementComparativo = $this->getEntityManager()->getRepository('App\Entity\OminousManagement')->matching($criteriaComparativo)->first();
        $systemsComparativo = $this->getEntityManager()->getRepository('App\Entity\Systems')->matching($criteriaComparativo)->first();

        $criteriaOrcadoRealizado = Criteria::create()
            ->where(Criteria::expr()->eq('kpi', $kpi))
            ->andWhere(Criteria::expr()->eq('kpiType', $kpiTypeOrcadoRealizado));

        $groupBennerOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\GroupBenner')->matching($criteriaOrcadoRealizado)->first();
        $healthOperatorsOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\HealthOperators')->matching($criteriaOrcadoRealizado)->first();
        $hospitalOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\Hospital')->matching($criteriaOrcadoRealizado)->first();
        $ominousManagementOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\OminousManagement')->matching($criteriaOrcadoRealizado)->first();
        $systemsOrcadoRealizado = $this->getEntityManager()->getRepository('App\Entity\Systems')->matching($criteriaOrcadoRealizado)->first();


        $fieldset_informacoes = (new ClassMethods())->extract($kpi);
        $fieldset_periodo = $fieldset_informacoes;


        $data = array(
            'fieldset_informacoes' => array(
                'date' => $fieldset_informacoes['created_at']->format('d/m/Y'),
                'responsible' => $fieldset_informacoes['responsible']
            ),
            'fieldset_periodo' => array(
                'period_first_initial' => $fieldset_periodo['period_first_initial']->format('m/Y'),
                'period_first_end' => $fieldset_periodo['period_first_end']->format('m/Y'),
                'period_second_initial' => $fieldset_periodo['period_second_initial']->format('m/Y'),
                'period_second_end' => $fieldset_periodo['period_second_end']->format('m/Y'),
            ),
            'fieldset_comparativo_grupobenner' =>  $this->capitalizeKeyOfArray((new ClassMethods())->extract($groupBennerComparativo)),
            'fieldset_comparativo_operadorasdesaude' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($healthOperatorsComparativo)),
            'fieldset_comparativo_hospitalar' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($hospitalComparativo)),
            'fieldset_comparativo_gestaodesinistro' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($ominousManagementComparativo)),
            'fieldset_comparativo_sistemas' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($systemsComparativo)),

            'fieldset_orcadorealizado_grupobenner' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($groupBennerOrcadoRealizado)),
            'fieldset_orcadorealizado_operadorasdesaude' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($healthOperatorsOrcadoRealizado)),
            'fieldset_orcadorealizado_hospitalar' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($hospitalOrcadoRealizado)),
            'fieldset_orcadorealizado_gestaodesinistro' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($ominousManagementOrcadoRealizado)),
            'fieldset_orcadorealizado_sistemas' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($systemsOrcadoRealizado)),

            'fieldset_colaborador_numerocolaboradores' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($employees)),
            'fieldset_colaborador_faturamentocolaboradores' => $this->capitalizeKeyOfArray((new ClassMethods())->extract($employees)),
        );

        return $data;
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
                array('kpiType' => $kpiTypeOrcadoRealizado, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_grupobenner']
            ),
            $groupBenner_orcadorealizado
        );
        $this->getEntityManager()->persist($groupBenner_orcadorealizado);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeOrcadoRealizado, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_operadorasdesaude']
            ),
            $healthOperators_orcadorealizado
        );
        $this->getEntityManager()->persist($healthOperators_orcadorealizado);

        $data_hospital = array_merge(array('kpiType' => $kpiTypeComparativo, 'kpi' => $kpi), $data['fieldset_orcadorealizado_hospitalar']);
        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeOrcadoRealizado, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_hospitalar']
            ),
            $hospital_orcadorealizado
        );
        $this->getEntityManager()->persist($hospital_orcadorealizado);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeOrcadoRealizado, 'kpi' => $kpi),
                $data['fieldset_orcadorealizado_gestaodesinistro']
            ),
            $ominousManagement_orcadorealizado
        );
        $this->getEntityManager()->persist($ominousManagement_orcadorealizado);

        (new ClassMethods())->hydrate(
            array_merge(
                array('kpiType' => $kpiTypeOrcadoRealizado, 'kpi' => $kpi),
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

    public function remove($id)
    {
        $kpi = $this->getEntityManager()->getRepository('App\Entity\Kpi')->findOneById($id);

        $this->getEntityManager()->remove($kpi);
        $this->getEntityManager()->flush();

        return $id;
    }

    private function capitalizeKeyOfArray(array $data)
    {
        $data_aux = array();
        foreach($data as $key => $item)
        {
            $index = (string) S::create($key)->camelize();
            $index = str_replace(array('netProfit'), array('netprofit'), $index);

            $data_aux[$index] = $item;
        }

        return $data_aux;
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