<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorComparativoGrupoBenner extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_comparativo_grupo_benner');

    }

    public function getInputFilterSpecification()
    {
        return array();
    }

}