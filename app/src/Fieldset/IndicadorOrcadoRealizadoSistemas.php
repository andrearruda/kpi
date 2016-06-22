<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorOrcadoRealizadoSistemas extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_orcadorealizado_sistemas');

//<editor-fold desc="Fields do item Faturamento">
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
//</editor-fold>

//<editor-fold desc="Fields do item Ebtida">
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
//</editor-fold>

//<editor-fold desc="Fields do item Lucro liquído">
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
//</editor-fold>
    }

    public function getInputFilterSpecification()
    {
        return array(
//<editor-fold desc="Filter do item Faturamento">
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
//</editor-fold>

//<editor-fold desc="Filter do item Ebtida">
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
//</editor-fold>

//<editor-fold desc="Filter do item Lucro liquído">
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
//</editor-fold>
        );
    }
}