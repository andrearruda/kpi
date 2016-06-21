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
            'type' => 'App\Fieldset\IndicadorInformacoesFieldset'
        ));

        $this->add(array(
            'type' => 'App\Fieldset\IndicadorPeriodoFieldset'
        ));

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
    }

    public function getInputFilterSpecification()
    {
        return array();
    }

}