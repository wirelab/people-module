<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModulePeopleCreatePeopleStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'people',
        'title_column' => 'name',
        'translatable' => true,
        'sortable'     => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'image' => [
            'required' => true,
        ],
        'name' => [
            'required' => true,
        ],
        'slug' => [
            'required' => true,
        ],
        'title' => [
            'required' => true,
            'translatable' => true,
        ],
        'category' => [
            'required' => true,
        ],
    ];

}
