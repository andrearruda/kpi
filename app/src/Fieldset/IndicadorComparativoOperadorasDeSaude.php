<?php
namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorComparativoOperadorasDeSaude extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_comparativo_operadorasdesaude');

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'revenuesTarget',
            'options' => array(
                'label' => 'Meta',
            ),
            'attributes' => array(
                'id' => 'revenuesTarget',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'revenuesInitial',
            'options' => array(
                'label' => '1º Ano',
            ),
            'attributes' => array(
                'id' => 'revenuesInitial',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'revenuesEnd',
            'options' => array(
                'label' => '2º Ano',
            ),
            'attributes' => array(
                'id' => 'revenuesEnd',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'revenuesPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'revenuesPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'ebtidaTarget',
            'options' => array(
                'label' => 'Meta',
            ),
            'attributes' => array(
                'id' => 'ebtidaTarget',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'ebtidaInitial',
            'options' => array(
                'label' => '1º Ano',
            ),
            'attributes' => array(
                'id' => 'ebtidaInitial',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'ebtidaEnd',
            'options' => array(
                'label' => '2º Ano',
            ),
            'attributes' => array(
                'id' => 'ebtidaEnd',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'ebtidaPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'ebtidaPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'netprofitTarget',
            'options' => array(
                'label' => 'Meta',
            ),
            'attributes' => array(
                'id' => 'netprofitTarget',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'netprofitInitial',
            'options' => array(
                'label' => '1º Ano',
            ),
            'attributes' => array(
                'id' => 'netprofitInitial',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'netprofitEnd',
            'options' => array(
                'label' => '2º Ano',
            ),
            'attributes' => array(
                'id' => 'netprofitEnd',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'netprofitPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'netprofitPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'luValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'luValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'luPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'luPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'lumValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'lumValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'lumPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'lumPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'ImplantationValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'ImplantationValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'ImplantationPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'ImplantationPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'SmsValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'SmsValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'SmsPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'SmsPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'MedicalServicesValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'MedicalServicesValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'MedicalServicesPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'MedicalServicesPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'WorkoutValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'WorkoutValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'WorkoutPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'WorkoutPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'revenuesTarget' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'revenuesInitial' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'revenuesEnd' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'revenuesPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'ebtidaTarget' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'ebtidaInitial' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'ebtidaEnd' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'ebtidaPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'netprofitTarget' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'netprofitInitial' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'netprofitEnd' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'netprofitPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'luValue' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'luPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'lumValue' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'lumPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'ImplantationValue' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'ImplantationPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'MedicalServicesValue' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'MedicalServicesPercentage' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),

            'WorkoutValue' => array(
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
                        'name' => 'Float',
                        'break_chain_on_failure' => true,
                        'options' => array(
                            'locale' => 'en_US'
                        )
                    )
                )
            ),
            'WorkoutPercentage' => array(
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
                        'name' => 'Float',
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