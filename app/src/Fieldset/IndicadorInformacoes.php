<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorInformacoes extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_informacoes');

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'date',
            'options' => array(
                'label' => 'Data',
            ),
            'attributes' => array(
                'id' => 'date',
                'required' => false,
                'readonly' => true,
                'disabled' => true,
                'class' => 'form-control',
                'value' => date('d/m/Y')
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'responsible',
            'options' => array(
                'label' => 'Responsável',
            ),
            'attributes' => array(
                'id' => 'responsible',
                'required' => true,
                'class' => 'form-control',
                'maxlength' => 45
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'responsible' => array(
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
                        'name' => 'StringLength',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'max' => 45
                        )
                    ),
                )
            )
        );
    }

}