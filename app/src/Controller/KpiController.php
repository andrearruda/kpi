<?php

namespace App\Controller;

use App\Entity;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\Criteria;
use Slim\Router;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Zend\Hydrator\ClassMethods;

final class KpiController
{
    private $view;
    private $logger;
    private $em;
    private $router;

    public function __construct(Twig $view, LoggerInterface $logger, EntityManager $em, Router $router)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->em = $em;
        $this->router = $router;
    }

    public function index(Request $request, Response $response, $args)
    {
        $kpis = $this->em->getRepository('App\Entity\Kpi')->findAll();

        $this->view->render($response, 'kpi/index.twig', [
            'kpis' => $kpis
        ]);
        return $response;
    }

    public function add(Request $request, Response $response, $args)
    {
        if($request->isPost())
        {
            $kpi_entity = new Entity\Kpi();
            $kpitype_comparative_entity = $this->em->getRepository('App\Entity\KpiType')->findOneById('1'); //--> Kpi type "Comparative"
            $kpitype_budgeted_entity = $this->em->getRepository('App\Entity\KpiType')->findOneById('2'); //--> Kpi type "Budgeted"

//--> Data for entity KPI
            $data_kpi = array(
                'responsible' => $request->getParam('information')['responsible'],
                'period_first_initial' => new \DateTime(substr($request->getParam('period')['first']['initial'], -4) . '-' . substr($request->getParam('period')['first']['initial'], 0, 2) . '-01'),
                'period_first_end' => new \DateTime(substr($request->getParam('period')['first']['end'], -4) . '-' . substr($request->getParam('period')['first']['end'], 0, 2) . '-01'),
                'period_second_initial' => new \DateTime(substr($request->getParam('period')['second']['initial'], -4) . '-' . substr($request->getParam('period')['second']['initial'], 0, 2) . '-01'),
                'period_second_end' => new \DateTime(substr($request->getParam('period')['second']['end'], -4) . '-' . substr($request->getParam('period')['second']['end'], 0, 2) . '-01'),
            );

            (new ClassMethods())->hydrate($data_kpi, $kpi_entity);

            $groupbenner_comparative_entity = new Entity\GroupBenner();
            $healthoperators_comparative_entity = new Entity\HealthOperators();
            $hospital_comparative_entity = new Entity\Hospital();
            $ominousmanagement_comparative_entity = new Entity\OminousManagement();
            $systems_comparative_entity = new Entity\Systems();

            $groupbenner_budgeted_entity = new Entity\GroupBenner();
            $healthoperators_budgeted_entity = new Entity\HealthOperators();
            $hospital_budgeted_entity = new Entity\Hospital();
            $ominousmanagement_budgeted_entity = new Entity\OminousManagement();
            $systems_budgeted_entity = new Entity\Systems();

//--> Data for entity GroupBenner - Comparativo
            $data_comparative_groupbenner = array(
                'revenues_initial' => $request->getParam('groupbenner')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('groupbenner')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('groupbenner')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('groupbenner')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('groupbenner')[1]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('groupbenner')[1]['ebtida']['end'],
                'ebtida_target' => $request->getParam('groupbenner')[1]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('groupbenner')[1]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('groupbenner')[1]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('groupbenner')[1]['net_profit']['end'],
                'net_profit_target' => $request->getParam('groupbenner')[1]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('groupbenner')[1]['net_profit']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_comparative_groupbenner, $groupbenner_comparative_entity);

            $this->em->persist($groupbenner_comparative_entity);
            $this->em->flush();

//--> Data for entity HealthOperators - Comparativo
            $data_comparative_healthoperators = array(
                'revenues_initial' => $request->getParam('healthoperators')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('healthoperators')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('healthoperators')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('healthoperators')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('healthoperators')[1]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('healthoperators')[1]['ebtida']['end'],
                'ebtida_target' => $request->getParam('healthoperators')[1]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('healthoperators')[1]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('healthoperators')[1]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('healthoperators')[1]['net_profit']['end'],
                'net_profit_target' => $request->getParam('healthoperators')[1]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('healthoperators')[1]['net_profit']['percentage'],

                'lu_value' => $request->getParam('healthoperators')[1]['lu']['value'],
                'lu_percentage' => $request->getParam('healthoperators')[1]['lu']['percentage'],

                'lum_value' => $request->getParam('healthoperators')[1]['lum']['value'],
                'lum_percentage' => $request->getParam('healthoperators')[1]['lum']['percentage'],

                'implantation_value' => $request->getParam('healthoperators')[1]['implantation']['value'],
                'implantation_percentage' => $request->getParam('healthoperators')[1]['implantation']['percentage'],

                'sms_value' => $request->getParam('healthoperators')[1]['sms']['value'],
                'sms_percentage' => $request->getParam('healthoperators')[1]['sms']['percentage'],

                'medical_services_value' => $request->getParam('healthoperators')[1]['medical_services']['value'],
                'medical_services_percentage' => $request->getParam('healthoperators')[1]['medical_services']['percentage'],

                'workout_value' => $request->getParam('healthoperators')[1]['workout']['value'],
                'workout_percentage' => $request->getParam('healthoperators')[1]['workout']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_comparative_healthoperators, $healthoperators_comparative_entity);

            $this->em->persist($healthoperators_comparative_entity);
            $this->em->flush();


//--> Data for entity Hospital - Comparativo
            $data_comparative_hospital = array(
                'revenues_initial' => $request->getParam('hospital')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('hospital')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('hospital')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('hospital')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('hospital')[1]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('hospital')[1]['ebtida']['end'],
                'ebtida_target' => $request->getParam('hospital')[1]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('hospital')[1]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('hospital')[1]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('hospital')[1]['net_profit']['end'],
                'net_profit_target' => $request->getParam('hospital')[1]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('hospital')[1]['net_profit']['percentage'],

                'lu_value' => $request->getParam('hospital')[1]['lu']['value'],
                'lu_percentage' => $request->getParam('hospital')[1]['lu']['percentage'],

                'lum_value' => $request->getParam('hospital')[1]['lum']['value'],
                'lum_percentage' => $request->getParam('hospital')[1]['lum']['percentage'],

                'implantation_value' => $request->getParam('hospital')[1]['implantation']['value'],
                'implantation_percentage' => $request->getParam('hospital')[1]['implantation']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_comparative_hospital, $hospital_comparative_entity);

            $this->em->persist($hospital_comparative_entity);
            $this->em->flush();

//--> Data for entity OminousManagement - Comparativo
            $data_comparative_ominousmanagement = array(
                'revenues_initial' => $request->getParam('ominousmanagement')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('ominousmanagement')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('ominousmanagement')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('ominousmanagement')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('ominousmanagement')[1]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('ominousmanagement')[1]['ebtida']['end'],
                'ebtida_target' => $request->getParam('ominousmanagement')[1]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('ominousmanagement')[1]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('ominousmanagement')[1]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('ominousmanagement')[1]['net_profit']['end'],
                'net_profit_target' => $request->getParam('ominousmanagement')[1]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('ominousmanagement')[1]['net_profit']['percentage'],

                'services_value' => $request->getParam('ominousmanagement')[1]['services']['value'],
                'services_percentage' => $request->getParam('ominousmanagement')[1]['services']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_comparative_ominousmanagement, $ominousmanagement_comparative_entity);

            $this->em->persist($ominousmanagement_comparative_entity);
            $this->em->flush();

//--> Data for entity Systems - Comparativo
            $data_comparative_systems = array(
                'revenues_initial' => $request->getParam('systems')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('systems')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('systems')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('systems')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('systems')[1]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('systems')[1]['ebtida']['end'],
                'ebtida_target' => $request->getParam('systems')[1]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('systems')[1]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('systems')[1]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('systems')[1]['net_profit']['end'],
                'net_profit_target' => $request->getParam('systems')[1]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('systems')[1]['net_profit']['percentage'],

                'lu_value' => $request->getParam('systems')[1]['lu']['value'],
                'lu_percentage' => $request->getParam('systems')[1]['lu']['percentage'],

                'lum_value' => $request->getParam('systems')[1]['lum']['value'],
                'lum_percentage' => $request->getParam('systems')[1]['lum']['percentage'],

                'implantation_value' => $request->getParam('systems')[1]['implantation']['value'],
                'implantation_percentage' => $request->getParam('systems')[1]['implantation']['percentage'],

                'sms_value' => $request->getParam('systems')[1]['sms']['value'],
                'sms_percentage' => $request->getParam('systems')[1]['sms']['percentage'],

                'royaltes_value' => $request->getParam('systems')[1]['royaltes']['value'],
                'royaltes_percentage' => $request->getParam('systems')[1]['royaltes']['percentage'],

                'maintenance_pc_value' => $request->getParam('systems')[1]['maintenance_pc']['value'],
                'maintenance_pc_percentage' => $request->getParam('systems')[1]['maintenance_pc']['percentage'],

                'outsourcing_value' => $request->getParam('systems')[1]['outsourcing']['value'],
                'outsourcing_percentage' => $request->getParam('systems')[1]['outsourcing']['percentage'],

                'bpo_value' => $request->getParam('systems')[1]['bpo']['value'],
                'bpo_percentage' => $request->getParam('systems')[1]['bpo']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_comparative_systems, $systems_comparative_entity);

            $this->em->persist($systems_comparative_entity);
            $this->em->flush();


//--> Data for entity GroupBenner - Orçado X Realizado
            $data_budgeted_groupbenner = array(
                'revenues_initial' => $request->getParam('groupbenner')[2]['revenues']['initial'],
                'revenues_end' => $request->getParam('groupbenner')[2]['revenues']['end'],
                'revenues_target' => $request->getParam('groupbenner')[2]['revenues']['target'],
                'revenues_percentage' => $request->getParam('groupbenner')[2]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('groupbenner')[2]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('groupbenner')[2]['ebtida']['end'],
                'ebtida_target' => $request->getParam('groupbenner')[2]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('groupbenner')[2]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('groupbenner')[2]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('groupbenner')[2]['net_profit']['end'],
                'net_profit_target' => $request->getParam('groupbenner')[2]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('groupbenner')[2]['net_profit']['percentage'],

                'kpi_type' => $kpitype_budgeted_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_budgeted_groupbenner, $groupbenner_budgeted_entity);

            $this->em->persist($groupbenner_budgeted_entity);
            $this->em->flush();

//--> Data for entity HealthOperators - Orçado X Realizado
            $data_budgeted_healthoperators = array(
                'revenues_initial' => $request->getParam('healthoperators')[2]['revenues']['initial'],
                'revenues_end' => $request->getParam('healthoperators')[2]['revenues']['end'],
                'revenues_target' => $request->getParam('healthoperators')[2]['revenues']['target'],
                'revenues_percentage' => $request->getParam('healthoperators')[2]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('healthoperators')[2]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('healthoperators')[2]['ebtida']['end'],
                'ebtida_target' => $request->getParam('healthoperators')[2]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('healthoperators')[2]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('healthoperators')[2]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('healthoperators')[2]['net_profit']['end'],
                'net_profit_target' => $request->getParam('healthoperators')[2]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('healthoperators')[2]['net_profit']['percentage'],

                'lu_value' => '0.00',
                'lu_percentage' => '0.00',

                'lum_value' => '0.00',
                'lum_percentage' => '0.00',

                'implantation_value' => '0.00',
                'implantation_percentage' => '0.00',

                'sms_value' => '0.00',
                'sms_percentage' => '0.00',

                'medical_services_value' => '0.00',
                'medical_services_percentage' => '0.00',

                'workout_value' => '0.00',
                'workout_percentage' => '0.00',

                'kpi_type' => $kpitype_budgeted_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_budgeted_healthoperators, $healthoperators_budgeted_entity);

            $this->em->persist($healthoperators_budgeted_entity);
            $this->em->flush();


//--> Data for entity Hospital - Orçado X Realizado
            $data_budgeted_hospital = array(
                'revenues_initial' => $request->getParam('hospital')[2]['revenues']['initial'],
                'revenues_end' => $request->getParam('hospital')[2]['revenues']['end'],
                'revenues_target' => $request->getParam('hospital')[2]['revenues']['target'],
                'revenues_percentage' => $request->getParam('hospital')[2]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('hospital')[2]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('hospital')[2]['ebtida']['end'],
                'ebtida_target' => $request->getParam('hospital')[2]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('hospital')[2]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('hospital')[2]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('hospital')[2]['net_profit']['end'],
                'net_profit_target' => $request->getParam('hospital')[2]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('hospital')[2]['net_profit']['percentage'],

                'lu_value' => '0.00',
                'lu_percentage' => '0.00',

                'lum_value' => '0.00',
                'lum_percentage' => '0.00',

                'implantation_value' => '0.00',
                'implantation_percentage' => '0.00',

                'kpi_type' => $kpitype_budgeted_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_budgeted_hospital, $hospital_budgeted_entity);

            $this->em->persist($hospital_budgeted_entity);
            $this->em->flush();

//--> Data for entity OminousManagement - Orçado X Realizado
            $data_budgeted_ominousmanagement = array(
                'revenues_initial' => $request->getParam('ominousmanagement')[2]['revenues']['initial'],
                'revenues_end' => $request->getParam('ominousmanagement')[2]['revenues']['end'],
                'revenues_target' => $request->getParam('ominousmanagement')[2]['revenues']['target'],
                'revenues_percentage' => $request->getParam('ominousmanagement')[2]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('ominousmanagement')[2]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('ominousmanagement')[2]['ebtida']['end'],
                'ebtida_target' => $request->getParam('ominousmanagement')[2]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('ominousmanagement')[2]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('ominousmanagement')[2]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('ominousmanagement')[2]['net_profit']['end'],
                'net_profit_target' => $request->getParam('ominousmanagement')[2]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('ominousmanagement')[2]['net_profit']['percentage'],

                'services_value' => '0.00',
                'services_percentage' => '0.00',

                'kpi_type' => $kpitype_budgeted_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_budgeted_ominousmanagement, $ominousmanagement_budgeted_entity);

            $this->em->persist($ominousmanagement_budgeted_entity);
            $this->em->flush();

//--> Data for entity Systems - Orçado X Realizado
            $data_budgeted_systems = array(
                'revenues_initial' => $request->getParam('systems')[2]['revenues']['initial'],
                'revenues_end' => $request->getParam('systems')[2]['revenues']['end'],
                'revenues_target' => $request->getParam('systems')[2]['revenues']['target'],
                'revenues_percentage' => $request->getParam('systems')[2]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('systems')[2]['ebtida']['initial'],
                'ebtida_end' => $request->getParam('systems')[2]['ebtida']['end'],
                'ebtida_target' => $request->getParam('systems')[2]['ebtida']['target'],
                'ebtida_percentage' => $request->getParam('systems')[2]['ebtida']['percentage'],

                'net_profit_initial' => $request->getParam('systems')[2]['net_profit']['initial'],
                'net_profit_end' => $request->getParam('systems')[2]['net_profit']['end'],
                'net_profit_target' => $request->getParam('systems')[2]['net_profit']['target'],
                'net_profit_percentage' => $request->getParam('systems')[2]['net_profit']['percentage'],

                'lu_value' => '0.00',
                'lu_percentage' => '0.00',

                'lum_value' => '0.00',
                'lum_percentage' => '0.00',

                'implantation_value' => '0.00',
                'implantation_percentage' => '0.00',

                'sms_value' => '0.00',
                'sms_percentage' => '0.00',

                'royaltes_value' => '0.00',
                'royaltes_percentage' => '0.00',

                'maintenance_pc_value' => '0.00',
                'maintenance_pc_percentage' => '0.00',

                'outsourcing_value' => '0.00',
                'outsourcing_percentage' => '0.00',

                'bpo_value' => '0.00',
                'bpo_percentage' => '0.00',

                'kpi_type' => $kpitype_budgeted_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_budgeted_systems, $systems_budgeted_entity);

            $this->em->persist($systems_budgeted_entity);
            $this->em->flush();

            return $response->withRedirect($this->router->pathFor('kpi'));
        }

        $this->view->render($response, 'kpi/add.twig');
        return $response;
    }

    public function edit(Request $request, Response $response, $args)
    {
        $kpi_entity = $this->em->getRepository('App\Entity\Kpi')->findOneById($args['id']);
        $kpi_type_comparative_entity = $this->em->getRepository('App\Entity\KpiType')->findOneById(1);
        $kpi_type_budgeted_entity = $this->em->getRepository('App\Entity\KpiType')->findOneById(2);

        $criteria_comparative = Criteria::create();
        $criteria_comparative->where(Criteria::expr()->eq('kpi', $kpi_entity));
        $criteria_comparative->andWhere(Criteria::expr()->eq('kpiType', $kpi_type_comparative_entity));

        $criteria_budgeted = Criteria::create();
        $criteria_budgeted->where(Criteria::expr()->eq('kpi', $kpi_entity));
        $criteria_budgeted->andWhere(Criteria::expr()->eq('kpiType', $kpi_type_budgeted_entity));

        $groupbenner_entity = $this->em->getRepository('App\Entity\GroupBenner');
        $healthoperators_entity = $this->em->getRepository('App\Entity\HealthOperators');
        $hospital_entity = $this->em->getRepository('App\Entity\Hospital');
        $ominousmanagement_entity = $this->em->getRepository('App\Entity\OminousManagement');
        $systems_entity = $this->em->getRepository('App\Entity\Systems');

        $data = array(
            'kpi' => $this->em->getRepository('App\Entity\Kpi')->findOneById($args['id']),
            'entities' => array(
                'comparative' => array(
                    'groupbenner' => $groupbenner_entity->matching($criteria_comparative)->first(),
                    'healthoperators' => $healthoperators_entity->matching($criteria_comparative)->first(),
                    'hospital' => $hospital_entity->matching($criteria_comparative)->first(),
                    'ominousmanagement' => $ominousmanagement_entity->matching($criteria_comparative)->first(),
                    'systems' => $systems_entity->matching($criteria_comparative)->first(),
                ),
                'budgeted' => array(
                    'groupbenner' => $groupbenner_entity->matching($criteria_budgeted)->first(),
                    'healthoperators' => $healthoperators_entity->matching($criteria_budgeted)->first(),
                    'hospital' => $hospital_entity->matching($criteria_budgeted)->first(),
                    'ominousmanagement' => $ominousmanagement_entity->matching($criteria_budgeted)->first(),
                    'systems' => $systems_entity->matching($criteria_budgeted)->first(),
                ),
            )
        );

        $this->view->render($response, 'kpi/edit.twig', $data);

        return $response;
    }

    public function delete(Request $request, Response $response, $args)
    {
        $kpi_entity = $this->em->getRepository('App\Entity\Kpi')->findOneById($args['id']);

        $this->em->remove($kpi_entity);
        $this->em->flush();

        return $response->withRedirect($this->router->pathFor('kpi'));
    }

    public function active(Request $request, Response $response, $args)
    {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->update('App\Entity\Kpi', 'kpi')->set('kpi.active', '0')->getQuery()->execute();

        $kpi_entity = $this->em->getRepository('App\Entity\Kpi')->findOneById($args['id']);
        $kpi_entity->setActive(1);

        $this->em->persist($kpi_entity);
        $this->em->flush();

        return $response->withJson((new ClassMethods())->extract($kpi_entity));
    }
}