<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModulePeopleCreateCategoriesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'categories',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'required' => true,
            'translatable' => true,
        ],
        'slug' => [
            'required' => true,
            'config' => [
                'slugify' => 'title',
            ]
        ],
    ];

}
