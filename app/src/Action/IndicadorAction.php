<?php

namespace App\Action;

use Zend\Hydrator\ClassMethods;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Thapp\XmlBuilder\XMLBuilder;
use Thapp\XmlBuilder\Normalizer;

class IndicadorAction
{
    private $view;
    private $router;
    private $indicador_service;
    private $indicador_form;

    public function __construct(\Slim\Views\Twig $view, \Slim\Router $router, \App\Service\IndicadorService $indicador_service, \App\Form\IndicadorForm $indicador_form)
    {
        $this->view = $view;
        $this->router = $router;
        $this->setIndicadorService($indicador_service);
        $this->setIndicadorForm($indicador_form);
    }

    public function index(Request $request, Response $response, $args)
    {
        $kpis = $this->getIndicadorService()->getList();
        $this->view->render($response, 'indicador/index.twig', [
            'kpis' => $kpis
        ]);
        return $response;
    }

    public function add(Request $request, Response $response, $args)
    {
        $form = $this->getIndicadorForm();

        if($request->isPost())
        {
            $data_form = $request->getParsedBody();

            foreach($data_form['fieldset_periodo'] as $key => $item)
            {
                $date = substr($item, -4) . '-' . substr($item, 0, 2) . '-01';
                $data_form['fieldset_periodo'][$key] = new \DateTime($date);
            }

            $form->setData($data_form);
            if($form->isValid())
            {
                $this->getIndicadorService()->save($data_form);
                return $response->withRedirect($this->router->pathFor('indicador'));
            }
            else
            {
                $form->setData($request->getParsedBody());
            }
        }

        $this->view->render($response, 'indicador/add.twig', array(
            'form' => $form
        ));
        return $response;
    }

    public function edit(Request $request, Response $response, $args)
    {
        $data_form = $this->getIndicadorService()->getById($args['id']);

        $form = $this->getIndicadorForm();
        $form->setData($data_form);

        if($request->isPost())
        {
            $data_form = $request->getParsedBody();

            foreach($data_form['fieldset_periodo'] as $key => $item)
            {
                $date = substr($item, -4) . '-' . substr($item, 0, 2) . '-01';
                $data_form['fieldset_periodo'][$key] = new \DateTime($date);
            }

            $form->setData($data_form);
            if($form->isValid())
            {
                $this->getIndicadorService()->save($data_form, $args['id']);
                return $response->withRedirect($this->router->pathFor('indicador'));
            }
            else
            {
                $form->setData($request->getParsedBody());
            }
        }

        $this->view->render($response, 'indicador/edit.twig', array(
            'form' => $form
        ));
        return $response;
    }

    public function delete(Request $request, Response $response, $args)
    {
        $this->getIndicadorService()->remove($args['id']);
        return $response->withRedirect($this->router->pathFor('indicador'));
    }

    public function active(Request $request, Response $response, $args)
    {
        $query_builder = $this->getIndicadorService()->getEntityManager()->createQueryBuilder();
        $query_builder->update('App\Entity\Kpi', 'kpi')->set('kpi.active', '0')->getQuery()->execute();

        $em = $this->getIndicadorService()->getEntityManager();
        $kpi = $em->getRepository('App\Entity\Kpi')->findOneById($args['id']);
        $kpi->setActive(1);

        $em->persist($kpi);
        $em->flush();

        return $response->withJson((new ClassMethods())->extract($kpi));
    }

    public function show(Request $request, Response $response, $args)
    {
        $kpi_active = $this->getIndicadorService()->getEntityManager()->getRepository('App\Entity\Kpi')->findOneByActive(1);
        $kpi = $this->getIndicadorService()->getById($kpi_active->getId());

        foreach($kpi['fieldset_periodo'] as $key => $item)
        {
            $date = substr($item, -4) . '-' . substr($item, 0, 2) . '-01';
            $kpi['fieldset_periodo'][$key] = $date;
        }

        $data = array(
            'kpi' => array(
                'responsible' => $kpi['fieldset_informacoes']['responsible'],
                'period' => array(
                    'first' => array(
                        'initial' => $kpi['fieldset_periodo']['period_first_initial'],
                        'end' => $kpi['fieldset_periodo']['period_first_end']
                    ),
                    'second' => array(
                        'initial' => $kpi['fieldset_periodo']['period_second_initial'],
                        'end' => $kpi['fieldset_periodo']['period_second_end']
                    )
                )
            ),
            'comparative' => array(
                'groupbenner' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_grupobenner']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_grupobenner']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_grupobenner']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_grupobenner']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_grupobenner']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_grupobenner']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_grupobenner']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_grupobenner']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_grupobenner']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_grupobenner']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_grupobenner']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_grupobenner']['netprofitPercentage'], 1, '.', ''),
                    )
                ),
                'healthoperators' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['netprofitPercentage'], 1, '.', ''),
                    ),
                    'distributionrevenue' => array(
                        'lu' => array(
                            'value' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['luValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['luPercentage'], 1, '.', '')
                        ),
                        'lum' => array(
                            'value' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['lumValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['lumPercentage'], 1, '.', '')
                        ),
                        'implantation' => array(
                            'value' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['implantationValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['implantationPercentage'], 1, '.', '')
                        ),
                        'sms' => array(
                            'value' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['smsValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['smsPercentage'], 1, '.', '')
                        ),
                        'medicalservices' => array(
                            'value' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['medicalServicesValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['medicalServicesPercentage'], 1, '.', '')
                        ),
                        'workout' => array(
                            'value' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['workoutValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_operadorasdesaude']['workoutPercentage'], 1, '.', '')
                        ),
                    )
                ),
                'hospital' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_hospitalar']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_hospitalar']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_hospitalar']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_hospitalar']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_hospitalar']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_hospitalar']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_hospitalar']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_hospitalar']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_hospitalar']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_hospitalar']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_hospitalar']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_hospitalar']['netprofitPercentage'], 1, '.', ''),
                    ),
                    'distributionrevenue' => array(
                        'lu' => array(
                            'value' => number_format($kpi['fieldset_comparativo_hospitalar']['luValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_hospitalar']['luPercentage'], 1, '.', '')
                        ),
                        'lum' => array(
                            'value' => number_format($kpi['fieldset_comparativo_hospitalar']['lumValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_hospitalar']['lumPercentage'], 1, '.', '')
                        ),
                        'implantation' => array(
                            'value' => number_format($kpi['fieldset_comparativo_hospitalar']['implantationValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_hospitalar']['implantationPercentage'], 1, '.', '')
                        ),
                    )
                ),
                'ominousmanagement' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['netprofitPercentage'], 1, '.', ''),
                    ),
                    'distributionrevenue' => array(
                        'services' => array(
                            'value' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['servicesValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_gestaodesinistro']['servicesPercentage'], 1, '.', '')
                        )
                    )
                ),
                'systems' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_sistemas']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_sistemas']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_sistemas']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_sistemas']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_sistemas']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_sistemas']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_comparativo_sistemas']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_comparativo_sistemas']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_comparativo_sistemas']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['netprofitPercentage'], 1, '.', ''),
                    ),
                    'distributionrevenue' => array(
                        'lu' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['luValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['luPercentage'], 1, '.', ''),
                        ),
                        'lum' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['lumValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['lumPercentage'], 1, '.', ''),
                        ),
                        'implantation' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['implantationValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['implantationPercentage'], 1, '.', ''),
                        ),
                        'sms' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['smsValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['smsPercentage'], 1, '.', ''),
                        ),
                        'royaltes' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['royaltesValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['royaltesPercentage'], 1, '.', ''),
                        ),
                        'maintenancepc' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['maintenancePcValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['maintenancePcPercentage'], 1, '.', ''),
                        ),
                        'outsourcing' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['outsourcingValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['outsourcingPercentage'], 1, '.', ''),
                        ),
                        'bpo' => array(
                            'value' => number_format($kpi['fieldset_comparativo_sistemas']['bpoValue'], 1, '.', ''),
                            'percentage' => number_format($kpi['fieldset_comparativo_sistemas']['bpoPercentage'], 1, '.', ''),
                        )
                    )
                )
            ),
            'budgeted' => array(
                'groupbenner' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_grupobenner']['netprofitPercentage'], 1, '.', ''),
                    )
                ),
                'healthoperators' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_operadorasdesaude']['netprofitPercentage'], 1, '.', ''),
                    )
                ),
                'hospital' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_hospitalar']['netprofitPercentage'], 1, '.', ''),
                    )
                ),
                'ominousmanagement' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_gestaodesinistro']['netprofitPercentage'], 1, '.', ''),
                    )
                ),
                'systems' => array(
                    'revenues' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_sistemas']['revenuesInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_sistemas']['revenuesEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_sistemas']['revenuesTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_sistemas']['revenuesPercentage'], 1, '.', ''),
                    ),
                    'ebtida' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_sistemas']['ebtidaInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_sistemas']['ebtidaEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_sistemas']['ebtidaTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_sistemas']['ebtidaPercentage'], 1, '.', ''),
                    ),
                    'netprofit' => array(
                        'initial' => number_format($kpi['fieldset_orcadorealizado_sistemas']['netprofitInitial'], 1, '.', ''),
                        'end' => number_format($kpi['fieldset_orcadorealizado_sistemas']['netprofitEnd'], 1, '.', ''),
                        'target' => number_format($kpi['fieldset_orcadorealizado_sistemas']['netprofitTarget'], 1, '.', ''),
                        'percentage' => number_format($kpi['fieldset_orcadorealizado_sistemas']['netprofitPercentage'], 1, '.', ''),
                    )
                )
            ),
            'employees' => array(
                'initial' => array(
                    'employees' => $kpi['fieldset_colaborador_numerocolaboradores']['firstYearNumberOfEmployees'],
                    'icons' => $kpi['fieldset_colaborador_numerocolaboradores']['firstYearIcons'],
                    'billing' => number_format($kpi['fieldset_colaborador_faturamentocolaboradores']['firstYearBillingByEmployees'], 1, '.', '')
                ),
                'end' => array(
                    'employees' => $kpi['fieldset_colaborador_numerocolaboradores']['secondYearNumberOfEmployees'],
                    'icons' => $kpi['fieldset_colaborador_numerocolaboradores']['secondYearIcons'],
                    'billing' => number_format($kpi['fieldset_colaborador_faturamentocolaboradores']['secondYearBillingByEmployees'], 1, '.', '')
                )
            )
        );

        if($args['type'] == 'xml')
        {
            $xmlBuilder = new XmlBuilder('root');
            $xmlBuilder->load($data);
            $xml_output = $xmlBuilder->createXML(true);

            $finfo = new \finfo(FILEINFO_MIME_TYPE);

            $response->write($xml_output);
            $response = $response->withHeader('content-type', $finfo->buffer($xml_output));
            return $response;
        }
        else
        {
            return $response->withJson($data);
        }
    }

    /**
     * @return \App\Service\IndicadorService
     */
    public function getIndicadorService()
    {
        return $this->indicador_service;
    }

    /**
     * @param mixed $indicador_service
     */
    public function setIndicadorService($indicador_service)
    {
        $this->indicador_service = $indicador_service;
    }

    /**
     * @return \App\Form\IndicadorForm
     */
    public function getIndicadorForm()
    {
        return $this->indicador_form;
    }

    /**
     * @param mixed $indicador_form
     */
    public function setIndicadorForm($indicador_form)
    {
        $this->indicador_form = $indicador_form;
    }


}