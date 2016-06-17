<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorComparativoGrupoBenner extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_comparativo_grupobenner');

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_revenues_target',
            'options' => array(
                'label' => 'Meta',
            ),
            'attributes' => array(
                'id' => 'groupbenner_revenues_target',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_revenues_initial',
            'options' => array(
                'label' => '1º Ano',
            ),
            'attributes' => array(
                'id' => 'groupbenner_revenues_initial',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_revenues_end',
            'options' => array(
                'label' => '2º Ano',
            ),
            'attributes' => array(
                'id' => 'groupbenner_revenues_end',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_revenues_percentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'groupbenner_revenues_percentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_ebtida_target',
            'options' => array(
                'label' => 'Meta',
            ),
            'attributes' => array(
                'id' => 'groupbenner_ebtida_target',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_ebtida_initial',
            'options' => array(
                'label' => '1º Ano',
            ),
            'attributes' => array(
                'id' => 'groupbenner_ebtida_initial',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_ebtida_end',
            'options' => array(
                'label' => '2º Ano',
            ),
            'attributes' => array(
                'id' => 'groupbenner_ebtida_end',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_ebtida_percentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'groupbenner_ebtida_percentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_netprofit_target',
            'options' => array(
                'label' => 'Meta',
            ),
            'attributes' => array(
                'id' => 'groupbenner_netprofit_target',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_netprofit_initial',
            'options' => array(
                'label' => '1º Ano',
            ),
            'attributes' => array(
                'id' => 'groupbenner_netprofit_initial',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_netprofit_end',
            'options' => array(
                'label' => '2º Ano',
            ),
            'attributes' => array(
                'id' => 'groupbenner_netprofit_end',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'groupbenner_netprofit_percentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'groupbenner_netprofit_percentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'groupbenner_revenues_target' => array(
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
            'groupbenner_revenues_initial' => array(
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
            'groupbenner_revenues_end' => array(
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
            'groupbenner_revenues_percentage' => array(
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

            'groupbenner_ebtida_target' => array(
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
            'groupbenner_ebtida_initial' => array(
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
            'groupbenner_ebtida_end' => array(
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
            'groupbenner_ebtida_percentage' => array(
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

            'groupbenner_netprofit_target' => array(
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
            'groupbenner_netprofit_initial' => array(
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
            'groupbenner_netprofit_end' => array(
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
            'groupbenner_netprofit_percentage' => array(
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