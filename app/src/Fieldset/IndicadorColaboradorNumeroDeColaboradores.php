<?php

namespace App\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class IndicadorColaboradorNumeroDeColaboradores extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('fieldset_colaborador_numerocolaboradores');

//<editor-fold desc="Fields do item 1º Ano">
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'firstYearNumberOfEmployees',
            'options' => array(
                'label' => 'Qtde de colaboradores',
            ),
            'attributes' => array(
                'id' => 'firstYearNumberOfEmployees',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'firstYearIcons',
            'options' => array(
                'label' => 'Qtde de icones',
            ),
            'attributes' => array(
                'id' => 'firstYearIcons',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));
//</editor-fold>

//<editor-fold desc="Fields do item 2º Ano">
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'secondYearNumberOfEmployees',
            'options' => array(
                'label' => 'Qtde de colaboradores',
            ),
            'attributes' => array(
                'id' => 'secondYearNumberOfEmployees',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'secondYearIcons',
            'options' => array(
                'label' => 'Qtde de icones',
            ),
            'attributes' => array(
                'id' => 'secondYearIcons',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));
//</editor-fold>
    }

    public function getInputFilterSpecification()
    {
        return array(
//<editor-fold desc="Filter do item 1º Ano">
            'firstYearNumberOfEmployees' => array(
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
            'firstYearIcons' => array(
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
//</editor-fold>

//<editor-fold desc="Filter do item 2º Ano">
            'secondYearNumberOfEmployees' => array(
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
            'secondYearIcons' => array(
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
//</editor-fold>
        );
    }

}