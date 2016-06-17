<?php
// Routes

$app->get('/', App\Action\HomeAction::class)->setName('homepage');

$app->group('/kpi', function(){
    $this->get('', 'App\Controller\KpiController:index')->setName('kpi');
    $this->any('/add', 'App\Controller\KpiController:add')->setName('kpi.add');
    $this->any('/edit/{id}', 'App\Controller\KpiController:edit')->setName('kpi.edit');
    $this->get('/delete/{id}', 'App\Controller\KpiController:delete')->setName('kpi.delete');
    $this->post('/active/{id}', 'App\Controller\KpiController:active')->setName('kpi.active');
});

$app->get('/{type}/kpi', 'App\Controller\KpiController:show')->setName('kpi.show');

$app->group('/indicador', function(){
    $this->get('', 'App\Action\IndicadorAction:index')->setName('indicador');
    $this->any('/add', 'App\Action\IndicadorAction:add')->setName('indicador.add');
    $this->any('/edit/{id}', 'App\Action\IndicadorAction:edit')->setName('indicador.edit');
    $this->get('/delete/{id}', 'App\Action\IndicadorAction:delete')->setName('indicador.delete');
    $this->post('/active/{id}', 'App\Action\IndicadorAction:active')->setName('indicador,0,.active');
});