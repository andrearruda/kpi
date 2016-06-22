<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorColaboradorFaturamentoPorColaborador extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_colaborador_faturamentocolaboradores');

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => '1YearBillingByEmployees',
            'options' => array(
                'label' => 'Faturamento',
            ),
            'attributes' => array(
                'id' => '1YearBillingByEmployees',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => '2YearBillingByEmployees',
            'options' => array(
                'label' => 'Faturamento',
            ),
            'attributes' => array(
                'id' => '2YearBillingByEmployees',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            '1YearBillingByEmployees' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim')
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'break_chain_on_failure' => true,
                    ),
                    array(
                        'name' => 'Int',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            '2YearBillingByEmployees' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim')
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'break_chain_on_failure' => true,
                    ),
                    array(
                        'name' => 'Int',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
        );
    }

}