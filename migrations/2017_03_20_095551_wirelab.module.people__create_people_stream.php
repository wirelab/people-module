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
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required' => true,
        ],
        'image' => [
            'required' => true,
        ],
        'title' => [
            'translatable' => true,
        ],
    ];

}
