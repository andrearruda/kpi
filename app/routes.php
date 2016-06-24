<?php
// Routes

$app->get('/', App\Action\HomeAction::class)->setName('homepage');

$app->group('/indicador', function(){
    $this->get('', 'App\Action\IndicadorAction:index')->setName('indicador');
    $this->any('/add', 'App\Action\IndicadorAction:add')->setName('indicador.add');
    $this->any('/edit/{id}', 'App\Action\IndicadorAction:edit')->setName('indicador.edit');
    $this->get('/delete/{id}', 'App\Action\IndicadorAction:delete')->setName('indicador.delete');
    $this->any('/active/{id}', 'App\Action\IndicadorAction:active')->setName('indicador.active');
});

$app->get('/{type}/kpi', 'App\Action\IndicadorAction:show')->setName('indicador.show');