<?php namespace Wirelab\PeopleModule\Person\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class PersonTableBuilder extends TableBuilder
{

    protected $columns = [
        'entry.image.preview',
        'name',
        'title',
        'category',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'view' => [
            'href' => 'people/{entry.slug}',
            'permission' => 'wirelab.module.people::people.view',
        ],
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    protected $options = [
        'sortable'
    ];

}
