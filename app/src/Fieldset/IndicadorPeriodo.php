<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorPeriodo extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_periodo');

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'period_first_initial',
            'options' => array(
                'label' => 'Início',
            ),
            'attributes' => array(
                'id' => 'period_first_initial',
                'required' => true,
                'placeholder' => 'mm/aaaa',
                'class' => 'form-control input-mask-period'
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'period_first_end',
            'options' => array(
                'label' => 'Fim',
            ),
            'attributes' => array(
                'id' => 'period_first_end',
                'required' => true,
                'placeholder' => 'mm/aaaa',
                'class' => 'form-control input-mask-period'
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'period_second_initial',
            'options' => array(
                'label' => 'Início',
            ),
            'attributes' => array(
                'id' => 'period_second_initial',
                'required' => true,
                'placeholder' => 'mm/aaaa',
                'class' => 'form-control input-mask-period'
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'period_second_end',
            'options' => array(
                'label' => 'Fim',
            ),
            'attributes' => array(
                'id' => 'period_second_end',
                'required' => true,
                'placeholder' => 'mm/aaaa',
                'class' => 'form-control input-mask-period'
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'period_first_initial' => array(
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
                        'name' => 'Date',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'format' => 'd/m/Y'
                        )
                    )
                )
            ),
            'period_first_end' => array(
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
                        'name' => 'Date',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'format' => 'd/m/Y'
                        )
                    )
                )
            ),

            'period_second_initial' => array(
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
                        'name' => 'Date',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'format' => 'd/m/Y'
                        )
                    )
                )
            ),
            'period_second_end' => array(
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
                        'name' => 'Date',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'format' => 'd/m/Y'
                        )
                    )
                )
            ),
        );
    }

}