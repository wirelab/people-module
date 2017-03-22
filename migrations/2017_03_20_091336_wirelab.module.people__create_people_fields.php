<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModulePeopleCreatePeopleFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'  => 'anomaly.field_type.text',
        'title' => 'anomaly.field_type.text',
        'image' => [
            'type'   => 'anomaly.field_type.file',
            'config' => [
                'folders' => [
                    'images',
                ]
            ],
        ],
    ];

}
