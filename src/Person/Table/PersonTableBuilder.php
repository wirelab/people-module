<?php namespace Wirelab\PeopleModule\Person\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class PersonTableBuilder extends TableBuilder
{

    protected $columns = [
        'name',
        'title'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
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

}
