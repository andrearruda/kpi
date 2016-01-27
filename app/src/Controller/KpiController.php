<?php

namespace App\Controller;

use App\Entity;
use Doctrine\ORM\EntityManager;
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
            $groupbenner_entity = new Entity\GroupBenner();
            $healthoperators_entity = new Entity\HealthOperators();
            $hospital_entity = new Entity\Hospital();
            $ominousmanagement_entity = new Entity\OminousManagement();
            $systems_entity = new Entity\Systems();

//--> Data for entity KPI
            $data_kpi = array(
                'responsible' => $request->getParam('information')['responsible'],
                'period_first_initial' => new \DateTime(substr($request->getParam('period')['first']['initial'], -4) . '-' . substr($request->getParam('period')['first']['initial'], 0, 2) . '-01'),
                'period_first_end' => new \DateTime(substr($request->getParam('period')['first']['end'], -4) . '-' . substr($request->getParam('period')['first']['end'], 0, 2) . '-01'),
                'period_second_initial' => new \DateTime(substr($request->getParam('period')['second']['initial'], -4) . '-' . substr($request->getParam('period')['second']['initial'], 0, 2) . '-01'),
                'period_second_end' => new \DateTime(substr($request->getParam('period')['second']['end'], -4) . '-' . substr($request->getParam('period')['second']['end'], 0, 2) . '-01'),
            );

            (new ClassMethods())->hydrate($data_kpi, $kpi_entity);

//--> Data for entity GroupBenner - Comparativo
            $data_groupbenner = array(
                'revenues_initial' => $request->getParam('groupbenner')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('groupbenner')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('groupbenner')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('groupbenner')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('groupbenner')[1]['revenues']['initial'],
                'ebtida_end' => $request->getParam('groupbenner')[1]['revenues']['end'],
                'ebtida_target' => $request->getParam('groupbenner')[1]['revenues']['target'],
                'ebtida_percentage' => $request->getParam('groupbenner')[1]['revenues']['percentage'],

                'net_profit_initial' => $request->getParam('groupbenner')[1]['revenues']['initial'],
                'net_profit_end' => $request->getParam('groupbenner')[1]['revenues']['end'],
                'net_profit_target' => $request->getParam('groupbenner')[1]['revenues']['target'],
                'net_profit_percentage' => $request->getParam('groupbenner')[1]['revenues']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_groupbenner, $groupbenner_entity);

            $this->em->persist($groupbenner_entity); //--> Persist entity GroupBenner
            $this->em->flush();

//--> Data for entity HealthOperators - Comparativo
            $data_healthoperators = array(
                'revenues_initial' => $request->getParam('healthoperators')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('healthoperators')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('healthoperators')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('healthoperators')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('healthoperators')[1]['revenues']['initial'],
                'ebtida_end' => $request->getParam('healthoperators')[1]['revenues']['end'],
                'ebtida_target' => $request->getParam('healthoperators')[1]['revenues']['target'],
                'ebtida_percentage' => $request->getParam('healthoperators')[1]['revenues']['percentage'],

                'net_profit_initial' => $request->getParam('healthoperators')[1]['revenues']['initial'],
                'net_profit_end' => $request->getParam('healthoperators')[1]['revenues']['end'],
                'net_profit_target' => $request->getParam('healthoperators')[1]['revenues']['target'],
                'net_profit_percentage' => $request->getParam('healthoperators')[1]['revenues']['percentage'],

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

            (new ClassMethods())->hydrate($data_healthoperators, $healthoperators_entity);

            $this->em->persist($healthoperators_entity); //--> Persist entity HealthOperators
            $this->em->flush();


//--> Data for entity Hospital - Comparativo
            $data_hospital = array(
                'revenues_initial' => $request->getParam('hospital')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('hospital')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('hospital')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('hospital')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('hospital')[1]['revenues']['initial'],
                'ebtida_end' => $request->getParam('hospital')[1]['revenues']['end'],
                'ebtida_target' => $request->getParam('hospital')[1]['revenues']['target'],
                'ebtida_percentage' => $request->getParam('hospital')[1]['revenues']['percentage'],

                'net_profit_initial' => $request->getParam('hospital')[1]['revenues']['initial'],
                'net_profit_end' => $request->getParam('hospital')[1]['revenues']['end'],
                'net_profit_target' => $request->getParam('hospital')[1]['revenues']['target'],
                'net_profit_percentage' => $request->getParam('hospital')[1]['revenues']['percentage'],

                'lu_value' => $request->getParam('hospital')[1]['lu']['value'],
                'lu_percentage' => $request->getParam('hospital')[1]['lu']['percentage'],

                'lum_value' => $request->getParam('hospital')[1]['lum']['value'],
                'lum_percentage' => $request->getParam('hospital')[1]['lum']['percentage'],

                'implantation_value' => $request->getParam('hospital')[1]['implantation']['value'],
                'implantation_percentage' => $request->getParam('hospital')[1]['implantation']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($data_hospital, $hospital_entity);

            $this->em->persist($hospital_entity); //--> Persist entity Hospital
            $this->em->flush();

//--> Data for entity OminousManagement - Comparativo
            $ominousmanagement = array(
                'revenues_initial' => $request->getParam('ominousmanagement')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('ominousmanagement')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('ominousmanagement')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('ominousmanagement')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('ominousmanagement')[1]['revenues']['initial'],
                'ebtida_end' => $request->getParam('ominousmanagement')[1]['revenues']['end'],
                'ebtida_target' => $request->getParam('ominousmanagement')[1]['revenues']['target'],
                'ebtida_percentage' => $request->getParam('ominousmanagement')[1]['revenues']['percentage'],

                'net_profit_initial' => $request->getParam('ominousmanagement')[1]['revenues']['initial'],
                'net_profit_end' => $request->getParam('ominousmanagement')[1]['revenues']['end'],
                'net_profit_target' => $request->getParam('ominousmanagement')[1]['revenues']['target'],
                'net_profit_percentage' => $request->getParam('ominousmanagement')[1]['revenues']['percentage'],

                'services_value' => $request->getParam('ominousmanagement')[1]['services']['value'],
                'services_percentage' => $request->getParam('ominousmanagement')[1]['services']['percentage'],

                'kpi_type' => $kpitype_comparative_entity,
                'kpi' => $kpi_entity
            );

            (new ClassMethods())->hydrate($ominousmanagement, $ominousmanagement_entity);

            $this->em->persist($ominousmanagement_entity); //--> Persist entity Hospital
            $this->em->flush();

//--> Data for entity Systems - Comparativo
            $data_systems = array(
                'revenues_initial' => $request->getParam('systems')[1]['revenues']['initial'],
                'revenues_end' => $request->getParam('systems')[1]['revenues']['end'],
                'revenues_target' => $request->getParam('systems')[1]['revenues']['target'],
                'revenues_percentage' => $request->getParam('systems')[1]['revenues']['percentage'],

                'ebtida_initial' => $request->getParam('systems')[1]['revenues']['initial'],
                'ebtida_end' => $request->getParam('systems')[1]['revenues']['end'],
                'ebtida_target' => $request->getParam('systems')[1]['revenues']['target'],
                'ebtida_percentage' => $request->getParam('systems')[1]['revenues']['percentage'],

                'net_profit_initial' => $request->getParam('systems')[1]['revenues']['initial'],
                'net_profit_end' => $request->getParam('systems')[1]['revenues']['end'],
                'net_profit_target' => $request->getParam('systems')[1]['revenues']['target'],
                'net_profit_percentage' => $request->getParam('systems')[1]['revenues']['percentage'],

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

            (new ClassMethods())->hydrate($data_systems, $systems_entity);

            $this->em->persist($systems_entity); //--> Persist entity Systems
            $this->em->flush();

            return $response->withRedirect($this->router->pathFor('kpi'));
        }

        $this->view->render($response, 'kpi/add.twig');
        return $response;
    }

    public function delete(Request $request, Response $response, $args)
    {
        $kpi = $this->em->getRepository('App\Entity\Kpi')->findOneById('1');

        $this->em->remove($kpi); //--> Remove entity Kpi
        $this->em->flush();

        return $response->withRedirect($this->router->pathFor('kpi'));
    }
}