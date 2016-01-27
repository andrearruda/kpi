<?php
// Routes

$app->group('/kpi', function(){
    $this->get('', 'App\Controller\KpiController:index')->setName('kpi');
    $this->any('/add', 'App\Controller\KpiController:add')->setName('kpi.add');
    $this->any('/edit/{id}', 'App\Controller\KpiController:edit')->setName('kpi.edit');
    $this->any('/delete/{id}', 'App\Controller\KpiController:delete')->setName('kpi.delete');
});
