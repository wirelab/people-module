<?php namespace Wirelab\PeopleModule\Person\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class PersonFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        '*',
        'slug' => [
            'disabled' => 'edit',
        ],
    ];

}
