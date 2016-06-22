<?php

namespace App\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorForm extends Form implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('form_indicador');

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorInformacoes'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorPeriodo'
        ));

//<editor-fold desc="Fieldsets de Comparativo">
        $this->add(array(
            'type' => 'App\Fieldset\IndicadorComparativoGrupoBenner'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorComparativoOperadorasDeSaude'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorComparativoHospitalar'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorComparativoGestaoDeSinistro'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorComparativoSistemas'
        ));
//</editor-fold>

//<editor-fold desc="Fieldsets de Orçamento X Realizado">
        $this->add(array(
            'type' => 'App\Fieldset\IndicadorOrcadoRealizadoGrupoBenner'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorOrcadoRealizadoOperadorasDeSaude'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorOrcadoRealizadoHospitalar'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorOrcadoRealizadoGestaoDeSinistro'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorOrcadoRealizadoSistemas'
        ));
//</editor-fold>

//<editor-fold desc="Fieldsets de Colaboradores">
        $this->add(array(
            'type' => 'App\Fieldset\IndicadorColaboradorNumeroDeColaboradores'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorColaboradorFaturamentoPorColaborador'
        ));
//</editor-fold>
    }

    public function getInputFilterSpecification()
    {
        return array();
    }

}