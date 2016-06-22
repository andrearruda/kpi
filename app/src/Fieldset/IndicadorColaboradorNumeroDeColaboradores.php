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
            'name' => '1YearNumberOfEmployees',
            'options' => array(
                'label' => 'Qtde de colaboradores',
            ),
            'attributes' => array(
                'id' => '1YearNumberOfEmployees',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => '1YearIcons',
            'options' => array(
                'label' => 'Qtde de icones',
            ),
            'attributes' => array(
                'id' => '1YearIcons',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));
//</editor-fold>

//<editor-fold desc="Fields do item 2º Ano">
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => '2YearNumberOfEmployees',
            'options' => array(
                'label' => 'Qtde de colaboradores',
            ),
            'attributes' => array(
                'id' => '2YearNumberOfEmployees',
                'required' => true,
                'class' => 'form-control input-mask-number-int',
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => '2YearIcons',
            'options' => array(
                'label' => 'Qtde de icones',
            ),
            'attributes' => array(
                'id' => '2YearIcons',
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
            '1YearNumberOfEmployees' => array(
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
            '1YearIcons' => array(
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
            '2YearNumberOfEmployees' => array(
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
            '2YearIcons' => array(
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