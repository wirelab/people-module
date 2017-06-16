<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Wirelab\PeopleModule\Category\CategoryModel;

class WirelabModulePeopleCreatePeopleFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'  => 'anomaly.field_type.text',
        'slug'  => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '-'
            ]
        ],
        'title' => 'anomaly.field_type.text',
        'image' => [
            'type'   => 'anomaly.field_type.file',
            'config' => [
                'folders' => [
                    'images',
                ]
            ],
        ],
        'category' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => CategoryModel::class,
            ],
        ],
    ];

}
