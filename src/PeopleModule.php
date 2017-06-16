<?php namespace Wirelab\PeopleModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class PeopleModule extends Module
{

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-users';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'people' => [
            'buttons' => [
                'new_person',
                'assignments' =>[
                    'enabled' => 'admin/people',
                    'permission' => 'wirelab.module.people::fields.*',
                ],
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
        'fields' => [
            'buttons' => [
                'new_field' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href' => 'admin/people/fields/choose',
                ],
            ],
            'sections' => [
                'assignments' => [
                    'hidden'  => true,
                    'href'    => 'admin/people/fields/assignments/{request.route.parameters.stream}',
                    'buttons' => [
                        'assign_fields' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href' => 'admin/people/fields/assignments/{request.route.parameters.stream}/choose',
                        ],
                    ]
                ]
            ],
        ],
    ];
}
