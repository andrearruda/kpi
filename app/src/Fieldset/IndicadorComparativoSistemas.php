<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorComparativoSistemas extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_comparativo_sistemas');

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

//<editor-fold desc="Fields do subitem Distribuição por Receita">
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
            'name' => 'implantationValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'implantationValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'implantationPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'implantationPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'smsValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'smsValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'smsPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'smsPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'royaltesValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'royaltesValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'royaltesPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'royaltesPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'maintenancePcValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'maintenancePcValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'maintenancePcPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'maintenancePcPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'outsourcingValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'outsourcingValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'outsourcingPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'outsourcingPercentage',
                'required' => true,
                'class' => 'form-control input-mask-percentage',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'bpoValue',
            'options' => array(
                'label' => 'Valor',
            ),
            'attributes' => array(
                'id' => 'bpoValue',
                'required' => true,
                'class' => 'form-control input-mask-money-milhoes',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'bpoPercentage',
            'options' => array(
                'label' => 'Porcentagem',
            ),
            'attributes' => array(
                'id' => 'bpoPercentage',
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

//<editor-fold desc="Fields do item Ebtida">
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

//<editor-fold desc="Fields do item Lucro liquído">
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

//<editor-fold desc="Filter do subitem Distribuição por Receita">
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

            'implantationValue' => array(
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
            'implantationPercentage' => array(
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

            'smsValue' => array(
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
            'smsPercentage' => array(
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

            'royaltesValue' => array(
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
            'royaltesPercentage' => array(
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

            'maintenancePcValue' => array(
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
            'maintenancePcPercentage' => array(
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

            'outsourcingValue' => array(
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
            'outsourcingPercentage' => array(
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

            'bpoValue' => array(
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
            'bpoPercentage' => array(
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